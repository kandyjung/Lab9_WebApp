<?php 
// Include database connection file
require_once "dbconnect.php";

// Update data
$sql="UPDATE employees SET first_name = 'New employees' WHERE employee_id = 999";
$result=mysqli_query($conn, $sql);

if (!$result){
  die('Error: ' . mysqli_error($conn));
}
else {
  echo "1 record updated";
}

mysqli_close($conn);
?>

