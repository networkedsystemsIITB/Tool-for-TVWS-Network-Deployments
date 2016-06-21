set terminal pngcairo font "arial,10" size 500,500
set output 'avg_th.png'
set boxwidth 0.50
set style fill solid
set title "Average Throughput of Theory and TDMA"
set ylabel "Throughput(Mbps)"
set xrange[1:3]
set grid
set yrange[0:30]
plot 'data' using 2:xtic(1) title "Throughput" with boxes 

