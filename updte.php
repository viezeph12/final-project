<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update!</title>
    <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
              <link rel="icon" href="icon.png">
</head>
<body class="updte-pg">
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
    <div class="updte-box">
    <h2>DATA FASHION EVENT</h2>
    <br>
    <br>
    <h3>EDIT DATA!</h3>

    <?php
    include 'koneksi.php';
    $Nama=$_GET ['id'];
    $project= mysqli_query($koneksi, "select * from input where Nama= '$Nama'");
    while ($d= mysqli_fetch_array ($project)){
        $selectedStyles = explode(", ", $d['Style']);
        ?>
         <form method ="post" action="updte_aksi.php">
    <fieldset>

        <table>
        <tr>
            <td> Nama: </td>
            <td> 
                <input type="hidden" name="Nama_lama" value="<?php echo $d['Nama']; ?>">
                <input type="text" name= "Nama" value="<?php echo $d['Nama']?>"> 
            </td>
        </tr>

        <tr>
            <td> Email: </td>
            <td> <input type="email" name= "Email" value="<?php echo $d['Email']?>"> </td>
        </tr>

        <tr>
            <td> No.HP: </td>
            <td> <input type="tel" name= "NoHP" value="<?php echo $d['NoHP']?>"> </td>
        </tr>

        <tr>
            <td> Select Event: </td>
            <td>
                            <select class="form-select" name="Event" required>
                                <option disabled>-- Choose an event --</option>
                                <option value="runway" <?php if($d['Event']=='runway') echo 'selected'; ?>>Fashion Week Runway Show</option>
                                <option value="workshop" <?php if($d['Event']=='workshop') echo 'selected'; ?>>Styling Workshop</option>
                                <option value="talkshow" <?php if($d['Event']=='talkshow') echo 'selected'; ?>>Fashion Talkshow</option>
                            </select>
            </td>
        </tr>

        <tr>
            <td> Favourite Style? </td>
            <td>
                            <?php
                            $styles = ['Casual', 'Streetwear', 'Chic', 'Vintage', 'Minimalist', 'Formal'];
                            foreach ($styles as $style) {
                                $checked = in_array($style, $selectedStyles) ? 'checked' : '';
                                echo "<input type='checkbox' name='Style[]' value='$style' $checked> $style<br>";
                            }
                            ?>
            </td>
        </tr>

        <tr>
            <td>Favourite Brand?</td>
            <td><input type="text" name= "Brand" value="<?php echo $d['Brand']?>"></td>
        </tr>

        </table> <br><br>
                <button type= "submit"> SIMPAN </button>
                    <a href="input.php">BACK</a>
    </fieldset>
    </form>
    </div>
    <?php
    }
    
    ?>
</div>
    <footer>
  <p> 2025 FashioNé | All Rights Reserved</p>
</footer>
    
</body>
</html>