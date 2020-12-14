<?php
 session_start();
  $con=mysqli_connect("localhost","root","root","indiv");
  $email=$_SESSION['user'];
  $sql="select name from usertable where email='$email'";
  $result=mysqli_query($con,$sql);
  $user=mysqli_fetch_ALL($result);
  $name=$user[0][0];
?>
<html>
<head><title>Indiv Home</title>
<link rel="shortcut icon" type="image/png" href="puzzle.png"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.container1{
   margin-bottom:10px;
   margin-left:10px;
   margin-right:10px;
   margin-top:-20px;
}
</style>
</head>
<body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><div class="jumbotron container-fluid">
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Indiv Budget</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto font-white">
      <li class="nav-item active">
        <a class="nav-link" href="#">
Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info
        </a>
        <div class="dropdown-menu bg-white item-hover-primary" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php"><i class="fa fa-user" aria-hidden="true"> Profile</i></a>
          <a class="dropdown-item" href="#"><i class="fa fa-cogs" aria-hidden="true"> Setting</i></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Terms and Condition</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">contact</a>
      </li>
    </ul>
 <div>
</nav>
</div>
  <h1 class="display-5">Welcome,<p><?php echo $name; ?></p></h1>
  
  <hr class="mt-5">
  <p class="lead">Simple way to Record your Financial Activity</p>
 <div class="d-flex flex-wrap">
   <div class="p-2"><a class="btn btn-primary btn-lg" href="fixeda.php" role="button" style="padding:3%;">FixedAssets</a></div>
   <div class="p-2"><a class="btn btn-primary btn-lg" href="#" role="button" style="padding:5%;">Assets</a></div>
  <div class="p-2"><a class="btn btn-danger btn-lg" href="liability.php" role="button" style="padding:5%;">Liability</a></div>
  <div class="p-2"><a class="btn btn-warning btn-lg" href="#" role="button" style="padding:5%;">purchase</a></div>
  <div class="p-2"><a class="btn btn-success btn-lg" href="#" role="button" style="padding:5%;">Earning</a></div> 
  <div class="p-2"><a class="btn btn-success btn-lg" href="#" role="button" style="padding:3%;">Investments</a></div> 
  <div class="p-2"><a class="btn btn-warning btn-lg pl-3 pr-3" href="#" role="button" style="padding:7%;">Sell</a></div> 
</div>
 <br>
  <div style="padding-left:70%;"><a class="btn btn-danger" href="game.html">Know your luck</a></div>
</div>

</body>
</html>