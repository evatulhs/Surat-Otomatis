<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor_agenda = $_POST['nomor_agenda'];
    $nama_agenda = $_POST['nama_agenda'];
    $lokasi = $_POST['lokasi'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
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
    <p align="center">Nomor : <?= $nomor_agenda ?></p>

    <h4>dasar : <?= $nama_agenda ?><h4>
            </br>


            <h3 align="center">MENUGASKAN</h3>
            </br>

            <h4> kepada :</h2>
                <pre align="center">
1.  Nama        : SUHARSIH MULYANA

         NIP         : 19680825 199303 2 009

          Pangkat/Gol : Penata Tingkat I/III-d

              Jabatan     : Pranata Komputer Ahli Muda

        2.  NAMA        : NUR KHOLIS AUTHON, S.Kom

Jabatan     : Staf        

     3.  Nama        : CATUR WIJADMUKO,S.Kom

          Jabatan     : Staf                  


</pre>


                <h4> Untuk :</h2>
                    <pre>
        Demikian surat tugas ini dibuat untuk dilaksanakan dengan sebaik-baiknya 
dan penuh tanggung jawab.
</pre>


                    <p align="right"> Dikeluarkan : SUMENEP </b></p>
                    <p align="right">Pada Tanggal : </b></p>


                    </b></p>
                    </left>