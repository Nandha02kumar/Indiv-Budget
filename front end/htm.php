<?php
  $error='';
  $error1="";
 if(isset($_POST['btn'])){
  $con=mysqli_connect("localhost","root","root","indiv");
  $con1=mysqli_connect("localhost","root","root","indiv");
  $username=$_POST['name'];
  $password=$_POST['password'];
  $dob=$_POST['date'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $sqli="select email from usertable where email='$email'";
  $result=mysqli_query($con,$sqli);
  if(mysqli_num_rows($result)>=1){
    $error1="Email Already Exist";
}
   else{
  $profilename=time(). '_' . $_FILES['profile']['name'];
  $target='image/'.$profilename;
  //echo "<pre>",print_r($_FILES['profile']['name']),"</pre>";
  $sql1="INSERT INTO account(email,fixeda,asset,liability,purhase,earning,investment,difference,dr,cr) VALUES ('$email',0,0,0,0,0,0,0,0,0)";
  $sql="INSERT INTO usertable(name,email,phone,password,dob,profile) VALUES ('$username','$email','$phone','$password','$dob','$profilename')";
  move_uploaded_file($_FILES['profile']['tmp_name'],$target);
  $na=mysqli_query($con,$sql);
  $na1=mysqli_query($con1,$sql1);
  if(!$na1){
     echo "database error";
}
  else{
  header("refresh:2; url=index.php");
}
}
}
?>
<html>
<head>
<title>login
</title>
<link rel="shortcut icon" type="image/png" href="puzzle.png">
<script src="jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" ref="style/css" href="styleform.css">
<script src="jquery.min.js" type="text/javascript"></script>

</head>
<body>
<div id="container">
<form  method="POST" enctype="multipart/form-data">
<p><?php echo $error;?></p>
<img src="empty.png" onclick="triggerClick()" id="profilepic" width="150" height="150"/>
<label for="profile"><div id="profilei">Profile Image</div></label>
<input type="file" name="profile" onchange="display(this)" id="profile" style="display:none;">

<label class="import" for="name">Name</label><br>
<input type="text" name="name" id="name" required><br><br>
<label class="import" for="email">Email</label><br>
<p style="text-color:red;"><?php echo $error1; ?></p>
<input type="email" name="email" id="email" required><br><br>
<label class="import" for="date">Date of Birth</label><br>
<input type="date" name="date" id="date" required><br><br>
<label class="import" for="phone">Phone Number</label><br>
<input type="text" name="phone" id="phone" required><br><br>
<label class="import" for="password">password</label><br>
<input type="password" name="password" id="password" required><br><br>
<label class="import" for="confirmpassword">Confirm password</label><br>
<input type="password" name="confirmpassword" id="confirmpassword" required><br><br>
<input type="submit" name="btn" id="btn">
</form>
</div>
<script>
 function triggerClick(){
     document.querySelector('#profile').click();
 }
 function display(e){
   console.log(e.files[0]);
  if(e.files[0]){
    var reader = new FileReader();
    console.log(reader);
    reader.onload = function(e){
    console.log(e)
     document.querySelector('#profilepic').setAttribute('src',e.explicitOriginalTarget.result);
    }
    console.log(e.files[0]);
    reader.readAsDataURL(e.files[0]);
 }
}
</script>
</body>
</html>