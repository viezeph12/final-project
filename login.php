<?php

session_start();
include 'koneksi.php';

if(isset($_POST['login'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];


    $query = "SELECT * FROM users WHERE Username='$Username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);


    if($user && password_verify($Password, $user['Password'])){
        $_SESSION['Username'] = $user['Username'];
        $_SESSION['Nama_lengkap'] = $user['Nama_lengkap'];
        header("Location: form.php");
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
          <link rel="icon" href="icon.png">
</head>
<body class="login-pg">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
            <a class="navbar-brand">
      <img src="icon.png" alt="Logo" width="70" height="70" style="border-radius:50%;">
    </a>
    <a class="navbar-brand" href="landing.html">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="about.html">About Us</a>
        <a class="nav-link" href="http://localhost/akhir%20project/register.php">Register</a>
        <a class="nav-link" href="http://localhost/akhir%20project/login.php">Log in</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<div class="login-box">
    <h2>Login</h2>
    <form method="POST">
        <label for="Username">Username: </label> <br>
        <input type="text" name="Username" placeholder="Username" required><br> <br>
        <label for="Password">Password: </label><br>
        <input type="password" name="Password" placeholder="Password" required><br><br>
        <button type="submit" name="login">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Daftar di sini!</a></p>
  </div>

  <footer>
  <p> 2025 FashioNé | All Rights Reserved</p>
</footer>

</body>
</html>