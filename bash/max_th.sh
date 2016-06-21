cat csv/final_ns3_res_merge_udp_tcp.csv | cut -d ',' -f1,16 >e
sort -rk2 e | awk 'NR==1 {print; exit}'