# awk -F , -v OFS=, '{ sum += $1; n++ } END { if (n > 0) print (sum /n)/1000000; }' csv/temp2.csv >a
# awk -F , -v OFS=, '{ sum += $2; n++ } END { if (n > 0) print sum / n; }' csv/temp2.csv >b
# pr -mts c d >data1
# echo "0 0000" >data2
# cat data2 data1>data
# gnuplot hop_th.plt


awk -F , -v OFS=, '{ sum += $8; n++ } END { if (n > 0) print (sum /n)/1000000; }' csv/final_ns3_res_merge_udp_tcp.csv >a1
awk -F , -v OFS=, '{ sum += $16; n++ } END { if (n > 0) print (sum /n); }' csv/final_ns3_res_merge_udp_tcp.csv >a2
awk -F , -v OFS=, '{ sum += $17; n++ } END { if (n > 0) print (sum /n); }' csv/final_ns3_res_merge_udp_tcp.csv >a3

cat a1 a2 a3 > d
pr -mts c d >data1
echo "0 0000" >data2
cat data2 data1>data
gnuplot hop_th.plt

