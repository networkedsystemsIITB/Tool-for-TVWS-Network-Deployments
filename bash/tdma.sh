#first copy the .csv file to ns3 on which simulation will run
#for copying file local to remote

#sshpass -p "kanchan" scp -r after_edit_csv.csv kanchan@10.129.2.55:Kanchan/new_4/TDMA_Room/ns-3.21/

#this a.sh file are already in the home folder in server.
#a.sh itself will call sample.sh within ns3
#sshpass -p "kanchan" ssh kanchan@10.129.2.55 bash a.sh 


#get back the result file from remote to local

#sshpass -p "kanchan" scp -r kanchan@10.129.2.55:Kanchan/new_4/TDMA_Room/ns-3.21/final_ns3_res.csv  /var/www/html/GUI/

# merge two csv file
#1. after_edit_csv.csv  take the place and put it at the beging of final_ns3_res.csv 
#2. final_ns3_res.csv 
#sed -i 1d csv/line_place_pop_lat_long_alt_bw_range_cap.csv
cut -d, -f1 csv/line_place_pop_lat_long_alt_bw_range_cap.csv>temp.csv
paste temp.csv final_ns3_res.csv | awk '{print $1}' >temp1.csv
paste temp1.csv final_ns3_res.csv | awk '{print $1,",",$2,$3,$4}' >temp2.csv

# to remove the last line
lines=$(wc -l < temp2.csv) ; (( lines -= 1 )) ; head -$lines temp2.csv >d.csv

 head -1 csv/line_place_pop_lat_long_alt_bw_range_cap.csv>c.csv
 cat c.csv d.csv> csv/final_ns3_res_merge.csv 

