<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM register");
?>

<!DOCTYPE html>
<html>
<head>
<title>My Record</title>
</head>
<body>
<table>
	<tr>
	<td>GymId</td>
	<td>FullName</td>
	<td>Age</td>
	<td>DateOfJoining</td>
	<td>Email</td>
	<td>PhoneNumber</td>
	<td>Gender</td>
	<td>Action</td>
	</tr>
	<p>Data Entered into Register</p>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($name)) echo $name;?>">
	<td><?php echo $row["GymId"]; ?></td>
	<td><?php echo $row["FullName"]; ?></td>
	<td><?php echo $row["Age"]; ?></td>
	<td><?php echo $row["DateOfJoining"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
	<td><?php echo $row["PhoneNumber"]; ?></td>
	<td><?php echo $row["Gender"]; ?></td>
	<td><a href="delete-process.php?GymId=<?php echo $row["GymId"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>