<?php
include 'inc/con.php';
$name = $_POST['name'];
$phone = $_POST['phone'];
$dob = $_POST['birthday'];

// Insert the HTML form data into the MySQL database
$sql = "INSERT INTO emp (emp_name,emp_no,emp_ede      t dob) VALUES ('$name', $phone, $dob)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>