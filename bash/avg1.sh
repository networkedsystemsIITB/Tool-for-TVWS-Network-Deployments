sed '1d' e1 > f
awk -F , -v OFS=, '{ sum += $2; n++ } END { if (n > 1) print sum / n; }' f
