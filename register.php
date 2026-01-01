<?php
include 'config.php';

if(isset($_POST['register'])){
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role  = $_POST['role'];

    // Optional: check duplicate email
    $check = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        echo "Email already registered!";
    } else {
        $query = "INSERT INTO users (name,email,phone,password,role) 
                  VALUES ('$name','$email','$phone','$pass','$role')";
        if(mysqli_query($conn,$query)){
            echo "Registration successful ✅ Redirecting...";
            header("Refresh:2; url=index.php");
            exit;
        } else {
            echo "Error: ".mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow p-4" style="width:380px;">
    <h3 class="text-center">Register</h3>
    <form method="POST">
      <input class="form-control my-2" name="name" placeholder="Name" required>
      <input class="form-control my-2" name="email" placeholder="Email" type="email" required>
      <input class="form-control my-2" name="phone" placeholder="Phone" required>
      <input class="form-control my-2" name="password" placeholder="Password" type="password" required>
      <select class="form-control my-2" name="role">
        <option>User</option>
        <option>Service Provider</option>
      </select>
      <button class="btn btn-success w-100" name="register">Register</button>
      <a href="index.php" class="btn btn-secondary w-100 mt-2">Back to Home</a>
    </form>
  </div>
</div>

</body>
</html>
