sed '1d' e > f
awk -F , -v OFS=, '{ sum += $2; n++ } END { if (n > 1) print sum / n; }' f