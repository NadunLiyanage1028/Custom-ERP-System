<?php include('../config/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Customer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container mt-4">

<div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow-lg rounded-4 border-0">
        <div class="card-body">
          <h3 class="text-center mb-4 fw-bold text-primary">Add Customer</h3>

  <form action="save.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Title</label>
      <select name="title" class="form-select" required>
        <option value="">Select</option>
        <option>Mr</option>
        <option>Mrs</option>
        <option>Miss</option>
        <option>Dr</option>
      </select>
    </div>
    <div class="mb-3">
      <label class="form-label">First Name</label>
      <input type="text" name="first_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Last Name</label>
      <input type="text" name="last_name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Contact Number</label>
      <input type="text" name="contact_no" class="form-control" maxlength="10" required>
    </div>
    <div class="mb-3">
      <label class="form-label">District</label>
      <select name="district" class="form-select" required>
        <option value="">Select District</option>
        <?php
          $result = $conn->query("SELECT id, district FROM district WHERE active='yes'");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['district']}</option>";
          }
        ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Save Customer</button>
  </form>
</div>

<!--  JS for validation -->
<script>
  document.querySelector("form").addEventListener("submit", function (e) {
    const contact = document.querySelector("input[name='contact_no']").value;

    // Validation: must be exactly 10 digits
    if (!/^\d{10}$/.test(contact)) {
      alert("Contact number must be exactly 10 digits.");
      e.preventDefault(); // stop form from submitting
    }
  });
</script>

</body>

</html>
