cat csv/final_ns3_res_merge_udp_tcp.csv | cut -d ',' -f1,17 >e1
sort -rk2 e1 | awk 'NR==1 {print; exit}'
