<?php
require_once __DIR__ . '/flash.php';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Shop Demo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">Shop Demo</a>
    <div>
      <a href="products.php" class="btn btn-light btn-sm">Products</a>
      <a href="cart.php" class="btn btn-warning btn-sm">Cart</a>
    </div>
  </div>
</nav>

<div class="container mt-4">
<?php if ($msg = get_flash('success')): ?>
<div class="alert alert-success"><?= htmlspecialchars($msg) ?></div>
<?php endif; ?>

<?php if ($msg = get_flash('info')): ?>
<div class="alert alert-info"><?= htmlspecialchars($msg) ?></div>
<?php endif; ?>
