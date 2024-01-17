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
    include "koneksi2.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_pesertaprgrs
    if (isset($_GET['id_pesertaprgrs'])) {
        $id_pesertaprgrs=input($_GET["id_pesertaprgrs"]);

        $sql="select * from pesertaprgrs where id_pesertaprgrs=$id_pesertaprgrs";
        $hasil2=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil2);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_pesertaprgrs=htmlspecialchars($_POST["id_pesertaprgrs"]);
        $namakntnprgrs=input($_POST["namakntnprgrs"]);
        $gambarkntnprgrs=input($_POST["gambarkntprgrs"]);
        $jurusan=input($_POST["linkkntnprgrs"]);
        $no_hp=input($_POST["jeniskntnprgrs"]);
        $pembuatkntnprgrs=input($_POST["pembuatkntnprgrsprgrs"]);

        //Query update data pada tabel anggota
        $sql="update pesertaprgrs set
			namakntnprgrs='$namakntnprgrs',
			gambarkntprgrs='$gambarkntprgrs',
			linkkntnprgrs='$linkkntnprgrs',
			jeniskntnprgrs='$jeniskntnprgrs',
			pembuatkntnprgrsprgrs='$pembuatkntnprgrsprgrs'
			where id_pesertaprgrs=$id_pesertaprgrs";

        //Mengeksekusi atau menjalankan query diatas
        $hasil2=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil2) {
            header("Location:index2.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama konten:</label>
            <input type="text" name="namakntnprgrs" class="form-control" placeholder="Masukan Nama Konten" required />

        </div>
        <div class="form-group">
            <label>Gambar Konten:</label>
            <input type="text" name="gambarkntprgrs" class="form-control" placeholder="Masukan Gambar" required/>
        </div>
        <div class="form-group">
            <label>Link Konten :</label>
            <input type="text" name="linkkntnprgrs" class="form-control" placeholder="Masukan Link Konten" required/>
        </div>
        <div class="form-group">
            <label>Jenis Konten:</label>
            <input type="text" name="jeniskntnprgrs" class="form-control" placeholder="Masukan Jenis Konten" required/>
        </div>
        <div class="form-group">
            <label>Pembuat Konten:</label>
            <textarea name="pembuatkntnprgr" class="form-control" placeholder="Masukan Pembuat Konten" required></textarea>
        </div>

        <input type="hidden" name="id_pesertaprgrs" value="<?php echo $data['id_pesertaprgrs']; ?>" />

        <button type="submit2" name="submit2" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
