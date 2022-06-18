<?php

$delete = False;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymdb";

$conn = new mysqli($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection to this database failed due to ".mysqli_connect_error);
}