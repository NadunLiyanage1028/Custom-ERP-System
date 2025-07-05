<?php
include('../config/db.php');

$title = $_POST['title'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$contact_no = $_POST['contact_no'];
$district = $_POST['district'];

$sql = "INSERT INTO customer (title, first_name, middle_name, last_name, contact_no, district) 
        VALUES ('$title', '$first_name', '', '$last_name', '$contact_no', '$district')";

if ($conn->query($sql)) {
  echo "Customer saved successfully. <a href='list.php'>View Customers</a>";
} else {
  echo "Error: " . $conn->error;
}
?>
