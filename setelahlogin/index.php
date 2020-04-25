<?php
session_start();

if(!isset($_SESSION['username'])){
    header("location : ../login.php");

}

include '../aset/datacorona.php';
?>

<!DOCTYPE html>
<html>
<head>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--  my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../style.css">

  <title>CORONA</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <a class="navbar-brand" href="#">Data Corona Indonesia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="../pasien/index.php">Data Pasien<span class="sr-only">(current)</span></a>
      <a class="nav-item btn btn-primary tombol" href="logout.php">Logout</a>
    </div>
  </div>
</div>
</nav>
<!-- Akhir navbar -->

   <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Covid-19 Indonesia 
          <br> <span id="date"></span></h1>
    </div>
  </div>
   <!-- akhir jumbotron -->

   <!-- container -->
  <div class="container">
  
    <!-- info panel -->
    <div class="row justify-content-center">
      <div class="col-lg-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <h2><center>Positif</center></h2>
            <center><h3 id="positif"></h3></center>          
          </div>
          <div class="col-lg">
            <h2><center>Sembuh</center></h2>
            <center><h3 id="sembuh"></h3></center>          
          </div>
          <div class="col-lg">
            <h2><center>Meninggal</center></h2>
            <center><h3 id="meninggal"></h3></center>          
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir panel -->



    <!-- Profile -->

    <div class="row profile">
      <div class="col-6">
        <img src="../aset/profile.jpeg" alt="Profile" class="img-fluid rounded-circle">
      </div>
      <div class="col">
        <h3><span>Profile Saya</span></h3>
        <p>Halo teman teman perkenalkan nama saya Kresna Mukti Wibowo.Saya tinggal dimalang
           dan bersekolah salah satu SMK IT terfavorit di malang yaitu SMK TELKOM MALANG</p>
      </div> 
    </div>

  
  
  
  
  
  <!-- akhir container -->
  </div>





  </body>
</html>