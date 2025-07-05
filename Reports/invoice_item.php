<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Invoice Item Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">
  
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body">
          <h3 class="text-center mb-4 fw-bold text-primary">Invoice Item Report</h3>


  <form method="GET" class="row mb-4">
    <div class="col-md-4">
      <label>Start Date</label>
      <input type="date" name="start_date" class="form-control" required>
    </div>
    <div class="col-md-4">
      <label>End Date</label>
      <input type="date" name="end_date" class="form-control" required>
    </div>
    <div class="col-md-4 mt-4">
      <button type="submit" class="btn btn-primary mt-2">Filter</button>
    </div>
  </form>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Invoice No</th>
        <th>Invoiced Date</th>
        <th>Customer</th>
        <th>Item Name (Code)</th>
        <th>Category</th>
        <th>Unit Price</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if (isset($_GET['start_date']) && isset($_GET['end_date'])) {
        $start = $_GET['start_date'];
        $end = $_GET['end_date'];

        $sql = "SELECT i.invoice_no, i.date, c.first_name, c.last_name,
                       itm.item_name, itm.item_code, cat.category, im.unit_price
                FROM invoice i
                JOIN customer c ON i.customer = c.id
                JOIN invoice_master im ON i.invoice_no = im.invoice_no
                JOIN item itm ON im.item_id = itm.id
                JOIN item_category cat ON itm.item_category = cat.id
                WHERE i.date BETWEEN '$start' AND '$end'
                ORDER BY i.date DESC";

        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['invoice_no']}</td>
                  <td>{$row['date']}</td>
                  <td>{$row['first_name']} {$row['last_name']}</td>
                  <td>{$row['item_name']} ({$row['item_code']})</td>
                  <td>{$row['category']}</td>
                  <td>{$row['unit_price']}</td>
                </tr>";
        }
      }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
