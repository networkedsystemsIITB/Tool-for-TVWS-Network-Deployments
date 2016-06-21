# argument is the file name
from math import radians, cos, sin, asin, sqrt
i=1
import sys
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
l=[]
with open(sys.argv[1], 'r') as f:
	line = f.readlines()
for i in range(len(line)):
    flag=0
    temp=str(line[i][:-1])
    for j in range(i,len(line)):
        if(line[i]==line[j]):
            continue
        else:			
            data1=line[i][:-1].split(',')
            data2=line[j][:-1].split(',')
            rang=float(data1[6])
            lat1=float(data1[2])
            lon1=float(data1[3])
            lat2=float(data2[2])
            lon2=float(data2[3])
            if(haversine(lon1,lat1,lon2,lat2)<=sqrt(rang/3.141)):
                temp=temp+","+str(j)
                #print temp
                flag=1
                #l.append(temp)
                #print data1[0],"---->",data2[0],haversine(lon1,lat1,lon2,lat2),sqrt(rang)
                #print temp,str(j)#line[i][:-1],",",j
    if (flag==0):
        #print temp
        l.append(temp)
    else:
        l.append(temp)
for i in l:
    temp=i.split(',')
    t=""
    for j in range(min(15,len(temp))):
        t=t+str(temp[j])+","
    t=t[:-1]
    for k in range(len(temp),15):
        t=t+",-1"
    print t
    #print i

			

