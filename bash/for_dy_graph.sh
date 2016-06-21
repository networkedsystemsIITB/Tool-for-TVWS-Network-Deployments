cut -d ',' -f8,16,17 csv/final_ns3_res_merge_udp_tcp.csv | awk -F , -v OFS=, '{print $1/1000000,$2,$3}'| sed '1d' >dy.csv

bash bash/graph.sh >col.csv
echo "0,Theory,TDMA(UDP),TDMA(TCP)">header.csv

paste -d',' col.csv dy.csv >for.csv
cat header.csv for.csv >csv/dygraph.csv

