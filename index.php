<!doctype html>

<?php
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
    exit;
}


?>



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Donor</title>
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" >E-Bloody</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="donor.php">Donor</a>
                <a class="nav-link" href="yusman5010101@gmail.com">Kontak</a>
                <a class="nav-link" href="login.php">Log-Out</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron jumbotron-fluid mt-5">
            <div class="container">
                <img src="css/darahh.png" alt="gambar kosong">

                <h1 class="display-4" style="color: red;">E-Bloody</h1>
                
                <div class="container">
                    <figure class="text-center mt-5">
                        <blockquote class="blockquote">
                            <p class="lead" style="color: red;" >"Jangan biarkan orang bodoh atau nyamuk menghisap darahmu; manfaatkan dengan baik. Donorkan darah dan selamatkan satu nyawa."</p>
                        </blockquote>
                    <figcaption class="blockquote-footer">
                        Rumah Sakit Datang Sakit Pulang Pasti
                    </figcaption>
                    </figure>
                </div>

            </div>

        <div class="container">

        <div class="row">
            <div class="col">
            <div class="card">
                <img class="card-img-top" src="css/3776764872.jpg" alt="Card image cap" width="150px" height="250px">
                <div class="card-body">
                <h5 class="card-title" align="center">Darah A</h5>
                <p class="card-text">Silahkan klik tombol di bawah untuk melohat jumlah stok darah A yang tersedia.</p>
                <a href="daraha.php" class="btn btn-primary">Cek Stok</a>
                </div>
            </div>
            </div>
        

            <div class="col">
            <div class="card">
                <img class="card-img-top" src="css/b.jpg" alt="Card image cap" width="150px" height="250px">
                <div class="card-body">
                <h5 class="card-title" align="center">Darah B</h5>
                <p class="card-text">Silahkan klik tombol di bawah untuk melohat jumlah stok darah B yang tersedia.</p>
                <a href="darahb.php" class="btn btn-primary">Cek Stok</a>
                </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
            <div class="card">
                <img class="card-img-top" src="css/o.jpg" alt="Card image cap" width="150px" height="250px">
                <div class="card-body">
                <h5 class="card-title" align="center">Darah O</h5>
                <p class="card-text">Silahkan klik tombol di bawah untuk melohat jumlah stok darah O yang tersedia.</p>
                <a href="daraho.php" class="btn btn-primary">Cek Stok</a>
                </div>
            </div>
            </div>
        

            <div class="col">
            <div class="card">
                <img class="card-img-top" src="css/ab.jpg" alt="Card image cap" width="150px" height="250px">
                <div class="card-body">
                <h5 class="card-title" align="center">Darah AB</h5>
                <p class="card-text">SSilahkan klik tombol di bawah untuk melohat jumlah stok darah AB yang tersedia.</p>
                <a href="darahab.php" class="btn btn-primary">Cek Stok</a>
                </div>
            </div>
            </div>
        </div>

        </div>

    </div>

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>