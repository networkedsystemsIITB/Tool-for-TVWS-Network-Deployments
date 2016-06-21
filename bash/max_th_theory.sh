cat csv/final_ns3_res_merge_udp_tcp.csv | cut -d ',' -f8 >max_the
sort -rk2 max_the | awk 'NR==1 {print $1/1000000; exit}'