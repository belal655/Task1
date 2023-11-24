<?php
// connect to database
$db=mysqli_connect('localhost','root','','internet5');
if(isset($_POST['register'])) {
$Username=mysqli_real_escape_string($db,$_POST['UN']);
$Email=mysqli_real_escape_string($db,$_POST['em']);
$Password1=mysqli_real_escape_string($db,$_POST['pw1']);
$Password2=mysqli_real_escape_string($db,$_POST['pw2']);

//insert into database
$sql="INSERT INTO users(username,email,password) values('$Username','$Email','$Password1')";
mysqli_query($db,$sql);
}




?>