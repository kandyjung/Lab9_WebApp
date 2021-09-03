<!DOCTYPE html>
<html>
<head>
<title> View Employee </title>
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";
$dept_id = $_GET['did'];
$sql="SELECT first_name FROM employees WHERE employee_id = $dept_id";
$result = mysqli_query($conn,$sql);
?>
<h2>Employee Data</h2>
<?php
while($row = mysqli_fetch_assoc($result)) {
$dept_name = $row["first_name"];
}
?>
Department ID: <?= $dept_id ?> <br/>
Department Name: <?= $dept_name ?>
</body>
</html>