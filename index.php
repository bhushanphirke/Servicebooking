<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>ServiceHub</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">ServiceHub</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
        <?php if(!isset($_SESSION['user_id'])): ?>
          <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="bg-primary text-white text-center p-5">
  <h1 class="fw-bold">Book Trusted Local Services</h1>
  <p>Electrician • Plumber • Mechanic • Cleaner</p>
  <a href="services.php" class="btn btn-light btn-lg">Book Now</a>
</section>

</body>
</html>
