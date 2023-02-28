<?php
    //koneksi
    include 'dbconfig.php';
    session_start();
    $id_agenda = $_GET['id_agenda'];
?>


<div class="content">       
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card card-info card-outline">
<div class="card-header"><h3 class="card-title">Data Agenda</h3></div>
<!-- /.card-header -->
<div class="card-body">
 <form  class="form-horizontal" method="post" id="<?php if($id_agenda){?>form_edit_agenda<?php }else{?>form_tambah_agenda<?php } ?>">
                         <?php $tampil_id_agenda = mysqli_query($kominfo, "select * from acara where id='$id_agenda' "); //ambil data dari tabel lokasi
                         $hasil_id_agenda = mysqli_fetch_array($tampil_id_agenda) ?> 
<div class="row">
<div class="col-md-6"><!-- /.col 1 -->                           
<div class="form-group row">
<label for="no_agenda" class="col-sm-2 col-form-label">No. Agenda</label>
<div class="col-sm-8">
<input type="hidden" name="id" value="<?php echo $hasil_id_agenda['id']; ?>">
<?php if($id_agenda){ ?>
<input hidden name="jabatan" value="<?php echo $hasil_id_agenda['jabatan']; ?>">
<?php }else{ ?>
<input hidden name="jabatan" value="(Kepala Dinas)"> 
<?php } ?>         
<input  name="no_agenda" class="form-control " value="<?php echo $hasil_id_agenda['no_agenda']; ?>" required/> 	
</div>
</div>

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Acara</label>
<div class="col-sm-8">
<input type="hidden" name="id" value="<?php echo $hasil_id_agenda['id']; ?>">       
<textarea  rows="8" cols="30" name="nama_acara" class="form-control " required/><?php echo $hasil_id_agenda['nama_acara']; ?></textarea> 
</div>
</div>

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Pimpinan Acara</label>
<div class="col-sm-8">
<input   type="text" name="pa"  class="form-control" value="<?php echo $hasil_id_agenda['pa']; ?>">  
</div>
</div>

</div><!-- /.end-col 1 --> 
<div class="col-md-6"><!-- /.col 2 --> 

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Lokasi</label>
<div class="col-sm-8">
<input   type="text" name="lokasi"  class="form-control" value="<?php echo $hasil_id_agenda['lokasi']; ?>">  
</div>
</div>

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Pakaian</label>
<div class="col-sm-8">
<input   type="text" name="pakaian"  class="form-control" value="<?php echo $hasil_id_agenda['pakaian']; ?>">  
</div>
</div>


<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Hari</label>
<div class="col-sm-8">
<input   type="text" name="hari"  class="form-control" value="<?php echo $hasil_id_agenda['hari']; ?>">  
</div>
</div>


<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Tanggal</label>
<div class="col-sm-8">
 <input type="text" name="tanggal" id="tanggal_acara" class="form-control" value="<?php echo $hasil_id_agenda['tanggal']; ?>" required/>   
</div>
</div>

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Jam</label>
<div class="col-sm-8">
<input type="text" name="jam" id="jam" class="form-control" value="<?php echo $hasil_id_agenda['jam']; ?>" required/>  
</div>
</div>

</div><!-- /.end-col 2 --> 
<div class="col-md-6"><!-- /.col 3 --> 	
<?php if ($_SESSION['akses']=='admin'){?> 

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Disposisi</label>
<div class="col-sm-8">
<input   type="text" name="jabatan"  class="form-control" value="<?php echo $hasil_id_agenda['jabatan']; ?>">  
</div>
</div>

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Disposisi Kadis</label>
<div class="col-sm-8">
<textarea rows="3" cols="20" type="text" name="dis1"  class="form-control" ><?php echo $hasil_id_agenda['dis1']; ?></textarea>   

</div>
</div>


<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Disposisi Sekdis</label>
<div class="col-sm-8">
 <textarea rows="3" cols="20" type="text" name="dis2"  class="form-control" ><?php echo $hasil_id_agenda['dis2']; ?></textarea></div>
</div>

</div><!-- /.end-col 3 --> 
<div class="col-md-6"><!-- /.col 4 -->
<div class="form-group row">

<label for="acara" class="col-sm-2 col-form-label">Disposisi Kabid</label>
<div class="col-sm-8">
 <textarea rows="3" cols="20" type="text" name="dis2"  class="form-control" ><?php echo $hasil_id_agenda['dis3']; ?></textarea></div>
</div>

<div class="form-group row">
<label for="acara" class="col-sm-2 col-form-label">Disposisi Koordinator</label>
<div class="col-sm-8">
 <textarea rows="3" cols="20" type="text" name="dis2"  class="form-control" ><?php echo $hasil_id_agenda['dis4']; ?></textarea></div>
</div>

<?php }?>

</div><!-- /.end-col 3 --> 
</div><!-- /.end-row -->
<center>
<div class="btn-group">  
                           <?php if($id_agenda){ ?>
                           <button type="submit" name="edit_agenda"  class="btn btn-info btn-sm">Edit agenda</button>
                          <a id="batal_agenda" class="btn btn-warning btn-sm">Batal</a>
                          <?php }else{ ?>
                          <button type="submit" name="simpan_agenda" class="btn btn-info btn-sm">Input agenda</button>
                        <?php } ?>

</div>
</center>
    </form>                                      
                    <hr/><br/>
<div class="table-responsive">
      <table id="data_table" class="table table-bordered table-striped" style="width:100%;">
       <thead>
        <tr>
         <th width="5%">ID</th>
         <th width="">No. Agenda</th>
         <th width="">Acara</th>
         <th width="">Pimpinan Acara</th>
         <th width="">Tempat</th>
         <th width="">Pakaian</th>
         <th width="">Hari</th>
         <th width="">Tanggal</th>
         <th width="">Jam</th>
         <th >Pejabat</th>        
         <th >Status</th>
         <th >File Surat</th>
        
         <th width="10%"></th>
         </tr>
       </thead>
       <tbody>
<?php 
$query_pag_data = "SELECT * from acara ORDER BY id DESC ";
$result_pag_data = mysqli_query($kominfo, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
 $id=$row['id'];
 $no_agenda=$row['no_agenda']; 
 $nama_acara=$row['nama_acara']; 
 $lokasi=$row['lokasi']; 
 $pakaian=$row['pakaian'];
 $jabatan=$row['jabatan'];
 $tanggal=$row['tanggal'];
 $jam=$row['jam'];
 $ket=$row['ket'];
 $pa=$row['pa'];
 $dis1=$row['dis1'];
 $dis2=$row['dis2'];
 $dis3=$row['dis3'];
 $hari=$row['hari'];
 $file=$row['file'];
 $status=$row['status'];
 $pejabat_laporan=$row['pejabat_laporan'];    
?>
                    <tr id="<?php echo $id; ?>">
                        <td><?php echo ++$no_urut;?></td>
                        <td><?php echo $no_agenda; ?></td>
                        <td><?php echo $nama_acara; ?></td>
                        <td><?php echo $pa; ?></td>
                        <td><?php echo $lokasi; ?></td>
                        <td><?php echo $pakaian; ?></td>
                        <td><?php echo $hari; ?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td><?php echo $jam; ?></td> 
                        <td><?php echo  $pejabat_laporan; ?></td>                        
                        <td> <?php if($status == 0): ?>
                               <button class="btn btn-danger btn-sm btn-sm">Tidak hadir</button> 
                               <?php elseif($status == 1): ?>
                               <button class="btn btn-success btn-sm hapus">Hadir</button> 
                               <?php else: ?>
                               <button class="btn btn-warning btn-sm hapus">Disposisi</button>  
                               <?php endif ?>
                        </td>
                        <td><?php if($file){echo '<a target="blank" href="file/'.$file.'" class="btn btn-default" aria-label="pdf"><i class="far fa-file-pdf" style="color:red;"></i></a>';}else{echo "Tidak Ada File";} ?>
                        </td>
                        <td>
                          <div class="btn-group">
                            <a id="edit_agenda" class="btn btn-info btn-sm btn-sm" value="<?php echo $id; ?>">Edit</a>
                            <a id="hapus_agenda" value="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
                          </div>
                        </td>
                  
                    </tr> 

<?php } ?>     
                </tbody>
      </table>
     </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
    $('#data_table').DataTable();
} );
</script>
<script>
flatpickr("#tanggal_acara", {
    enableTime: false,
    dateFormat: "d F Y",
    "locale": "id"
   });
</script>
<script>
flatpickr("#jam", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
   });
</script>

