<!DOCTYPE html>
<html>
<head>
<title> Update Employee </title>
</head>
<body>
<?php
// Include database connection file
require_once "dbconnect.php";
$dept_id = $_GET['eid'];
$sql="SELECT first_name FROM employees WHERE employee_id = $dept_id";
$result = mysqli_query($conn,$sql);
?>
<h2>Update Employee Data</h2>
<form action="update_dept.php" method="post">
<?php
while($row = mysqli_fetch_assoc($result)) {
$dept_name = $row["first_name"];
$dept_lastname = $row["last_name"];
}
?>
Employee ID: <?= $dept_id ?>
<input type="hidden" name="eid" value="<?= $dept_id ?>"> <br/>
First Name:<input type="text" name="ename" value="<?= $dept_name ?>"><br>
Last Name:<input type="text" name="lastname" value="<?= $dept_lastname ?>"><br>
<input type="Submit" value = "Update Data">
</form>
</body>
</html>