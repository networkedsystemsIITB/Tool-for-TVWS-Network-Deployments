with open('auto_place_pop_lat_long_alt_bw.csv', 'r') as f:
	line = f.readlines()
a=[]
for data in line:
	temp=[]
	t=data.split(',')
	for i in range(0,6):
		temp.append(t[i])
	a.append(temp)
ab=set([])
for i in a:
	ab.add(i)
print ab
#for i in ab:
#	b="" 
#	for j in range(0,6):
#		b=b+str(i[j])+","
#	print b[:-1]
