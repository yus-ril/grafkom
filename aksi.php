<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>aksi</title>
  </head>
  <body>
    <div class="container mt-5">

      <div class="row justify-content-center">
        <div class="col-md-8">

        <div class="card">

          <div class="card-header text-center" >
            <h5 class="text-center">Silahkan Tambahkan Data</h5>
          </div>

          

          <form action="" method="post">

            <div class="card-body">

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="goldar" class="col-sm-2 col-form-label">Golongan Darah</label>
                <div class="col-sm-10">
                  <select name="goldar" id="goldar">
                    <option value="A">Golongan Darah A</option>
                    <option value="B">Golongan Darah B</option>
                    <option value="O">Golongan Darah O</option>
                    <option value="AB">Golongan Darah AB</option>
                  </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="umur" name="umur">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="penyakit" class="col-sm-2 col-form-label">penyakit</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="penyakit" name="penyakit">
                </div>
            </div>
              
              <div class="row mb-3">
                <?php
                if (isset($_GET['edit'])) {
                  echo "<button type='submit' name='btnedit' class='btn btn-primary' >
                  Simpan Perubahan
                </button>";
                  
                }else {
                  echo "<button type='submit' name='btn' class='btn btn-primary' >
                  Simpan
                </button>";
                }
                
                ?>

              </div>
              
              <div class="text-center">
                <a href="donor.php">Kembali</a>
              </div>
              
            </div>

            <?php 

            include 'koneksi.php';
            error_reporting(0);

            $nama=$_POST['nama'];
            $goldar=$_POST['goldar'];
            $umur=$_POST['umur'];
            $penyakit=$_POST['penyakit'];


            if (isset($_POST['btn'])) {
              $query = "INSERT INTO darah VALUES (NULL,'$nama','$goldar','$umur','$penyakit')";
              $sql = mysqli_query($konek,$query);

              header('location:donor.php');
            }else{
              $query = "UPDATE `darah` SET ,`nama`='[$nama]',`goldar`='[$goldar]',`umur`='[$umur]',`penyakit`='[$penyakit]'";
              $sql = mysqli_query($konek,$query);
            }
            


            ?>


          </form>
            
          </div>


        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>