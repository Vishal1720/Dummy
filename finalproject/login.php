<?php
$server="localhost";
$username="root";
$pass="";

$con=mysqli_connect($server,$username,$pass);

if(!$con)
{
    die("Error");
}
$name=$_POST['username'];
$pwd=$_POST['password'];

$query="SELECT * FROM `oes`.`regform` WHERE username='$name' and password='$pwd';";

$res=$con->query($query);
if($res->num_rows==1)
Header("location:homepage.html");
else
Header("location:login.html");
