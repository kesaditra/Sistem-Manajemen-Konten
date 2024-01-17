<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="styles.css">
<title>
    Sistem Manajemen Konten</title>
<body>
    <nav class="navbar navbar-dark bg-dark">
            <span class="navbar-brand mb-0 h1">Sistem Manajemen Konten</span>
        </div>
    </nav>
<div class="container">
    <br>
    <h4><center>IDE KONTEN</center></h4>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id_peserta'])) {
        $id_peserta=htmlspecialchars($_GET["id_peserta"]);

        $sql="delete from peserta where id_peserta='$id_peserta' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>No</th>
            <th>Nama Konten</th>
            <th>Gambar</th>
            <th>Link Material</th>
            <th>Jenis Konten</th>
            <th>Pembuat Konten</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from peserta order by id_peserta desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["namakntn"]; ?></td>
                <td><?php echo $data["gambarkntn"];   ?></td>
                <td><?php echo $data["linkkntn"];   ?></td>
                <td><?php echo $data["jeniskntn"];   ?></td>
                <td><?php echo $data["pembuatkntn"];   ?></td>
                <td>
                    <a href="update.php?id_peserta=<?php echo htmlspecialchars($data['id_peserta']); ?>" class="btn btn-warning" role="button">Update</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_peserta=<?php echo $data['id_peserta']; ?>" class="btn btn-danger" role="button">Delete</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah Data</a>
</div>
</body>
</html>



<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Sistem Manajemen Konten</title>
</head>
<body>
    <div class="container">
        <br>
        <h4><center>PROGRESS KONTEN</center></h4>

        <?php
        include "koneksi2.php";

        // Cek apakah ada kiriman form dari method post
        if (isset($_GET['id_pesertaprgrs'])) {
            $id_pesertaprgrs = htmlspecialchars($_GET["id_pesertaprgrs"]);

            $sql = "DELETE FROM pesertaprgrs WHERE id_pesertaprgrs='$id_pesertaprgrs'";
            $hasil2 = mysqli_query($kon, $sql);

            // Kondisi apakah berhasil atau tidak
            if ($hasil2) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <table class="my-3 table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Konten</th>
                    <th>Gambar</th>
                    <th>Link Material</th>
                    <th>Jenis Konten</th>
                    <th>Pembuat Konten</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM pesertaprgrs ORDER BY id_pesertaprgrs DESC";
            $hasil2 = mysqli_query($kon, $sql);

            if ($hasil2) {
                $no = 0;
                while ($data = mysqli_fetch_array($hasil2)) {
                    $no++;
            ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["namakntnprgrs"]; ?></td>
                        <td><?php echo $data["gambarkntnprgrs"]; ?></td>
                        <td><?php echo $data["linkkntnprgrs"]; ?></td>
                        <td><?php echo $data["jeniskntnprgrs"]; ?></td>
                        <td><?php echo $data["pembuatkntnprgrs"]; ?></td>
                        <td>
                            <a href="update.php?id_pesertaprgrs=<?php echo htmlspecialchars($data['id_pesertaprgrs']); ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_pesertaprgrs=<?php echo $data['id_pesertaprgrs']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                die('Error: ' . mysqli_error($kon));
            }
            ?>
            </tbody>
        </table>
        <a href="create2.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Sistem Manajemen Konten</title>
</head>
<body>
    <div class="container">
        <br>
        <h4><center>KONTEN TERSELESAIKAN</center></h4>

        <?php
        include "koneksi3.php";

        // Cek apakah ada kiriman form dari method post
        if (isset($_GET['id_pesertarls'])) {
            $id_pesertarls = htmlspecialchars($_GET["id_pesertarls"]);

            $sql = "DELETE FROM pesertarls WHERE id_pesertarls='$id_pesertarls'";
            $hasil3 = mysqli_query($kon, $sql);

            // Kondisi apakah berhasil atau tidak
            if ($hasil3) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
        ?>

        <table class="my-3 table table-bordered">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Nama Konten</th>
                    <th>Gambar</th>
                    <th>Link Material</th>
                    <th>Jenis Konten</th>
                    <th>Pembuat Konten</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql = "SELECT * FROM pesertarls ORDER BY id_pesertarls DESC";
            $hasil3 = mysqli_query($kon, $sql);

            if ($hasil3) {
                $no = 0;
                while ($data = mysqli_fetch_array($hasil3)) {
                    $no++;
            ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data["namakntnrls"]; ?></td>
                        <td><?php echo $data["gambarkntnrls"]; ?></td>
                        <td><?php echo $data["linkkntnrls"]; ?></td>
                        <td><?php echo $data["jeniskntnrls"]; ?></td>
                        <td><?php echo $data["pembuatkntnrls"]; ?></td>
                        <td>
                            <a href="update.php?id_pesertarls=<?php echo htmlspecialchars($data['id_pesertarls']); ?>" class="btn btn-warning" role="button">Update</a>
                            <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_pesertarls=<?php echo $data['id_pesertarls']; ?>" class="btn btn-danger" role="button">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                die('Error: ' . mysqli_error($kon));
            }
            ?>
            </tbody>
        </table>
        <a href="create3.php" class="btn btn-primary" role="button">Tambah Data</a>
    </div>
</body>
</html>

