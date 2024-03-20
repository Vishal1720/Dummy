<?php
$server="localhost";
$username="root";
$pass="";

$con=mysqli_connect($server,$username,$pass);

if(!$con)
{
    die("Error");
}
echo "Connection Done";
