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
    <title></title>
    <style type="text/css">
        body {
            font-family: arial;
            background-color: #ccc
        }

        .rangkasurat {
            width: 980px;
            margin: 0 auto;
            background-color: #fff;
            height: 500px;
            padding: 20px;
        }

        table {
            border-bottom: 5px solid #000;
            padding: 2px
        }
    </style>
</head>
</body>

<div class="rangkasurat">
    <table width="100%">
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

    <h4>dasar : <?= $nama_agenda ?><h4>
            </br>


            <h3 align="center">MENUGASKAN</h3>
            </br>

            <h4> kepada :</h2>
                <pre align="center">
1.  Nama        : <?= $nama1 ?>

         NIP         : 19680825 199303 2 009

          Pangkat/Gol : Penata Tingkat I/III-d

              Jabatan     : <?= $jabatan1 ?>

        2.  NAMA        : <?= $nama2 ?>

Jabatan     : <?= $jabatan2 ?>      

     3.  Nama        : <?= $nama3 ?>

          Jabatan     : <?= $jabatan3 ?>                 


</pre>


                <h4> Untuk : <?= $nama_acara ?></h2>
                    <pre>
        Demikian surat tugas ini dibuat untuk dilaksanakan dengan sebaik-baiknya 
dan penuh tanggung jawab.
</pre>


                    <p align="right"> Dikeluarkan : SUMENEP </b></p>
                    <p align="right">Pada Tanggal : <?= $tanggal ?></b></p>


                    </b></p>
                    </left>