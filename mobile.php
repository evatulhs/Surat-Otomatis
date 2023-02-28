<style type="text/css">
  .file {
  visibility: hidden;
  position: absolute;
}
</style>
<?php
    //koneksi
    include 'dbconfig.php';
    session_start();
    if (empty($_SESSION['agenda_username'])){header("Location:login_mobile.php");}
    $id_agenda = $_GET['id_agenda'];
    $jabatan = $_SESSION['jabatan'];



 

 ?>


<div class="card-body px-lg-5 py-lg-5">
              <div class=""><center><img src="img/smp.png" width="80"></center></div>
              <hr/>
              <div class="text-center text-muted mb-4">
                <h4>Agenda <b><?php echo  $jabatan; ?></b></h4>
              </div>
              <hr/>    
<div class="table-responsive">

     <table id="data_table_hari_ini" class="table table-bordered table-striped" style="width:100%;">
       <thead>
        <tr>
        <th width="5%">No.</th>
         <th width="8%">Hari</th>
         <th width="8%">Tanggal</th>
         <th width="5%">Pukul</th>
         <th width="">Acara</th>  
         <th width="">Tempat</th>
         <th width="8%">Pakaian</th> 
         <th width="8%">File Surat</th>        
         <th width="5%"></th>  
         </tr>
       </thead>
       <tbody>
<?php
$query_pag_data1 = "SELECT * from acara ";
$result_pag_data1 = mysqli_query($kominfo, $query_pag_data1);

while($row = mysqli_fetch_assoc($result_pag_data1)) {
 $jabatan2=$row['jabatan'];

 if(preg_match("(Sekretaris Dinas)",$jabatan2)){$sekdis = "Sekretaris Dinas";}
 if(preg_match("(Kepala Bidang TI)",$jabatan2)){$kabid_ti = "Kepala Bidang TI";}
 if(preg_match("(Kepala Bidang IKP)",$jabatan2)){$kabid_ikp = "Kepala Bidang IKP";}
 if(preg_match("(Kepala Bidang SP)",$jabatan2)){$kabid_sp = "Kepala Bidang SP";}

 }


if($jabatan=="Kepala Dinas"){
$query_pag_data = "SELECT * from acara ORDER BY id DESC ";}else{  
$query_pag_data = "SELECT * from acara  where  jabatan like '%$jabatan%' ORDER BY id DESC ";
}
$result_pag_data = mysqli_query($kominfo, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
 $id=$row['id'];
 $no_agenda=$row['no_agenda']; 
 $pakaian=$row['pakaian'];  
 $nama_acara=$row['nama_acara']; 
 $lokasi=$row['lokasi']; 
 $jabatan1=$row['jabatan'];
 $tanggal=$row['tanggal'];
 $jam=$row['jam']; 
 $ket=$row['ket'];
 $pa=$row['pa'];
 $dis1=$row['dis1'];
 $dis2=$row['dis2'];
 $dis3=$row['dis3'];
 $status=$row['status']; 
 $laporan=$row['laporan'];
 $pejabat_laporan=$row['pejabat_laporan']; 
 $foto=$row['foto']; 
 $hari=$row['hari']; 
 $file=$row['file'];
   
?>
                   <tr id="<?php echo $id; ?>">
                        <td><?php echo ++$no_urut;?></td>
                        <td><?php echo $hari; ?></td>
                        <td><b style="color:<?php if($pejabat_laporan){echo "green";}else{echo "red";}?>"><?php echo $tanggal; ?></b></td>
                        <td><?php echo $jam; ?></td>
                        <td><?php echo $nama_acara; ?></td>
                        <td><?php echo $lokasi; ?></td>
                        <td><?php echo $pakaian; ?></td>
                        <td><a href="indexeva.php?<?php echo $id; ?>" class="btn btn-info btn-sm btn-sm">print</a></td> ><?php echo $filesurat; ?></td>

                        </td>
                        <td><a href="data_detail.php?id_agenda=<?php echo $id; ?>" class="btn btn-info btn-sm btn-sm">Detail</a></td>  
                    </tr> 

<?php }  ?>     
                </tbody>
      </table>
 </div>
 <div>
<b>Ket. : Tanggal warna hijau telah dihadiri</b>
 </div>
      <hr/>

     <div class="form-group">
                        <center><a href="user_log.php" class="btn btn-warning">Log Out</a></center>
     </div>
<br/>
<script>
$(document).ready(function() {
    $('#data_table_hari_ini').DataTable();
} );
</script>



