<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
  $id=$_SESSION['cashier_id'];
  $fname=$_SESSION['first_name'];
  $lname=$_SESSION['last_name'];
  $sid=$_SESSION['staff_id'];
  $user=$_SESSION['username'];
}else{
  header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $user;?>IITP MSMS</title>
  <link rel="stylesheet" type="text/css" href="style/ms.css">
  <link rel="stylesheet" href="style/s.css" type="text/css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="style/ds.css"  media="screen" />
  <script src="js/function.js" type="text/javascript"></script>
  <style>
    #left_column{
      height: 470px;
    }
  </style>
</head>
<body>
  <div id="content">
    <div id="header">
      <h1>IITP MSMS</h1></div>
      <div id="left_column">
        <div id="button">
          <ul>
           <li><a href="cashier.php">Dashboard</a></li>
           <li><a href="payment.php"target="_top">Process payment</a></li>
           <li><a href="logout.php">Logout</a></li>
         </ul>	
       </div>
     </div>
     <div id="main">
      <!-- Dashboard icons -->
      <div class="grid_7">
       <a href="cashier.php" class="dashboard-module">
         <img src="images/cashier_icon.png" width="100" height="100" alt="edit" />
         <span>Dashboard</span>
       </a>
       <a href="payment.php"target="_top" class="dashboard-module">
         <img src="images/payment.png" width="100" height="100" alt="edit" />
         <span>Process Payment</span>
       </a>
     </div>
   </div>
   <div id="footer" align="Center"> </div>
 </div>
</body>
</html>
