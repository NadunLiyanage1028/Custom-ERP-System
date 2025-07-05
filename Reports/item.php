<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Item Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">

  <h3 class="text-center fw-bold text-primary mb-4">Item Report</h3>

    <div class="card shadow-sm rounded-4">
    <div class="card-body table-responsive">
      <table class="table table-hover table-bordered align-middle">
        <thead class="table-light text-center">
  

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item Name</th>
        <th>Category</th>
        <th>Subcategory</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT i.item_name, c.category, s.sub_category, i.quantity
                FROM item i
                LEFT JOIN item_category c ON i.item_category = c.id
                LEFT JOIN item_subcategory s ON i.item_subcategory = s.id
                GROUP BY i.item_name";

        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['item_name']}</td>
                  <td>{$row['category']}</td>
                  <td>{$row['sub_category']}</td>
                  <td>{$row['quantity']}</td>
                </tr>";
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
