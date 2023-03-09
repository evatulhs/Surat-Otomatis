<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no_agenda  = $_POST['no_agenda'];
    $tanggal     = $_POST['tanggal'];
    $nama1       = $_POST['nama1'];
    $jabatan1    = $_POST['jabatan1'];
    $nama2       = $_POST['nama2'];
    $jabatan2    = $_POST['jabatan2'];
    $nama3      = $_POST['nama3'];
    $jabatan3    = $_POST['jabatan3'];
    $nama_acara = $_POST['nama_acara'];
}
?>

<html>

<head>
    <title>Surat Tugas</title>
    <style type="text/css">
        body {
            font-family: arial;
            background-color: #ccc
        }

        .kertas {
            width: 21cm;
            margin: 0 auto;
            background-color: #fff;
            height: 29.7cm;
            padding: 20px;
        }

        .margin {
            padding: 50px;
        }

        .kopsurat {
            border-bottom: 5px solid #000;
            padding: 2px
        }
    </style>
</head>

<body>
    <div class="kertas">
        <div class="margin">
            <table class="kopsurat" width="100%">
                <tr>
                    <td><img src="gambar.jpg" width="140px"></td>
                    <td class="tengah">
                        <h3>PEMERINTAH KABUPATEN SUMENEP</h3>
                        <h2>DINAS KOMUNIKASI DAN INFORMATIKA</h2>
                        <h3>SUMENEP</h3>
                        <b>JL. KH. Mansyur No. 71 Telp. (0328) 662635 Fax. (0328) 663984</b>
                    </td>
                </tr>
            </table>
            </br>

            <P align="center"><u>Surat Tugas</u></P>
            <p align="center">Nomor : <?= $no_agenda ?></p>


            </br>

            <div class="mb-4">
                <table>
                    <tr>
                        <th>Dasar</th>
                        <th>:</th>
                        <td colspan="3">Perintah lisan Kepala Dinas Komunikasi Informatika Kabupaten Sumenep tanggal <?= $tanggal ?>, maka dengan ini kami :</td>
                    </tr>
                    <tr>
                        <th></th>
                        <th></th>
                        <td>
                            <h3>MENUGASKAN</h3>
                        </td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Kepada</th>
                        <th>:</th>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama1 ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>NIP. </td>
                        <td>:</td>
                        <td>19680825 199303 2 009</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Pangkat / Gol</td>
                        <td>:</td>
                        <td>Penata Tingkat I / III-d</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?= $jabatan1 ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama2 ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?= $jabatan2 ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama3 ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Jabatan</td>
                        <td>:</td>
                        <td><?= $jabatan3 ?></td>
                    </tr>
                    <tr>
                        <th>Untuk</th>
                        <td>:</td>
                        <td><?= $nama_acara ?></td>
                    </tr>
                </table>
                <p>Demikian surat tugas ini dibuat untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab.</p>
            </div>


            <p align="right">Dikeluarkan : SUMENEP</b></p>
            <p align="right">Pada Tanggal : <?= $tanggal ?></b></p>
        </div>
    </div>
</body>