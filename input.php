<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA FASHION EVENTS</title>
    <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
          <link rel="icon" href="icon.png">
</head>
<body class="container-pg">
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

<div class="page-center">
    <div class= "container"><br> <br>
    <br>
    <br>

    <h2>DATA FASHION EVENTS</h2>
    <a href="form.php"> + submit another response </a><br><br>

    <table border= "2">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No.HP</th>
            <th>Event</th>
            <th>Style</th>
            <th>Brand</th>
            <th>OPSI</th>
        </tr>

<?php
include 'koneksi.php';
$no = 1;
$project= mysqli_query($koneksi, "select * from input");
while($d=mysqli_fetch_array ($project)){
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td> <?php echo $d ['Nama']?></td>
         <td> <?php echo $d ['Email']?></td>
          <td> <?php echo $d ['NoHP']?></td>
           <td> <?php echo $d ['Event']?></td>
            <td> <?php echo $d ['Style']?></td>
            <td> <?php echo $d ['Brand']?></td>

        <td>
            <a href= "updte.php?id=<?php echo $d ['Nama']; ?> ">UPDATE </a>
            <a href= "delet.php?id=<?php echo $d ['Nama']; ?> ">DELETE </a>
        </td>
    </tr>
    <?php
}
?>
    </table><br><br>

    <div class="Back">
        <a href="landing.html">Back to Home</a>
    </div>
    

    </div>
</div>

    <footer>
  <p> 2025 FashioNé | All Rights Reserved</p>
</footer>

</body>
</html>