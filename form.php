


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM FAHSION EVENT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
          <link rel="icon" href="icon.png">

</head>

<body class="form-pg">
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

<div class= "form-input" >
    <h2>Join Our Fashion Event & Share Your Style!</h2>

    <form method="POST" action="aksi.php">
                    <label for="nama_lengkap">Nama:</label>
                    <input type="text" name="Nama" placeholder="Nama Lengkap" required><br><br>
    
                    <label for="Email">Email:</label>
                    <input type="email" name="Email" placeholder="xxx@gmail.com" required><br><br>
            
                    <label for="NoHP">No.HP:</label>
                    <input type="tel" name="NoHP" placeholder="081234567899" required><br><br>
    
                    <label for="Event">Select Event:</label><br>
                             <select class="form-select" name="Event" required>
                            <option selected disabled>-- Choose an event --</option>
                            <option value="runway" name="Event">Fashion Week Runway Show</option>
                            <option value="workshop" name="Event">Styling Workshop</option>
                            <option value="talkshow"name="Event">Fashion Talkshow</option>
                            </select><br><br>
    
                    <label for="Style">Favourtie Style?</label><br>
                        <input type="checkbox" name="Style[]" value="Casual"> Casual<br>
                        <input type="checkbox" name="Style[]" value="Streetwear"> Streetwear<br>
                        <input type="checkbox" name="Style[]" value="Chic"> Chic<br>
                        <input type="checkbox" name="Style[]" value="Vintage"> Vintage<br>
                        <input type="checkbox" name="Style[]" value="Minimalist"> Minimalist<br>
                        <input type="checkbox" name="Style[]" value="Formal"> Formal<br><br>


                    <label for="brand">Favourtie Brand?</label><br>
                    <input type="text" name="Brand" placeholder="misal: Zara, Uniqlo, dll" required> 
                 
<br><br>
        <button type="submit">Submit</button>
    </form>

    </div>

</div>

    <footer>
  <p> 2025 FashioNé | All Rights Reserved</p>
</footer>

</body>
</html>