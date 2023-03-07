<?php
include 'dbconfig.php';

// mengambil data id dari URL
$id = $_GET["id"];

// query data acara berdasarkan id
$getDataAcara = "SELECT * FROM acara WHERE id = $id";
$resultAcara = mysqli_query($kominfo, $getDataAcara);

// Mengambil setiap baris hasil query
$dataAcara = mysqli_fetch_assoc($resultAcara);

// Mengambil baris dari kolom dan ditampung ke dalam variable
$no_agenda = $dataAcara["no_agenda"];
$tanggal = $dataAcara["tanggal"];
$nama_acara = $dataAcara["nama_acara"];

// query data user
$getDataUser = "SELECT * FROM user";
$resultUser = mysqli_query($kominfo, $getDataUser);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Otomatis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container col-lg-5">
        <div class="card mt-4">
            <form action="proses.php" method="post">
                <div class="card-body">
                    <div class="form-group mb-4">
                        <label class="mb-1">Nomor Surat</label>
                        <input value="<?= $no_agenda ?>/ /435.106.1/2023" type="text" name="no_agenda" class="form-control">
                    </div>

                    <div class="form-group mb-4">
                        <label class="mb-1">Tanggal</label>
                        <input value="<?= $tanggal ?>" type="text" name="tanggal" class="form-control">
                    </div>

                    <div class="mb-4">
                        <label class="mb-1">Kepada</label>
                        <div class="input-group mb-2">
                            <select name="nama1" class="form-select me-2">
                                <option>Pilih Nama</option>
                                <?php
                                while ($row = mysqli_fetch_array($resultUser)) {
                                    $nama = $row['nama'];
                                    echo "<option>$nama</option>";
                                }
                                ?>
                            </select>
                            <select name="jabatan1" class="form-select">
                                <option>Pilih Jabatan</option>
                                <?php
                                mysqli_data_seek($resultUser, 0);
                                while ($row = mysqli_fetch_array($resultUser)) {
                                    $jabatan = $row['jabatan'];
                                    echo "<option>$jabatan</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group mb-2">
                            <select name="nama2" class="form-select me-2">
                                <option>Pilih Nama</option>
                                <?php
                                mysqli_data_seek($resultUser, 0);
                                while ($row = mysqli_fetch_array($resultUser)) {
                                    $nama = $row['nama'];
                                    echo "<option>$nama</option>";
                                }
                                ?>
                            </select>
                            <select name="jabatan2" class="form-select">
                                <option>Pilih Jabatan</option>
                                <?php
                                mysqli_data_seek($resultUser, 0);
                                while ($row = mysqli_fetch_array($resultUser)) {
                                    $jabatan = $row['jabatan'];
                                    echo "<option>$jabatan</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="nama3" class="form-select me-2">
                                <option>Pilih Nama</option>
                                <?php
                                mysqli_data_seek($resultUser, 0);
                                while ($row = mysqli_fetch_array($resultUser)) {
                                    $nama = $row['nama'];
                                    echo "<option>$nama</option>";
                                }
                                ?>
                            </select>
                            <select name="jabatan3" class="form-select">
                                <option>Pilih Jabatan</option>
                                <?php
                                mysqli_data_seek($resultUser, 0);
                                while ($row = mysqli_fetch_array($resultUser)) {
                                    $jabatan = $row['jabatan'];
                                    echo "<option>$jabatan</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label class="mb-1">Agenda</label><br>
                        <textarea name="nama_acara" rows="4" cols="83" class="form-control"><?= $nama_acara ?></textarea>
                    </div>

                    <div class="form-group mb-2">
                        <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>