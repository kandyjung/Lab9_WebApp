<?php
// Include database connection file
require_once "dbconnect.php";
// Database query.
$sql = "SELECT employee_id, first_name, last_name FROM employees";
$result = mysqli_query($conn,$sql);
echo "<h2>Employee Data:</h2>";
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$dept_id = $row["employee_id"];
$dept_name = $row["first_name"];
$dept_lastname = $row["last_name"];

echo "$dept_id &nbsp &nbsp &nbsp $dept_lastname &nbsp  $dept_name<br>";
}
} else {
echo "0 results";
}
mysqli_close($conn);
?>