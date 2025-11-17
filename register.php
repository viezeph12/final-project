<?php
include 'koneksi.php';

if(isset( $_POST['register'])){
    $Username= $_POST ['Username'];
    $Nama= $_POST['Nama'];
    $Birthdate=$_POST['Birthdate'];
    $Email=$_POST['Email'];
    $Password= password_hash($_POST['Password'], PASSWORD_DEFAULT);

    $query = "Insert into users (Nama, Birthdate, Email, Username, Password) values ('$Nama','$Birthdate','$Email', '$Username', '$Password')";
    $result= mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert ('Yey Registrasi Berhasil! Silakan login!!'); window.location='login.php';</script>";

    }else{
        echo "Waduh Gagal Mendaftar! Coba Ulang!";
    }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
          <link rel="icon" href="icon.png">
</head>
<body class="regis-pg">
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

<div class="regis-box">
    <h2> Registrasi </h2>
    <form method="POST" action="register.php">
        <table border="1">
            <tr>
                <td>
                    <label for="nama_lengkap">Nama:</label>
                </td>

                <td>
                    <input type="text" name="Nama" placeholder="Nama Lengkap" required><br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="birthdate">Birthdate:</label>
                </td>

                <td>
                    <input type="date" name="Birthdate" placeholder="Birthdate" required><br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="email">Email:</label>
                </td>

                <td>
                    <input type="email" name="Email" placeholder="Email" required><br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="username">Username:</label>
                </td>

                <td>
                    <input type="text" name="Username" placeholder="Username" required><br>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="password">Password:</label>
                </td>        
                
                <td>
                    <input type="password" name="Password" placeholder="Password" required><br>
                 </td>
             </tr>
        </table>
<br>
    <button type="submit" name="register">Submit</button>

    </form>


    <p>Create Account | <a href="login.php"> Login di sini!</a> </p>
</div>

    <footer>
  <p> 2025 FashioNé | All Rights Reserved</p>
</footer>

</body>
</html>