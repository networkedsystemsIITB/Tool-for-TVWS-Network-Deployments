cut -d ',' -f1,2,3,4,5,6,7,8,16,17 csv/final_ns3_res_merge_udp_tcp.csv | awk -F , -v OFS=, '{print $1,$2,$3,$4,$5,$6,$7,$8/1000000,$9,$10}'>do1.csv
 echo "Place,Pop,Lat,Lon,Alt,Th_Required,Coverage _Area,Theory_Th(Mbps),TDMA_UDP(Mbps),TDMA_TCP(Mbps)"> do.csv
 cat do.csv do1.csv >place_pop_lat_lon_alt_bw_coverage_throughput_tdma-UDP_tdma-TCP.csv
 