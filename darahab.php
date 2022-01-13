<!doctype html>


<?php
include 'koneksi.php';

?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Donor</title>
  </head>
  <body>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Kembali</a>
            </div>
        </nav>
    </div>

    <div class="container">
        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <p>Informasi Mengenai Stok Darah Di Rumah Sakit Datang Sakit Pulang Pasti Dapat Di Lihat Di sini </p>
            </blockquote>
            <figcaption class="blockquote-footer">
            Rumah Sakit Datang Sakit Pulang Pasti
            </figcaption>
        </figure>
    </div>

    <div class="container">

        <table class="table table-striped">
            <thead>
                <tr>
                <th  scope="col">No</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Umur</th>
                <th scope="col">Penyakit</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query="SELECT * FROM darah where goldar='AB'";
                $sql=mysqli_query($konek,$query);
                $no=1;

                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['nama'];?> </td>
                    <td><?php echo $data['goldar'];?> </td>
                    <td><?php echo $data['umur'];?> </td>
                    <td><?php echo $data['penyakit'];?> </td>
                </tr>

                <?php
                    $no++;
                } ?>

                
                
            </tbody>
        </table>
        
    </div>

    


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>