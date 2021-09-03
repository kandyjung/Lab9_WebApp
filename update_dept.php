<?php
if(empty(trim($_POST["did"]))){
// URL doesn't contain id parameter. Redirect to error page
// header("location: error.php");
exit();
}
else{
// Include database connection file
require_once "dbconnect.php";
$dept_id = $_POST["did"];
$dept_name = $_POST["ename"];
$sql="UPDATE employees SET first_name = '$dept_name'
WHERE employee_id = $dept_id";
$result = mysqli_query($conn,$sql);
if (!$result)
{
die('Error: ' . mysql_error($conn));
}
else {
header("location: read_table.php");
}
mysqli_close($conn);
}
?>