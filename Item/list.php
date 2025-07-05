<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Item List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">

<h3 class="text-center fw-bold text-primary mb-4">Item List</h3>

    <div class="card shadow-sm rounded-4">
    <div class="card-body table-responsive">
      <table class="table table-hover table-bordered align-middle">
        <thead class="table-light text-center">
  

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item Code</th>
        <th>Item Name</th>
        <th>Category</th>
        <th>Subcategory</th>
        <th>Quantity</th>
        <th>Unit Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT i.*, c.category AS cat_name, s.sub_category AS subcat_name
                FROM item i
                LEFT JOIN item_category c ON i.item_category = c.id
                LEFT JOIN item_subcategory s ON i.item_subcategory = s.id";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['item_code']}</td>
                  <td>{$row['item_name']}</td>
                  <td>{$row['cat_name']}</td>
                  <td>{$row['subcat_name']}</td>
                  <td>{$row['quantity']}</td>
                  <td>{$row['unit_price']}</td>
                </tr>";
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
