<?php

$insert = False;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection to this database failed due to ".mysqli_connect_error);
}

$GymId = $_POST["GymId"];
$Email = $_POST["Email"];

$s = "SELECT * FROM register where GymId=$GymId";
$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);

if($num == 1)
{
	echo "Login Successful";
}
else
{
	echo "Login Unsuccessful";
}
?>