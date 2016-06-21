clear all

K = 1.38e-23; % Boltzmann Constant
T = 30 + 273.15; % temperature in Kelvin
Bw = 8e6; % 8 MHz

filename = fopen('/home/kanchan/Desktop/Thane_place_pop_lat_long_alt_bw.csv','r');
fileData = textscan(filename, '%s %s %s %s %s %s', 'headerlines', 1, 'Delimiter', ',');
fclose(filename);

fd_col1 = cellstr(fileData{:,1})
fd_col2 = cellstr(fileData{:,2})
fd_col3 = cellstr(fileData{:,3})
fd_col4 = cellstr(fileData{:,4})
fd_col5 = cellstr(fileData{:,5})
fd_col6 = cellstr(fileData{:,6})

tempData = cat (2, fd_col1, fd_col2, fd_col3, fd_col4, fd_col5, fd_col6);

data = cellfun(@str2num, tempData, 'UniformOutput', false);
data(:,1) = tempData(:,1);

pop_data = data(:,2);
alt_data = data(:,5);

% Get all the rows that meet the criteria of (pop > 0) and (alt >= 20 && alt
% <= 200)
%rowsToExtract = ([data{:,2}] > 0) & ([data{:,5}] >= 20) & ([data{:,5}] <= 200)

% Extract the rows we want to keep
extractedData = data(([data{:,2}] > 0) & ([data{:,5}] >= 20) & ([data{:,5}] <= 200),:);

sortedAltData = sortrows(extractedData, -5);
sorted_altitude = sortedAltData(:,5);

fc = 470; % frequency in MHz
hm_sec = 1.5; % height of the secondary mobile device in meter
tx_power = 36; % Transmitted power in dBm
rx_sens = -96; % Sensitivity of the receiver in dBm
kind = 'suburban'; %kind: the kind of environment: 'urban', 'suburban' or 'rural'

a_hm = (1.1 * log10 (fc) - 0.7) * hm_sec - (1.56 * log10 (fc) - 0.8);
C = 5.4 + 2 * (log10 (fc / 28)) ^ 2;
D = 40.94 + 4.78 * (log10 (fc)) ^ 2 - 18.33 * log10 (fc);

PL = tx_power - rx_sens; % Path loss;

N = K * T * Bw; % thermal noise - linear value
N_dBm = 10 * log10(N / 1e-3); % dBm value

alt_length = size(sorted_altitude, 1);
coverage_array = zeros(alt_length, 1);

%Capacity_Matrix_10km = zeros(alt_length, 1);
Capacity_Matrix_Range = zeros(alt_length, 1);


for i = 1 : alt_length
	hb_sec = sorted_altitude{i} + 30;
	A = 69.55 + 26.16 * log10 (fc) - 13.82 * log10 (hb_sec) - a_hm;
	B = 44.9 - 6.55 * log10 (hb_sec);

	Lp_suburban_10km = A + B * log10(10) - C; % path loss suburban scenario 10km

	S_10km_dBm = tx_power - Lp_suburban_10km; % Computation of the received power at 10 km for suburban scenario
	S_10km = 1e-3 * 10 ^ (S_10km_dBm / 10); % linear value

	%Capacity_Matrix_10km(i, 1) = Bw * log2(1 + S_10km / N); % Capacity of the channel at 10 km in bps
	
	switch(kind)
		case 'urban',
			r = 10 ^ ((PL - A) / B); % radius for urban scenario
		case 'suburban',
			r = 10 ^ ((PL - A + C) / B); % radius for suburban scenario
		case 'rural',
			r = 10 ^ ((PL - A + D) / B); % radius for rural scenario
	end

	coverage_array(i, 1) = pi * (r ^ 2); % coverage area in km^2

	Lp_suburban_range = A + B * log10(coverage_array(i,1)) - C; % path loss suburban scenario for range
	S_range_dBm = tx_power - Lp_suburban_range; % Computation of the received power at 'range' distance for suburban scenario
	S_range = 1e-3 * 10 ^ (S_range_dBm / 10); % linear value
	Capacity_Matrix_Range(i, 1) = Bw * log2(1 + S_range / N); % Capacity of the channel at 'range' distance in bps
end

coverage_array = num2cell(coverage_array);
Capacity_Matrix_Range = num2cell(Capacity_Matrix_Range);
%Capacity_Matrix_10km = num2cell(Capacity_Matrix_10km);

sorted_Range_Cap_Data(:,1) = sortedAltData(:,1);
sorted_Range_Cap_Data(:,2) = sortedAltData(:,2);
sorted_Range_Cap_Data(:,3) = sortedAltData(:,3);
sorted_Range_Cap_Data(:,4) = sortedAltData(:,4);
sorted_Range_Cap_Data(:,5) = sortedAltData(:,5);
sorted_Range_Cap_Data(:,6) = sortedAltData(:,6);
sorted_Range_Cap_Data(:,7) = coverage_array(:,1);
sorted_Range_Cap_Data(:,8) = Capacity_Matrix_Range(:,1);
%sorted_Range_Cap_Data(:,9) = {10.000000};
%sorted_Range_Cap_Data(:,10) = Capacity_Matrix_10km(:,1);

fid = fopen('/home/kanchan/Desktop/Thane_lat_long_pop_alt_bw_range_cap.csv', 'w');
fprintf(fid, 'PLACE, POPULATION, LATITUDE, LONGITUDE, ALTITUDE, BANDWIDTH_REQUIRED_PER_USER, COVERAGE_AREA, CAPACITY\n');
for i = 1 : size(sorted_Range_Cap_Data, 1)
	fprintf(fid, '%s, %d, %f, %f, %f, %d, %f, %f\n', sorted_Range_Cap_Data{i,:});
end
fclose(fid);

% Quit MATLAB
quit force

