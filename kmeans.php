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

.button{
  border-radius: 25px;
    width: 180px;
    height: 30px;
    color: white;
    background-color: #111;
    font-size: 15px;
}

.button:hover
{
  background-color: #CD780B;
}
</style>
</head>
<body>
  <div class="sidenav">
  <a href="sidebar.php">HOME</a>
  <a href="linear.php">PREDICTION USING LINEAR REGRESSION</a>
  <a href="kmeans.php" class="active">CLASSIFIER USING KMEANS CLUSTERING</a>
</div>

<div class="main">
  <h1>CLASSIFIER USING KMEANS CLUSTERING</h1>
  <h3>Check stats for dry days, warm days and cold days</h3>
  <form action="kmeans.php" method="POST">
  <br> <center><input type = "submit" class="button" name="submit1" value = "DRY DAYS"></center>
  <br>
  <br><center><input type = "submit" class="button" name="submit2" value = "WARM DAYS"></center>
  <br>
  <br><center><input type = "submit" class="button" name="submit3" value = "COOL DAYS"></center>
  <br>
</form>
</div>
</body>

<?php
  if(isset($_POST['submit1']))
    passthru("python dry.py");
  if(isset($_POST['submit2']))
    passthru("python warm.py");
  if(isset($_POST['submit3']))
    passthru("python cold.py");
  ?>