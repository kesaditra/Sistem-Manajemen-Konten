<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi3.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan namakntnrls id_pesertarls
    if (isset($_GET['id_pesertarls'])) {
        $id_pesertarls=input($_GET["id_pesertarlsrls"]);

        $sql="select * from pesertarls where id_pesertarls=$id_pesertarls";
        $hasil3=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil3);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_pesertarls=htmlspecialchars($_POST["id_pesertarls"]);
        $namakntnrls=input($_POST["namakntnrls"]);
        $gambarkntnrls=input($_POST["gambarkntnrls"]);
        $linkkntnrls=input($_POST["linkkntnrls"]);
        $jeniskntnrls=input($_POST["jeniskntnrls"]);
        $pembuatkntnrls=input($_POST["pembuatkntnrls"]);

        //Query update data pada tabel anggota
        $sql="update pesertarls set
			namakntnrls='$namakntnrls',
			gambarkntnrls='$gambarkntnrls',
			linkkntnrls='$linkkntnrls',
			jeniskntnrls='$jeniskntnrls',
			pembuatkntnrls='$pembuatkntnrls'
			where id_pesertarls=$id_pesertarls";

        //Mengeksekusi atau menjalankan query diatas
        $hasil3=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil3) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama Konten:</label>
            <input type="text" name="namakntnrls" class="form-control" placeholder="Masukan Nama Konten" required />

        </div>
        <div class="form-group">
            <label>Gambar Konten:</label>
            <input type="text" name="gambarkntnrlsrls" class="form-control" placeholder="Masukan Gambar" required/>
        </div>
        <div class="form-group">
            <label>Link Konten :</label>
            <input type="text" name="linkkntnrls" class="form-control" placeholder="Masukan Link Konten" required/>
        </div>
        <div class="form-group">
            <label>Jenis Konten:</label>
            <input type="text" name="jeniskntnrls" class="form-control" placeholder="Masukan Jenis Konten" required/>
        </div>
        <div class="form-group">
            <label>Pembuat Konten:</label>
            <textarea name="pembuatkntnrls" class="form-control" placeholder="Masukan Pembuat Konten" required></textarea>
        </div>

        <input type="hidden" name="id_pesertarls" value="<?php echo $data['id_pesertarls']; ?>" />

        <button type="submit3" name="submit2" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
