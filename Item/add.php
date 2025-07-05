<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Item</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">
 
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body">
          <h3 class="text-center mb-4 fw-bold text-primary">Add Item</h3>

    <form action="save.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Item Code</label>
      <input type="text" name="item_code" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Item Name</label>
      <input type="text" name="item_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Item Category</label>
      <select name="item_category" class="form-select" required>
        <option value="">Select Category</option>
        <?php
          $result = $conn->query("SELECT id, category FROM item_category");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['category']}</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Item Subcategory</label>
      <select name="item_subcategory" class="form-select" required>
        <option value="">Select Subcategory</option>
        <?php
          $result = $conn->query("SELECT id, sub_category FROM item_subcategory");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['sub_category']}</option>";
          }
        ?>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">Quantity</label>
      <input type="number" name="quantity" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Unit Price</label>
      <input type="number" step="0.01" name="unit_price" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Save Item</button>
  </form>


</div>

<script>
  document.querySelector("form").addEventListener("submit", function (e) {
    const quantity = document.querySelector("input[name='quantity']").value;
    const price = document.querySelector("input[name='unit_price']").value;

    // Validate quantity: must be a positive whole number
    if (!/^\d+$/.test(quantity) || parseInt(quantity) <= 0) {
      alert("Quantity must be a positive whole number.");
      e.preventDefault();
    }

    // Validate price: must be a positive number
    if (isNaN(price) || parseFloat(price) <= 0) {
      alert("Unit price must be a positive number.");
      e.preventDefault();
    }
  });
</script>


</body>
</html>
