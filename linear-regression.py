# import pandas as pd
# from sklearn import linear_model
# import statsmodels.api as sm
# import math
# data = pd.read_csv("climate_linear.csv", usecols= ['Mean-min', 'Mean-max'])

# X = data[['Mean-min','Mean-max']] # here we have 2 variables for multiple regression. If you just want to use one variable for simple linear regression, then use X = df['Interest_Rate']
# Y = data['Mean-rainfall']
 
# # with sklearn
# regr = linear_model.LinearRegression()
# regr.fit(X, Y)

# #print('Intercept: \n', regr.intercept_)
# #print('Coefficients: \n', regr.coef_)

# # prediction with sklearn
# #New_Interest_Rate = 2.75
# #New_Unemployment_Rate = 5.3

# x0= float(input("enter mean temp(min): "))
# y0 = float(input("enter mean temp(max): "))
# #print("No. of deaths in {} are : {}".format(x0,y0))
# print ('Predicted Mean Rainfall: \n', regr.predict([[x0 ,y0]]))


# import pandas as pd
# import numpy as np
# from sklearn import linear_model
# df = pd.read_csv('linear.csv')

# reg = linear_model.LinearRegression()
# reg.fit(df[['min', 'max']], df.rainfall)

# # x0= float(input("enter mean temp(min): "))
# # y0 = float(input("enter mean temp(max): "))

# x0= sys.argv[1];
# y0= sys.argv[2];

# print('Predicted Mean Rainfall: \n', reg.predict([[x0 ,y0]]))
import sys
import numpy as np
import matplotlib.pyplot as mpl
import locale


def calc_coef(x,y):

  n=len(x)
  meanX = np.mean(x)  # mean(x) == sum(x)/len(x)
  meanY = np.mean(y)
  SSxy = np.sum(y*x) - n*meanX*meanY
  SSxx = np.sum(x*x) - n*meanX*meanX
  m = SSxy/SSxx
  c = meanY - m*meanX
  return (m,c)
def main():
    x=np.array([1905,1910,1915,1920,1925,1930,1935,1940,1945,1950,1955,1960,1965,1970,1975,1980,1985,1990,1995,2000,2005,2010]) 
    y=np.array([5.3,16.4,573.2,7.9,55.7,243.2,320.4,13.2,17.6,9.3,6.3,11.3,55.7,203.3,243.2,129.7,24.8,4.3,126.6,13.5,6.1,1.7]) 
    coef= calc_coef(x,y) 
    #plot_line(x,y,coef) 
    m=float(coef[0])
    c=float(coef[1])
    x0= float(sys.argv[1])
    #x0 = float(input("enter year: "))
    y0 = float(m*x0 + c)
    print ("Mean Rainfall for {} is :{}".format(x0,y0));
    plot_line(x,y,coef)

def plot_line(x,y,coef):
    mpl.scatter(x,y, color="r", marker="*", s=30)
    y_cal= coef[0]*x + coef[1]
    mpl.plot(x,y_cal,color="b")
    mpl.xlabel('Year')
    mpl.ylabel('Mean Rainfall in mm')
    mpl.show()
    
main()
