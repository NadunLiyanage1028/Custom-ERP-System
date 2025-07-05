
<!DOCTYPE html>
<html>
<head>
  <title>ERP System - Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="d-flex flex-column min-vh-100" style="background:rgb(143, 177, 231);">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Custom ERP System</a>
  </div>
</nav>

<main class="container flex-grow-1">

<div class="container">
  <h1 class="text-center mb-5 fw-bold">System Dashboard</h1>

  <div class="row g-4">
    
    <!-- Customer Module -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0 rounded-4 h-100">
        <div class="card-body text-center">
          <i class="bi bi-person-vcard fs-1 text-primary"></i>
          <h5 class="card-title mt-3 fw-semibold">Customer Module</h5>
          <a href="customer/add.php" class="btn btn-outline-primary btn-sm mt-2">➕ Add Customer</a><br>
          <a href="customer/list.php" class="btn btn-primary btn-sm mt-2">📋 View Customers</a>
        </div>
      </div>
    </div>

    <!-- Item Module -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0 rounded-4 h-100">
        <div class="card-body text-center">
          <i class="bi bi-box-seam fs-1 text-success"></i>
          <h5 class="card-title mt-3 fw-semibold">Item Module</h5>
          <a href="item/add.php" class="btn btn-outline-success btn-sm mt-2">➕ Add Item</a><br>
          <a href="item/list.php" class="btn btn-success btn-sm mt-2">📋 View Items</a>
        </div>
      </div>
    </div>

    <!-- Reports -->
    <div class="col-md-4">
      <div class="card shadow-sm border-0 rounded-4 h-100">
        <div class="card-body text-center">
          <i class="bi bi-graph-up-arrow fs-1 text-info"></i>
          <h5 class="card-title mt-3 fw-semibold">Reports</h5>
          <a href="reports/invoice.php" class="btn btn-outline-info btn-sm mt-2">🧾 Invoice Report</a><br>
          <a href="reports/invoice_item.php" class="btn btn-info btn-sm mt-2">📦 Invoice Item Report</a><br>
          <a href="reports/item.php" class="btn btn-info btn-sm mt-2">📋 Item Report</a>
        </div>
      </div>
    </div>
  </div>
</div>

</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
  <div class="container">
    <small>&copy; <?php echo date('Y'); ?> ERP System. All rights reserved.</small>
  </div>
</footer>

</body>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</html>
