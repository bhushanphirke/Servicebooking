<?php
include 'config.php';
if(!isset($_SESSION['user_id'])){
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <div class="card shadow p-4">
    <h3>Book Service</h3>

    <form method="POST" action="book_service.php">
      <select name="service" class="form-control my-2" required>
        <option value="">Select Service</option>
        <option>Electrician</option>
        <option>Plumber</option>
        <option>Mechanic</option>
        <option>Cleaner</option>
      </select>

      <input type="date" name="date" class="form-control my-2" required>
      <input type="time" name="time" class="form-control my-2" required>

      <textarea name="address" class="form-control my-2" placeholder="Service Address" required></textarea>

      <button name="book" class="btn btn-success">Confirm Booking</button>
      <a href="index.php" class="btn btn-secondary mt-2">Back to Home</a>
    </form>

  </div>
</div>

</body>
</html>
