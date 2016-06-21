#!/bin/bash
#eval "/home/kanchan/mat_lab/bin/matlab -nodesktop -nosplash -r range_tp_calculation\(\)"
channel_width=$(head -n 1 channel_width.txt)
channel_number=$(head -n 1 channel_number.txt)
central_freq=$(head -n 1 central_freq.txt)
rx_sensitivity=$(head -n 1 rx_sensitivity.txt)
transmit_power=$(head -n 1 transmit_power.txt)
cd /home/kanchan/mat_lab/bin/
bash matlab -nodisplay -nodesktop -r "range_tp_calculation_inter($central_freq,$transmit_power,$rx_sensitivity,$channel_width,$channel_number)"

