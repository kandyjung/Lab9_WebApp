<?php
// Include database connection file
require_once "dbconnect.php";

// Delete data
$sql="DELETE FROM employees WHERE employee_id = 999";
$result=mysqli_query($conn, $sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  echo "1 record deleted";
}

mysqli_close($conn);
?>
