sed -i '$ d' final_ns3_res.csv
sed -i '$ d' final_ns3_res_tcp.csv
sort -k1 -n final_ns3_res_tcp.csv >1.csv
sort -k1 -n final_ns3_res.csv>2.csv
cut -d, -f16,17 1.csv >tcp.csv
paste -d',' 2.csv tcp.csv >csv/final_ns3_res_merge_udp_tcp.csv
