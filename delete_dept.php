<?php
if(empty(trim($_GET["did"]))){
// URL doesn't contain id parameter. Redirect to error page
// header("location: error.php");
exit();
}
else{
// Include database connection file
require_once "dbconnect.php";
$dept_id = $_GET["eid"];
$sql="DELETE FROM employees WHERE employee_id = $dept_id";
$result = mysqli_query($conn,$sql);
if (!$result){
die('Error: ' . mysqli_error($conn));
}
else {
header("location: read_table.php");
}
mysqli_close($conn);
}
?>