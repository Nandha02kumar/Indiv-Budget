<?php
session_start();
$con=mysqli_connect("localhost","root","root","indiv");
$email=$_SESSION['user'];
if(!$con){
  echo "database error";
}
else{
  $sqli="select * from account where email='$email'";
  $result=mysqli_query($con,$sqli);
  $value=mysqli_fetch_All($result);
  $ass=$value[0][1]+$value[0][2]+$value[0][5]+$value[0][6];
  $lia=$value[0][3];
  if(isset($_POST['land1'])){
     $amount=$_POST['land']+$ass;
     $sqli1="Update account set fixeda='$amount' where email='$email'";
      $result1=mysqli_query($con,$sqli1); 
}
 if(isset($_POST['fix1'])){
     $amount=$_POST['fix']+$ass;
     $sqli1="Update account set fixeda='$amount' where email='$email'";
      $result1=mysqli_query($con,$sqli1); 
}
 if(isset($_POST['gold1'])){
     $amount=$_POST['gold']+$ass;
     $sqli1="Update account set fixeda='$amount' where email='$email'";
      $result1=mysqli_query($con,$sqli1); 
}
if(isset($_POST['vehicle1'])){
     $amount=$_POST['vehicle']+$ass;
     $sqli1="Update account set fixeda='$amount' where email='$email'";
      $result1=mysqli_query($con,$sqli1); 
}
 if(isset($_POST['build1'])){
     $amount=$_POST['build']+$ass;
     $sqli1="Update account set fixeda='$amount' where email='$email'";
      $result1=mysqli_query($con,$sqli1); 
}
 $sqli="select * from account where email='$email'";
  $result=mysqli_query($con,$sqli);
  $value=mysqli_fetch_All($result);
  $ass=$value[0][1]+$value[0][2]+$value[0][5]+$value[0][6];
  $lia=$value[0][3];
  
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Indiv Assets</title>
<script src="jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="shortcut icon" type="image/png" href="puzzle.png">
<link rel="stylesheet" type="text/css" href="fixeda1.css">
</head>
<body>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<div class="d-flex">
<div class="fixed d-flex justify-content-end">
<form method="POST">
<table border="1px">
<tr ><td class="padd bg bg-success">Land Value</td>
<td class="padd"><input type="text" name="land" id="land" value="" reqired><button class="bg bg-primary" id="land1" name="land1">ADD</button></td>
</tr>
<tr ><td class="padd bg bg-success">Fixed Deposit</td>
<td class="padd"><input type="text" name="fix" id="fix" value="" reqired><button class="bg bg-primary" name="fix1">ADD</button></td>
</tr>
<tr >
<td class="padd bg bg-success">Building Value</td>
<td class="padd"><input type="text" name="build" id="build" value="" reqired><button class="bg bg-primary" name="build1">ADD</button></td>
</tr>
<tr >
<td class="padd bg bg-success">Vehicle</td>
<td class="padd"><input type="text" name="vehicle" id="vehicle" value="" reqired><button class="bg bg-primary" name="vehicle1">ADD</button></td>
</tr>
<tr>
<td class="padd bg bg-success">Gold</td>
<td class="padd"><input type="text" name="gold" id="gold" value="" reqired><button class="bg bg-primary" name="gold1">ADD</button></td>
</tr>
</table>
</div>
</form>
<div class="fixed1 d-flex justify-content-end">
<div>
<p>Total opening Balance</p>
<p class="ml-5"><b><?php echo $ass ?> Dr</p>
<p class="ml-5"><?php echo $lia ?> Cr</p></b>
<p>Difference</p>
<hr></hr>
<p class="ml-5"><b>1232232390 Dr</p></b>
</div>
</div>
</div>
<br><br><br>
<div class="d-flex justify-content-center">
<a class="btn btn-primary btn-lg" href="first.php">Back</a></div>
</body>
</html>