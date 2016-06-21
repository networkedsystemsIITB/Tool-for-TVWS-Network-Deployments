from math import radians, cos, sin, asin, sqrt, atan2, degrees
def haversine(lat1, lon1, lat2, lon2):
	"""
	Calculate the great circle distance between two points 
	on the earth (specified in decimal degrees)
	"""
	# convert decimal degrees to radians 
	lon1, lat1, lon2, lat2 = map(radians, [lon1, lat1, lon2, lat2])
	# haversine formula 
	dlon = lon2 - lon1 
	dlat = lat2 - lat1 
	a = sin(dlat/2)**2 + cos(lat1) * cos(lat2) * sin(dlon/2)**2
	c = 2 * asin(sqrt(a)) 
	km = 6367 * c
	dist = km * 1000
	return dist


import csv
import math
data = list(csv.reader(open('csv/place_pop_lat_long_alt_bw_range_cap.csv')))

linear_range = []

#print len(data)

for i in range (0, len(data)):
	linear_range.append(math.sqrt(float(data[i][6]) * math.pow(10, 6)))  #in metres
	#print "\nlinear_range [%d] = %f " % (i, linear_range[i])

euclidean_distance = [[0 for i in range(len(data))] for j in range(len(data))]

for i in range (0, len(data)):
	for j in range (i+1, len(data)):
		euclidean_distance[i][j] = haversine(float(data[i][2]), float(data[i][3]), float(data[j][2]), float(data[j][3]))
		euclidean_distance[i][i] = 9999999999

euclidean_distance[len(data)-1][len(data)-1] = 9999999999

#print "\n\nlength of euclidean_distance = ", len(euclidean_distance)

numrows = len(euclidean_distance)
numcols = len(euclidean_distance[0])

#print "\n\nRows = ", numrows
#print "\n\nColumns = ", numcols

for i in range (0, len(data)):
	for j in range (i+1, len(data)):
		euclidean_distance[j][i] = euclidean_distance[i][j]

f = open('distance_bw_nodes.txt','w')

s = [[str(e) for e in row] for row in euclidean_distance]
lens = [max(map(len, col)) for col in zip(*s)]
fmt = '\t'.join('{{:{}}}'.format(x) for x in lens)
table = [fmt.format(*row) for row in s]
f.write('\n'.join(table))
f.close()

import numpy
arr = numpy.loadtxt('distance_bw_nodes.txt', delimiter='\t')
#print arr[0]
#print len(arr)

b = arr.argmin(axis=1)
print b

f = open('csv/inter_place_pop_lat_long_alt_bw.csv','w')
#f.write('hi there\n') # python will convert \n to os.linesep



def place_intermediate_nodes(arr, b):
	dictMap = {}
	for i in range(0, len(arr)):
		print "min(arr) = ", min(arr[i])
		print "linear_range = ", linear_range[i]
		#print "\n Intermediate node placement for node %d \n" % i
		if (linear_range[i] <= min(arr[i])):
			#call a function which calculates median node at distance=3 between i (lat,longs) and b[i] (lat, longs)	
			inter_node_points = calc_distance(i, float(data[i][2]), float(data[i][3]), float(data[b[i]][2]), float(data[b[i]][3]), arr[i][b[i]], inter_distance=8000)
			dictMap[i] = b[i]
			dictMap[b[i]] = i
	
	print dictMap	
		

def calc_distance(nodeID, start_lat, start_long, end_lat, end_long, end_distance, inter_distance=8000):
	R = 6378.1 #Radius of the Earth
	
	delta_long = end_long - start_long
	if delta_long > 180:
		delta_long = delta_long % 180
	X = cos (radians(end_lat)) * sin (radians(delta_long))
	Y = cos (radians(start_lat)) * sin (radians(end_lat)) - sin (radians(start_lat)) * cos (radians(end_lat)) * cos (radians(delta_long))
	brng = atan2(X, Y)

	count = 0
	for i in range(0, int(end_distance), inter_distance):
		count += 1

	latLongPoints = [[0]*2]*(count-1)
	
	#print "\n :: LAT LONG POINTS INITIAL VALUE ::", latLongPoints

	j = 0
	for i in range (inter_distance, int(end_distance), inter_distance):
		#print "\n I = %d J = %d" % (i, j)
		
		if (i == inter_distance):
			lat1 = math.radians(float(start_lat)) #Current lat point converted to radians
			lon1 = math.radians(float(start_long)) #Current long point converted to radians
		
		else:
			lat1 = math.radians(float(latLongPoints[j-1][0]))
			lon1 = math.radians(float(latLongPoints[j-1][1]))
		
		latLongPoints[j][0] = asin( sin(lat1) * cos(inter_distance*0.001/R) +
											 cos(lat1) * sin(inter_distance*0.001/R) * cos(brng))
		latLongPoints[j][1] = lon1 + atan2(sin(brng) * sin(inter_distance*0.001/R) * cos(lat1),
													  cos(inter_distance*0.001/R) - sin(lat1) * sin(latLongPoints[j][0]))
		
		latLongPoints[j][0] = degrees(latLongPoints[j][0])
		latLongPoints[j][1] = degrees(latLongPoints[j][1])
		
		#print "\nlatLongPoints[%d][0] = %f: " % (j, latLongPoints[j][0])
		#print "latLongPoints[%d][1] = %f: " % (j, latLongPoints[j][1])
		
		#f.write("IN%d_" % i)
		f.write("IN%d_%d,1,%f,%f,98,0.1\n" % (nodeID, j, latLongPoints[j][0], latLongPoints[j][1]))
		
		j += 1
		

	#print "\n :: LAT LONG POINTS FINAL VALUE ::", latLongPoints
	return latLongPoints		

place_intermediate_nodes(arr, b)

f.close()
