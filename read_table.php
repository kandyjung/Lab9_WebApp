<!DOCTYPE html>
<html>
<head>
	<title> Read Data from Database </title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

<?php

// Include database connection file
require_once "dbconnect.php";

// Database query.
$sql = "SELECT employee_id, first_name, last_name FROM employees ORDER BY employee_id";
$result = mysqli_query($conn,$sql);
?>
<div class="container">
<div class = "page-header">
<h2>Employee Data</h2>
</div>

<div class="float-left">
<a href="input_insert_dept.php" class="btn btn-info" role="button">
Add New Employee</a>
</div>
<br>
<table class="table ">
<tr class="table-active">
	<th>Employee ID</th>
	<th>First Name</th>
	<th>Last Name</th>
    <th>Action</th>
</tr>

<?php

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$dept_id = $row["employee_id"];
        $dept_name = $row["first_name"];
		$dept_lastname = $row["last_name"];
        
		?>
		<tr  class="bg-success">
			<td class="table-danger"><?= $dept_id ?></td>
			<td class="table-success"><?= $dept_name ?></td>
            <td class="table-warning"><?= $dept_lastname ?></td>
			

			<td class="table-primary">
			<a href="view_dept.php?did=<?= $dept_id ?>" >View</a>
			<a href="input_update_dept.php?did=<?= $dept_id ?>" >Update</a>
			<a href="delete_dept.php?did=<?= $dept_id ?>" onClick="return confirm('Delete this employee?')">Delete</a>
			</td>
		</>
	<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
