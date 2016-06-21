f = open('after_edit.txt', 'r')
a=""
for line in f:
	a=line
k=a.split(",")
s=""
data=[]
d={}
for i in range(0,len(k)):
	if(i==0):
		s=k[i]
		continue
	if(i % 8==0):
		data.append(s)
		s=k[i]
	else:
		s=s+","+k[i]
data.append(s[:-1])
for i in data:
	temp=i.split(",")
	key=temp[0]
	value=str(temp[1])+","+str(temp[2])+","+str(temp[3])+","+str(temp[4])+","+str(temp[5])+","+str(temp[6])+","+str(temp[7])
	d[key]=value
for i in d:
	if(i=="Place"):
		continue
	print i,",",d[i]