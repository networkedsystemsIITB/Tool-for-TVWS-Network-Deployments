cat csv/final_ns3_res_merge_udp_tcp.csv | cut -d ',' -f1,2,6,16,17 >h



sed 's/ ,*//' h >p
sed -e "s/ /,/g" p>q
sed '1d' q> r
# cat r | awk -F , -v OFS=, '{if ($4/int($2)* 1.0 <$3) print "BS:"$1,"Total Pop:"$2,"Req Th. Per User(Mbps):"$3,"Satisfying Th(Mbps):"$4/int($2)* 1.0"|"}'
cat r | awk -F , -v OFS=, '{if ($4/int($2)* 1.0 <$3) print $1,$2,$3,$4/int($2)* 1.0,$5/int($2)* 1.0}'