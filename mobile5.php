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
  
    $jabatan = $_SESSION['jabatan'];



 

  function hari_ini(){
  $hari = date ("D");
 
  switch($hari){
    case 'Sun':
      $hari_ini = "Minggu";
    break;
 
    case 'Mon':     
      $hari_ini = "Senin";
    break;
 
    case 'Tue':
      $hari_ini = "Selasa";
    break;
 
    case 'Wed':
      $hari_ini = "Rabu";
    break;
 
    case 'Thu':
      $hari_ini = "Kamis";
    break;
 
    case 'Fri':
      $hari_ini = "Jumat";
    break;
 
    case 'Sat':
      $hari_ini = "Sabtu";
    break;
    
    default:
      $hari_ini = "Tidak di ketahui";   
    break;
  }

  return $hari_ini;
}

  function besok(){
  $date = strtotime("+1 day");  
  $hari = date ("D","$date");
 
  switch($hari){
    case 'Sun':
      $besok = "Minggu";
    break;
 
    case 'Mon':     
      $besok = "Senin";
    break;
 
    case 'Tue':
      $besok = "Selasa";
    break;
 
    case 'Wed':
      $besok = "Rabu";
    break;
 
    case 'Thu':
      $besok = "Kamis";
    break;
 
    case 'Fri':
      $besok = "Jumat";
    break;
 
    case 'Sat':
      $besok = "Sabtu";
    break;
    
    default:
      $besok = "Tidak di ketahui";   
    break;
  }
 
  return $besok; 

 
}

function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);
  
  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun
 
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
 
$hari_ini = tgl_indo(date('Y-m-d'));
$date = strtotime("+1 day");
$besok = tgl_indo(date('Y-m-d',$date));
?>




<div class="card-body px-lg-5 py-lg-5">
              <div class=""><center><img src="img/smp.png" width="80"></center></div>
              <hr/>
              <div class="text-center text-muted mb-4">
                <h4>Agenda <b><?php echo  $jabatan; ?></b><div><?php echo hari_ini(); ?>, <?php echo $hari_ini; ?> </div></h4>
              </div>
              <hr/>    
<div class="table-responsive">

     <table id="data_table_hari_ini" class="table table-bordered table-striped" style="width:100%;">
       <thead>
        <tr>
        <th width="5%">No.</th>
         <th width="8%">Tanggal</th>
         <th width="5%">Pukul</th>
         <th width="">Acara</th>  
         <th width="">Tempat</th>
         <th width="8%">Pakaian</th>       
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


if($jabatan=="Kepala Dinas" OR $jabatan==$sekdis OR $jabatan==$kabid_ti OR $jabatan==$kabid_ikp OR $jabatan==$kabid_sp){
$query_pag_data = "SELECT * from acara where  tanggal='$hari_ini' ORDER BY id DESC ";
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
?>
                   <tr id="<?php echo $id; ?>">
                        <td><?php echo ++$no_urut;?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td><?php echo $jam; ?></td>
                        <td><?php echo $nama_acara; ?></td>
                        <td><?php echo $lokasi; ?></td>
                        <td><?php echo $pakaian; ?></td>
                        <td><a href="data_detail.php?id_agenda=<?php echo $id; ?>" class="btn btn-info btn-sm btn-sm">Detail</a></td>  
                    </tr> 

<?php } } ?>     
                </tbody>
      </table>
 </div>
      <hr/>
              <div class="text-center text-muted mb-4">
                <h4>Agenda <b><?php echo  $jabatan; ?></b><div><?php echo besok(); ?>, <?php echo $besok; ?> </div></h4>
              </div>
              <hr/>
<div class="table-responsive">          
      <table id="data_table_1" class="table table-bordered table-striped" style="width:100%;">
       <thead>
        <tr>
         <th width="5%">No.</th>
         <th width="8%">Tanggal</th>
         <th width="5%">Pukul</th>
         <th width="">Acara</th>  
         <th width="">Tempat</th>
         <th width="8%">Pakaian</th>       
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


if($jabatan=="Kepala Dinas" OR $jabatan==$sekdis OR $jabatan==$kabid_ti OR $jabatan==$kabid_ikp OR $jabatan==$kabid_sp){
$query_pag_data = "SELECT * from acara where  tanggal='$besok' ORDER BY id DESC ";
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
?>

                   <tr id="<?php echo $id; ?>">
                        <td><?php echo ++$no_urut1;?></td>
                        <td><?php echo $tanggal; ?></td>
                        <td><?php echo $jam; ?></td>
                        <td><?php echo $nama_acara; ?></td>
                        <td><?php echo $lokasi; ?></td>
                        <td><?php echo $pakaian; ?></td>
                        <td><a href="data_detail.php?id_agenda=<?php echo $id; ?>" class="btn btn-info btn-sm btn-sm">Detail</a></td>  
                    </tr> 

<?php } } ?>     
                </tbody>
      </table>
 </div>
     <hr/>
     <div class="form-group">
                        <center><a href="logout_mobile.php" class="btn btn-warning">Log Out</a></center>
     </div>
<br/>
<script>
$(document).ready(function() {
    $('#data_table_hari_ini').DataTable();
} );
</script>
<script>
$(document).ready(function() {
    $('#data_table_1').DataTable();
} );
</script>



