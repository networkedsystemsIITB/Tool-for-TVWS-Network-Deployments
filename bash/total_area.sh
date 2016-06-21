
cat csv/final_ns3_res_merge.csv | cut -d ',' -f7 >g
awk -F , -v OFS=, '{ sum += $1; n++ } END { if (n > 1) print sum ; }' g
