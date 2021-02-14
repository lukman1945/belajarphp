<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>input nama</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Form Registrasi</h3>
            </div>
        </div>
        <form method="POST" action="">
        <div class="row">
            <div class="col-md-4">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control mb-2">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control mb-2">
                <label for="nomorhp">Nomor Handphone</label>
                <input type="text" name="nomorhp" class="form-control mb-2">
                <label for="gajiharian">Gaji Harian</label>
                <input type="text" name="gaji_harian" class="form-control mb-2">
                <label for="totalgaji">Total Masuk</label>
                <input type="text" name="total_masuk" class="form-control mb-2">
                <button type="submit" class="btn btn-block btn-primary">Simpan</button>
            </div>
            <div class="col-md-8">
                <?php 
                    $namaLengkap = ($_POST['nama_lengkap']);
                    $email = ($_POST['email']);
                    $nomorhp = ($_POST['nomorhp']);
                    $gajiHarian = ($_POST['gaji_harian']);
                    $totalMasuk = ($_POST['total_masuk']);

                    $gajianfull = $gajiHarian * $totalMasuk;
                    if($gajianfull <= 4000000 ){
                        $statusgaji = "Belum UMR";
                    }else if($gajianfull >= 5000000){
                        $statusgaji = "STANDART";
                    }

                    echo "<h3>Nama Lengkap = ".$namaLengkap. "</h3><br/>";
                    echo "<h3>email = " .$email. "</h3><br/>";
                    echo "<h3>nomorhp = " .$nomorhp. "</h3><br/>";
                    echo "<h3>Gaji Bulanan = " .$gajianfull. "</h3><br/>";
                    echo "<h3>Status Gaji = " .$statusgaji. "</h3><br/>";
                ?>
            </div>
        </div>
        </form>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>