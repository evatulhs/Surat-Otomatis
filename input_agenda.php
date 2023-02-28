<?php
    session_start();
    if (empty($_SESSION['agenda_username'])){header("Location:index.php");}
    //koneksi
    include 'dbconfig.php';
?>
 
    <style>
        /* ukuran peta */
        #mapid {
            height: 600px;width:100%;
        }
        .jumbotron{
            
        }
        
    </style>
<div class="card card-primary card-outline">
<div class="card-header ">
                <h5 class="card-title">Input Agenda</h5>
</div>
<div class="card-body ">
     <div class="row"> <!-- class row digunakan sebelum membuat column  -->

        <div class="col-md-3"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
                <form id="form_tambah_lokasi"  method="post">
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama Acara</label>
                        <input type="text" class="form-control" name="nama_acara" >
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal_terima" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Pejabat</label>
                        <select class="form-control" name="perusahaan" required>
                            <option disabled selected>== Pilih Pejabat ==</option>
                            <?php $tampil_jabatan = mysqli_query($kominfo, "select * from user"); //ambil data dari tabel kecamatan
                            while($hasil_jabatan = mysqli_fetch_array($tampil_jabatan)){ ?> 
                            <option value="<?php echo $hasil_jabatan['jabatan']; ?>"><?php echo $hasil_jabatan['jabatan']; ?></option>
                             <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Keterangan</label>
                        <textarea class="form-control" name="ket" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="tambah_lokasi" class="btn btn-info btn-sm">Tambah</button> <a class="btn btn-warning btn-sm" id="batal_lokasi">Batal</a>
                    </div>
                </form>
        </div>
        <br/>        
        
<script>
flatpickr("#tanggal_terima", {
    enableTime: true,
    dateFormat: "d F Y H:i",
    "locale": "id"
   });
</script>
<script>
flatpickr("#tanggal_selesai", {
    enableTime: true,
    dateFormat: "d F Y H:i",
    "locale": "id"
   });
</script>
