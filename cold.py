from sklearn.preprocessing import StandardScaler
from sklearn.cluster import KMeans
import pandas as pd
import numpy as np
from itertools import cycle, islice
import matplotlib.pyplot as plt
from pandas.plotting import parallel_coordinates
import matplotlib.pyplot as plt
#%matplotlib inline

data = pd.read_csv('minute_weather.csv/minute_weather.csv')

sampled_df = data[(data['rowID'] % 10) == 0]

del sampled_df['rain_accumulation']
del sampled_df['rain_duration']

rows_before = sampled_df.shape[0]
sampled_df = sampled_df.dropna()
rows_after = sampled_df.shape[0]

features = ['air_pressure', 'air_temp', 'avg_wind_direction', 'avg_wind_speed', 'max_wind_direction', 'max_wind_speed','relative_humidity']

select_df = sampled_df[features]

X = StandardScaler().fit_transform(select_df)

kmeans = KMeans(n_clusters=12)
model = kmeans.fit(X)

centers = model.cluster_centers_

def pd_centers(featuresUsed, centers):
	colNames = list(featuresUsed)
	colNames.append('prediction')

	# Zip with a column called 'prediction' (index)
	Z = [np.append(A, index) for index, A in enumerate(centers)]

	# Convert to pandas data frame for plotting
	P = pd.DataFrame(Z, columns=colNames)
	P['prediction'] = P['prediction'].astype(int)
	return P

def parallel_plot(data):
	my_colors = list(islice(cycle(['b', 'r', 'g', 'y', 'k']), None, len(data)))
	plt.figure(figsize=(15,8)).gca().axes.set_ylim([-3,+3])
	parallel_coordinates(data, 'prediction', color = my_colors, marker='o')
	plt.show()

P = pd_centers(features, centers)

parallel_plot(P[(P['relative_humidity'] > 0.5) & (P['air_temp'] < 0.5)])