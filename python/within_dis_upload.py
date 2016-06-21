# argument 1: Lat of thane, 
# argument 2: lon of thane
# argument 3: range(in km)
from math import radians, cos, sin, asin, sqrt
import sys
#lat1=float(sys.argv[1])
#lon1=float(sys.argv[2])
ra=float(sys.argv[1])
i=1

pp=0
with open('csv/upload_place_pop_lat_long_alt_bw.csv', 'r') as f:
    line = f.readlines()
    for data in line:
        pp=pp+1
        if(pp==2):
            a=data.split(',')
            lat1=float(a[2])
            lon1=float(a[3])




def haversine(lon1, lat1, lon2, lat2):
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
    r = 6371 # Radius of earth in kilometers. Use 3956 for miles
    return c * r

with open('csv/upload_place_pop_lat_long_alt_bw.csv', 'r') as f:
	line = f.readlines()
for data in line:
	res=data.split(',')
	lat2=float(res[2])
	lon2=float(res[3])
	sample=""
        if( haversine(lon1, lat1, lon2, lat2) <= ra ):
		for k in res:
			sample=sample+str(k)+","
		print sample[:-2]
	
	

