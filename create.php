<?php

// Include database connection file
require_once "dbconnect.php";

// Insert data
$sql="INSERT INTO employees(employee_id, first_name, last_name) VALUES (999, 'New employees')";
$result=mysqli_query($conn,$sql);

if (!$result){
  die('Error: ' . mysql_error($conn));  
}
else{
  echo "1 record added";
}

mysqli_close($conn);
?>

