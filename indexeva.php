<?php
session_start();
if (empty($_SESSION['agenda_username'])) {
    header("Location:index.php");
}
//koneksi
include 'dbconfig.php';
?>
<link rel="stylesheet" href="assets/css/MarkerCluster.css" />
<link rel="stylesheet" href="assets/css/MarkerCluster.Default.css" />
<script src="assets/js/leaflet.markercluster-src.js"></script>
<link href='css/leaflet.fullscreen.css' rel='stylesheet' />
<script src='js/Leaflet.fullscreen.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="card card-primary card-outline">
    <div class="card-header ">
        <h5 class="card-title">Data Semua Agenda</h5>
    </div>
    <div class="card-body ">

        <table id="data_table" class="table table-bordered table-striped" style="width:100%;">
            <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="">Nomor Agenda</th>
                    <th width="">Nama Agenda</th>
                    <th width="">Lokasi</th>
                    <th width="">Tanggal</th>
                    <th width="">jam</th>
                    <th width="">File Surat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $today = date('d F Y');

                $query_pag_data = "SELECT * from acara  ORDER BY id DESC ";
                $result_pag_data = mysqli_query($kominfo, $query_pag_data);
                while ($row = mysqli_fetch_assoc($result_pag_data)) {
                    $id = $row['id'];
                    $nama_acara = $row['nama_acara'];
                    $lokasi = $row['lokasi'];
                    $jabatan = $row['jabatan'];
                    $tanggal = $row['tanggal'];
                    $jam = $row['jam'];
                    $ket = $row['ket'];
                    $no_agenda = $row['no_agenda'];
                ?>
                    <tr id="<?php echo $id; ?>">
                        <td><?php echo ++$no_urut; ?></td>
                        <td><?php echo $no_agenda; ?></td>
                        <td><?php echo $nama_acara; ?></td>
                        <td><?php echo $lokasi; ?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td><?php echo $jam; ?></td>
                        <td>
                            <!-- <button class="btn btn-primary" onclick="window.location.href='buat_surat.php'">Download</button> -->
                            <button class="btn btn-primary" onclick="buatSurat(this)">Download</button>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>

    <br />
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();
        });
    </script>

    <script src="form.js"></script>