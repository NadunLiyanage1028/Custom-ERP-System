<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">
 
  
   <h3 class="text-center fw-bold text-primary mb-4">Customer List</h3>

    <div class="card shadow-sm rounded-4">
    <div class="card-body table-responsive">
      <table class="table table-hover table-bordered align-middle">
        <thead class="table-light text-center">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>District</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $sql = "SELECT c.*, d.district AS district_name 
                FROM customer c 
                LEFT JOIN district d ON c.district = d.id";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['title']}</td>
                  <td>{$row['first_name']}</td>
                  <td>{$row['last_name']}</td>
                  <td>{$row['contact_no']}</td>
                  <td>{$row['district_name']}</td>
                </tr>";
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
