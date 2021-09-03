<?php
// Include database connection file
require_once "dbconnect.php";
// Get data from input form
$deptid=$_POST['eid'];
$deptname=$_POST['ename'];
$deptlastname=$_POST['lastname'];

;
// Insert data
$sql="INSERT INTO employees(employee_id, first_name, last_name) VALUES
($deptid, '$deptname', '$deptlastname')";
$result=mysqli_query($conn, $sql);
if (!$result){
die('Error: ' . mysqli_error($conn));
}
else {
header("location: read_table.php");
}
mysqli_close($conn);
?>