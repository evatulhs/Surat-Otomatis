<?php
include 'dbconfig.php';

// mengambil data id dari URL
$id = $_GET["id"];

// query data acara berdasarkan id
$getData = "SELECT * FROM acara WHERE id = $id";
// var_dump($getData['nama_acara']);
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
                    <div class="form-group mb-2">
                        <label for="">Nomor Surat</label>
                        <input value="<?= $nomor_agenda ?>/ /435.106.1/2023" type="text" name="nomorsurat" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">Tanggal</label>
                        <input value="<?= $tanggal ?>" type="date" name="tanggal" class="form-control">
                    </div>

                    <div class="form-group mb-2">
                        <label for="">Kepada</label>
                        <div class="input-group mb-1">
                            <input type="text" name="nama1" placeholder="Nama 1" class="form-control">
                            <select class="form-select">
                                <option selected>Pilih Jabatan</option>
                                <option>Kepala Dinas</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                            <input type="text" name="nama2" placeholder="Nama 2" class="form-control">
                            <select class="form-select">
                                <option selected>Pilih Jabatan</option>
                                <option>Kepala Dinas</option>
                            </select>
                        </div>
                        <div class="input-group mb-1">
                            <input type="text" name="nama3" placeholder="Nama 3" class="form-control">
                            <select class="form-select">
                                <option selected>Pilih Jabatan</option>
                                <option>Kepala Dinas</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label for="">Agenda</label><br>
                        <textarea name="untuk" rows="4" cols="83" class="form-control"></textarea>
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