f = open('after_edit.txt', 'r')
a=""
for line in f:
	a=line
k=a.split(",")
j=0
pp=""
flag=0
d={}
for i in k:
	if j % 8 !=0:
		pp=pp+i+","
		j=j+1
	else:
		flag=flag+1
		if flag<8:
			j=1
			pp=i+","
			continue
		#print pp[:-1]
		ll=pp[:-1].split(",")
		print ll
		#print ll
		key=ll[0]
		#print key
		value=ll[1]+" , "+ll[2]+" , "+ll[3]+" , "+ll[4]+" , "+ll[5]+" , "+ll[6]+" , "+ll[7]
		# print key+"---->"+value
		j=1
		pp=i+","
		d[key]=value
for i in d:
	print i,",",d[i]



