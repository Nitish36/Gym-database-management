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
$FullName = $_POST["FullName"];
$Age = $_POST["Age"];
$DateOfJoining = $_POST["DateOfJoining"];
$Email = $_POST["Email"];
$PhoneNumber = $_POST["PhoneNumber"];
$Gender = $_POST["Gender"];

//For insertion of values into the database

$sql = "INSERT INTO register (GymId,FullName,Age,DateOfJoining,Email,PhoneNumber,Gender) VALUES ('$GymId','$FullName','$Age','$DateOfJoining','$Email','$PhoneNumber','$Gender')";

// For deletion of values from the database
//$sql = "DELETE FROM register WHERE GymId='" . $_GET["GymId"] . "'";

if(mysqli_query($conn,$sql))
{
	echo "<h2 >created successfully</h2>";
		$insert = true;
}
else
{
	echo "User name already exists in the database";
}

include 'delete.php';

/*To display the data*/
$conn->close();

?>
