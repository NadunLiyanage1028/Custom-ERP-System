<?php
include('../config/db.php');

$item_code = $_POST['item_code'];
$item_name = $_POST['item_name'];
$item_category = $_POST['item_category'];
$item_subcategory = $_POST['item_subcategory'];
$quantity = $_POST['quantity'];
$unit_price = $_POST['unit_price'];

$sql = "INSERT INTO item (item_code, item_name, item_category, item_subcategory, quantity, unit_price)
        VALUES ('$item_code', '$item_name', '$item_category', '$item_subcategory', '$quantity', '$unit_price')";

if ($conn->query($sql)) {
  echo "Item saved successfully. <a href='list.php'>View Items</a>";
} else {
  echo "Error: " . $conn->error;
}
?>
