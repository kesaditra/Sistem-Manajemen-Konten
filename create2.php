<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi2.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $namakntnprgrs=input($_POST["namakntnprgrs"]);
        $gambarkntnprgrs=input($_POST["gambarkntnprgrs"]);
        $linkkntnprgrs=input($_POST["linkkntnprgrs"]);
        $jeniskntnprgrs=input($_POST["jeniskntnprgrs"]);
        $pembuatkntnprgrs=input($_POST["pembuatkntnprgrs"]);

        //Query input menginput data kedalam tabel anggota
        $sql="insert into pesertaprgrs (namakntnprgrs,gambarkntnprgrs,linkkntnprgrs,jeniskntnprgrs,pembuatkntnprgrs) values
		('$namakntnprgrs','$gambarkntnprgrs','$linkkntnprgrs','$jeniskntnprgrs','$pembuatkntnprgrs')";

        //Mengeksekusi/menjalankan query diatas
        $hasil2=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil2) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>
    <h2>Input Progress Konten</h2>


    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <div class="form-group">
            <label>Nama Konten:</label>
            <input type="text" name="namakntnprgrs" class="form-control" placeholder="Masukan Nama Konten" required />

        </div>
        <div class="form-group">
            <label>Gambar:</label>
            <input type="text" name="gambarkntnprgrs" class="form-control" placeholder="Masukan Gambar" required/>
        </div>
       <div class="form-group">
            <label>Link Material :</label>
            <input type="text" name="linkkntnprgrs" class="form-control" placeholder="Masukan Link Material" required/>
        </div>
                </p>
        <div class="form-group">
            <label>Jenis Konten:</label>
            <input type="text" name="jeniskntnprgrs" class="form-control" placeholder="Masukan Jenis Konten" required/>
        </div>
        <div class="form-group">
            <label>Pembuat Konten:</label>
            <textarea name="pembuatkntnprgrs" class="form-control" placeholder="Masukan Pembuat Konten" required></textarea>
        </div>       

        <button type="submit2" name="submit2" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
