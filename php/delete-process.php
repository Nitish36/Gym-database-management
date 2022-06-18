<?php
include_once 'database.php';
$sql = "DELETE FROM register WHERE GymId='" . $_GET["GymId"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
echo "<h2> Final Data From Register</h2>";
$sql1 = "SELECT GymId,FullName,Age,DateOfJoining,Email,PhoneNumber,Gender FROM register";
$result = $conn->query($sql1);

if($result->num_rows>0)
{
	echo "<table><tr><th>GymId</th><th>FullName</th><th>Age</th><th>DateOfJoining</th><th>Email</th><th>PhoneNumber</th><th>Gender</th></tr>";
	while($row = $result->fetch_assoc())
	{
		echo "<tr><td>".$row["GymId"]."</td><td>".$row["FullName"]."</td><td>".$row["Age"]."</td><td>".$row["DateOfJoining"]."</td><td>".$row["Email"]."</td><td>".$row["PhoneNumber"]."</td><td>".$row["Gender"]."</td></tr>";
	}
	echo "</table>";
}
else
{
	echo "0 result";
}
mysqli_close($conn);
?>