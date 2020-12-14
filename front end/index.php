<?php
  session_start();
  $error='';
  $con=mysqli_connect("localhost","root","root","indiv");
  $username=$_POST['email'];
  $password=$_POST['password'];
  $check="select * from usertable where email='$username' AND password='$password'";
  $check1=mysqli_query($con,$check);
  $count=mysqli_num_rows($check1);
  if(isset($_POST['login'])){
  if($count>0)
   {
     $_SESSION['user']=$username;
    header("refresh:0; url=first.php");
   }
  else{
     $error="invalid Email/password";
  }
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="puzzle.png">
<title>INDIV TECHNOLOGY</title>
<script src="jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
#forgot{
  display:flex;
  justify-content:flex-end;
}
</style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Indiv Budget</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto font-white">
     <li class="nav-item"><a href="htm.php"><button class="btn bg-warning" type="button" id="signup" name="signup">sign Up</button></a>
      <li class="nav-item"></li>
        <a class="nav-link disabled" href="#">
Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link disabled dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Info
        </a>
        <div class="dropdown-menu bg-white item-hover-primary" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="profile.php"><i class="fa fa-user" aria-hidden="true"> Profile</i></a>
          <a class="dropdown-item" href="#"><i class="fa fa-cogs" aria-hidden="true"> Setting</i></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Terms and Condition</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">contact</a>
      </li>
    </ul>
 <div>
</nav>
<div class="jumbotron">
<div class="container">
<div class="alert-danger"><p><?php echo $error;?></p></div>
<form id="content" method="POST">
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Email</span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="email" name="email" required>
</div><br>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Password</span>
  </div>
  <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="password" name="password" required>
</div><br>
<button type="button" id="btn" class="btn bg-primary">show password</button><br><br>
<span id="submit" style="padding-left:45%"><button class="bg-primary" type="submit" id="login" name="login" />Login</button></span><br><br><br>
 <div id="forgot">
 <a href="for.php"><span id="forgot"> forgot password</span></a></div>
</form>
</div>
</div><script>
   $(document).ready(function(){
	$("#email").var("");
        $("#password").var("");

});
    $("#btn").on ('click',function(){
        var pass1=$("#password");
	var pass=pass1.attr('type');
        if(pass =="password"){
              pass1.attr('type','text');
              $("#btn").html('Hide password');
        }
        else{
              pass1.attr('type','password');
              $(this).html('show password');
        }
   });
</script>
</body>
</html>
  
