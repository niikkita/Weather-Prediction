
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .main{
    color: white;
  }
body {
  font-family: "Lato", sans-serif;
  background: url("sky2.jpg");
  background-repeat: no-repeat;
  background-size: 1400px 650px;
  
}

.sidenav {
  height: 100%;
  width: 190px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;

}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #c2c0c0;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 40px;
}

.active{
  background-color: #CD780B;
  color: #ffffff;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<div class="sidenav">
  <a href="sidebar.php" class="active">HOME</a>
  <a href="linear.php">PREDICTION USING LINEAR REGRESSION</a>
  <a href="kmeans.php">CLASSIFIER USING KMEANS CLUSTERING</a>
</div>

<div class="main">
  <h1>WEATHER PREDICTION</h1>
  <div class="center">
  <div class="box">
  <h3>LINEAR REGRESSION</h3>
  <p><font size="4.75">
  This algo attempts to model the relationship between two variables by fitting a linear equation to the observed data. One variable is an explanatory variable (e.g. your income) and the other is a dependent variable (e.g. your expenses)</font>
  <form action="linear.php">
  <input type = "submit" class="button" name="submit" value = "GO TO LINEAR REG">
</form>
</p>
</div>
</div>

<div class="center>
  <div class="box">
  <h3>KNN CLUSTERING</h3>
  <p><font size="4.75">
  The goal of this algorithm is to find groups in the data, with the number of groups represented by the variable K.The algorithm works iteratively to assign each data point to one of K groups based on the features that are provided. Data points are clustered based on feature similarity. </font>
  <form action="kmeans.php">
  <input type = "submit" class="button" name="submit" value = "GO TO KMEANS">
</form>
</p>
</div>
</div>
</div>
</body>
</html> 

