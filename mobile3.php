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

      <table class="table table-bordered " style="width:100%;">
       <thead>
        <tr>
         <th width="5%">No</th>
         <th width="">Agenda</th>         
         <th width="50%">Hadir/Disposisi</th>
        
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
$query_pag_data = "SELECT * from acara where  jabatan='$jabatan' ORDER BY id DESC ";
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
                    <tr >
                        <td><?php echo ++$no_urut;?></td>
                        <td>
                        <table>
                          <tbody>
                            <tr >
                              <td style="border-style: none;">
                                 <b>No. Agenda</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $no_agenda; ?>
                              </td>
                            </tr>
                            <tr >
                              <td style="border-style: none;">
                                 <b>Acara</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $nama_acara; ?>
                              </td>
                            </tr>
                            <tr>
                              <td style="border-style: none;">
                                 <b>Tempat</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $lokasi; ?>
                              </td>
                            </tr>
                             <tr>
                              <td style="border-style: none;">
                                 <b>Pakaian</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $pakaian; ?>
                              </td>
                            </tr>  
                            <tr>
                              <td style="border-style: none;">
                                <b>Tanggal</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $tanggal; ?>
                              </td>
                            </tr> 
                            <tr>
                              <td style="border-style: none;">
                               <b> Pukul</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $jam; ?>
                              </td>
                            </tr>
                            <tr>
                              <td style="border-style: none;">
                                <b>Pimpinan Acara </b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $pa; ?>
                              </td>
                            </tr> 
                                                    
                          </tbody>
                        </table>
                        </td>
                        <td>   
                               
                               <?php if($jabatan=='Kepala Dinas' OR $jabatan==$sekdis OR $jabatan==$jabatan OR $pejabat_laporan==$jabatan){?>
                               <?php if($pejabat_laporan){}else{?> 
                               <div class="input-group input-group-sm">                                                           
                               <?php if($status == 0): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="0" class="btn btn-danger btn-sm btn-sm">Tidak hadir</button> 
                               <?php elseif($status == 1): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="1" class="btn btn-success btn-sm hapus">Hadir</button> 
                               <?php endif ?>
                               </div>
                               <hr/>
                               <?php } ?>
                               <?php if($pejabat_laporan){?>
                               <span class="btn btn-success btn-sm"><b> Hadir : <?php echo $pejabat_laporan; ?></b></span>
                               <?php }else{}?>                                                                 
                               <form id="edit_disposisi"  method="post">
                               <?php if($jabatan=='Kepala Dinas' OR $dis1){ ?>   
                               <span class="input-group-append"><b>Disposisi</b>&nbsp;:&nbsp;</span>                       
                               <input hidden name="id" value="<?php echo $id; ?>">                              
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Sekretaris Dinas)" <?php if(preg_match("(Sekretaris Dinas)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Sekretaris Dinas</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas' OR $jabatan=='Sekretaris Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Kepala Bidang TI)" <?php if(preg_match("(Kepala Bidang TI)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Kepala Bidang Teknologi Informatika</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas' OR $jabatan=='Sekretaris Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Kepala Bidang IKP)" <?php if(preg_match("(Kepala Bidang IKP)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Kabid Informasi & Komunikasi Publik</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas' OR $jabatan=='Sekretaris Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Kepala Bidang SP)" <?php if(preg_match("(Kepala Bidang SP)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Kepala Bidang Statistik & Persandian</label>
                               </div>
                               
                               <?php }else{ }?> 
                               <br/>
                               <?php if(preg_match("(Sekretaris Dinas)",$jabatan1)){$sekdis = "Sekretaris Dinas";}
                                     if(preg_match("(Kepala Bidang TI)",$jabatan1)){$kabid_ti = "Kepala Bidang TI";}
                                     if(preg_match("(Kepala Bidang IKP)",$jabatan1)){$kabid_ikp = "Kepala Bidang IKP";}
                                     if(preg_match("(Kepala Bidang SP)",$jabatan1)){$kabid_sp = "Kepala Bidang SP";}
                               
                               ?>
                                                           
                               <?php if($jabatan=='Kepala Dinas'){ ?> 
                               <hr/>    
                               <center><b>Kepala Dinas</b>&nbsp;:&nbsp;</center>    
                               <textarea  class="form-control"  name="dis1" cols="30" rows="5"><?php if($dis1){echo $dis1;}else{} ?></textarea>
                               <center><b>Sekretaris Dinas</b>&nbsp;:&nbsp;</center>
                               <textarea readonly class="form-control" name="dis2" cols="30" rows="5"><?php echo $dis2; ?></textarea> 
                               <?php }else{?> 
                               <?php if($jabatan==$sekdis){ ?>
                               <center><b>Kepala Dinas</b>&nbsp;:&nbsp;</center>  
                               <textarea readonly class="form-control" name="dis1"cols="30" rows="5"><?php echo $dis1; ?></textarea>
                               <center><b>Sekretaris Dinas</b>&nbsp;:&nbsp;</center>
                               <textarea  class="form-control"  name="dis2" cols="30" rows="5"><?php if($dis2){echo $dis2;}else{} ?></textarea>
                               <?php }else{}?>
                               <?php if($jabatan==$kabid_ti OR $jabatan==$kabid_ikp OR $jabatan==$kabid_sp){ ?>
                               <center><b>Kepala Dinas</b>&nbsp;:&nbsp;</center>  
                               <textarea readonly class="form-control" name="dis1"cols="30" rows="5"><?php echo $dis1; ?></textarea>
                               <center><b>Sekretaris Dinas</b>&nbsp;:&nbsp;</center>
                               <textarea disabled class="form-control" cols="30" rows="5"><?php echo $dis2; ?></textarea>                                
                               <?php } ?>                              
                               <?php } ?>
                                <br/>                             
                               <?php if($jabatan=='Kepala Dinas' OR $jabatan==$sekdis){ ?>    
                               <span class="input-group-append">
                               <button type="submit" name="kirim_disposisi" class="btn btn-info btn-sm">Simpan Disposisi</button>                               
                               </span>
                               <?php }else{ }?>
                               <?php }else{}?> 
                               </form>
                               <?php if($status == 1): ?>                                                              
                                <?php if($jabatan=='Kepala Dinas' OR $pejabat_laporan==$jabatan OR $pejabat_laporan==""){ ?> 
                                <hr/>    
                                <form id="edit_laporan"  method="post">
                                   <input hidden name="id" value="<?php echo $id; ?>">
                                   <input hidden name="pejabat_laporan" value="<?php echo $jabatan; ?>">
                                   <input hidden name="nama" value="<?php echo $nama_acara; ?>">
                                    <center><b>Isi Laporan</b>&nbsp;:&nbsp;</center> 
                                   <br/> 
                                   <div class="custom-file">
                                      <input type="file" name="foto" class="custom-file-input" id="customFile">
                                      <label class="custom-file-label" for="customFile">Pilih foto</label>
                                   </div>
                                   <div class="my-3">                              
                                   <?php if($foto){?><img class="img-thumbnail" src="images/<?php echo $foto;?>"><?php }else{}?>
                                   </div>   
                                   <div class="form-group">                                                               
                                   <textarea class="form-control " name="laporan" id="<?php echo $id; ?>"><?php echo $laporan; ?></textarea>
                                  </div>                                     
                                  <button type="submit" name="kirim_laporan" class="btn btn-info btn-sm">Simpan Laporan</button>
                                </form>
                                <br/>
                                <form id="form_reset_laporan"  method="post">
                                  <input hidden name="id" value="<?php echo $id; ?>">
                                  <button type="submit" name="reset_laporan" class="btn btn-warning btn-sm">Reset Laporan</button>

                                </form>
                                <?php }else{} ?>  
                               <?php endif ?>                 
                        </td>
                                          
                    </tr>        
<script>
       $('#<?php echo $id; ?>').summernote({
        placeholder: 'Tulis laporan disini...',
        tabsize: 2,
        height: 200
      });
</script>      
<?php } ?> 
<?php }else{ }?>     
                </tbody>
      </table>
 </div>
      <hr/>
              <div class="text-center text-muted mb-4">
                <h4>Agenda <b><?php echo  $jabatan; ?></b><div><?php echo besok(); ?>, <?php echo $besok; ?> </div></h4>
              </div>
              <hr/>
<div class="table-responsive">          
      <table class="table table-bordered " style="width:100%;">
       <thead>
        <tr>
         <th width="5%">No</th>
         <th width="">Agenda</th>         
         <th width="50%">Hadir/Disposisi</th>
        
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

                    <tr >
                        <td><?php echo ++$no_urut1;?></td>
                        <td>
                        <table>
                          <tbody>
                            <tr >
                              <td style="border-style: none;">
                                 <b>No. Agenda</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $no_agenda; ?>
                              </td>
                            </tr>
                            <tr >
                              <td style="border-style: none;">
                                 <b>Acara</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $nama_acara; ?>
                              </td>
                            </tr>
                            <tr>
                              <td style="border-style: none;">
                                 <b>Tempat</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $lokasi; ?>
                              </td>
                            </tr>
                             <tr>
                              <td style="border-style: none;">
                                 <b>Pakaian</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $pakaian; ?>
                              </td>
                            </tr>  
                            <tr>
                              <td style="border-style: none;">
                                <b>Tanggal</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $tanggal; ?>
                              </td>
                            </tr> 
                            <tr>
                              <td style="border-style: none;">
                               <b> Pukul</b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $jam; ?>
                              </td>
                            </tr>
                            <tr>
                              <td style="border-style: none;">
                                <b>Pimpinan Acara </b>
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $pa; ?>
                              </td>
                            </tr> 
                                                    
                          </tbody>
                        </table>
                        </td>
                        <td>
                               <?php if($jabatan=='Kepala Dinas' OR $jabatan==$sekdis OR $jabatan==$jabatan OR $pejabat_laporan==$jabatan){?>
                               <?php if($pejabat_laporan=='Kepala Dinas' OR $pejabat_laporan=='Sekretaris Dinas'){}else{?>  
                               <div class="input-group input-group-sm">                                                           
                               <?php if($status == 0): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="0" class="btn btn-danger btn-sm btn-sm">Tidak hadir</button> 
                               <?php elseif($status == 1): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="1" class="btn btn-success btn-sm">Hadir</button> 
                               <?php endif ?>
                               </div>
                               <hr/>
                               <?php } ?>
                               <?php if($pejabat_laporan){?>
                               <span class="btn btn-success btn-sm"><b> Hadir : <?php echo $pejabat_laporan; ?></b></span>
                               <?php }else{}?>                                                              
                               <form id="edit_disposisi"  method="post">
                               <?php if($jabatan=='Kepala Dinas' OR $dis1){ ?>   
                               <span class="input-group-append"><b>Disposisi</b>&nbsp;:&nbsp;</span>                       
                               <input hidden name="id" value="<?php echo $id; ?>">                              
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Sekretaris Dinas)" <?php if(preg_match("(Sekretaris Dinas)",$jabatan1)){echo "checked";}else{} ?>/>

                               <label class="form-check-label" for="flexCheckDefault">Sekretaris Dinas</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas' OR $jabatan=='Sekretaris Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Kepala Bidang TI)" <?php if(preg_match("(Kepala Bidang TI)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Kepala Bidang Teknologi Informatika</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas' OR $jabatan=='Sekretaris Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Kepala Bidang IKP)" <?php if(preg_match("(Kepala Bidang IKP)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Kabid Informasi & Komunikasi Publik</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" <?php if($jabatan=='Kepala Dinas' OR $jabatan=='Sekretaris Dinas'){}else{ ?>onclick="return false;" <?php } ?> name="jabatan[]" value="(Kepala Bidang SP)" <?php if(preg_match("(Kepala Bidang SP)",$jabatan1)){echo "checked";}else{} ?>/>
                               <label class="form-check-label" for="flexCheckDefault">Kepala Bidang Statistik & Persandian</label>
                               </div>
                               
                               <?php }else{ }?> 
                               <br/>
                               <?php if(preg_match("(Sekretaris Dinas)",$jabatan1)){$sekdis = "Sekretaris Dinas";}
                                     if(preg_match("(Kepala Bidang TI)",$jabatan1)){$kabid_ti = "Kepala Bidang TI";}
                                     if(preg_match("(Kepala Bidang IKP)",$jabatan1)){$kabid_ikp = "Kepala Bidang IKP";}
                                     if(preg_match("(Kepala Bidang SP)",$jabatan1)){$kabid_sp = "Kepala Bidang SP";}
                               
                               ?>

                                                            
                               <?php if($jabatan=='Kepala Dinas'){ ?>
                               <hr/>    
                               <center><b>Kepala Dinas</b>&nbsp;:&nbsp;</center>    
                               <textarea  class="form-control"  name="dis1" cols="30" rows="5"><?php if($dis1){echo $dis1;}else{} ?></textarea>
                               <center><b>Sekretaris Dinas</b>&nbsp;:&nbsp;</center>
                               <textarea readonly class="form-control" name="dis2" cols="30" rows="5"><?php echo $dis2; ?></textarea> 
                               <?php }else{?> 
                               <?php if($jabatan==$sekdis){ ?>
                               <center><b>Kepala Dinas</b>&nbsp;:&nbsp;</center>  
                               <textarea readonly class="form-control" name="dis1"cols="30" rows="5"><?php echo $dis1; ?></textarea>
                               <center><b>Sekretaris Dinas</b>&nbsp;:&nbsp;</center>
                               <textarea  class="form-control"  name="dis2" cols="30" rows="5"><?php if($dis2){echo $dis2;}else{} ?></textarea>
                               <?php }else{}?>
                               <?php if($jabatan==$kabid_ti OR $jabatan==$kabid_ikp OR $jabatan==$kabid_sp){ ?>
                               <center><b>Kepala Dinas</b>&nbsp;:&nbsp;</center>  
                               <textarea readonly class="form-control" name="dis1"cols="30" rows="5"><?php echo $dis1; ?></textarea>
                               <center><b>Sekretaris Dinas</b>&nbsp;:&nbsp;</center>
                               <textarea disabled class="form-control" cols="30" rows="5"><?php echo $dis2; ?></textarea>                                
                               <?php } ?>                              
                               <?php } ?>
                                <br/>                             
                               <?php if($jabatan=='Kepala Dinas' OR $jabatan==$sekdis){ ?>    
                               <span class="input-group-append">
                               <button type="submit" name="kirim_disposisi" class="btn btn-info btn-sm">Simpan Disposisi</button>                               
                               </span>
                               <?php }else{ }?>
                               <?php }else{}?> 
                               </form>                               
                               <?php if($status == 1): ?>                              
                                                             
                                <?php if($jabatan=='Kepala Dinas' OR $pejabat_laporan==$jabatan OR $pejabat_laporan==""){ ?> 
                                <hr/>    
                                <form id="edit_laporan"  method="post">
                                   <input hidden name="id" value="<?php echo $id; ?>">
                                   <input hidden name="pejabat_laporan" value="<?php echo $jabatan; ?>">
                                   <input hidden name="nama" value="<?php echo $nama_acara; ?>">
                                    <center><b>Isi Laporan</b>&nbsp;:&nbsp;</center> 
                                   <br/> 
                                   <div class="custom-file">
                                      <input type="file" name="foto" class="custom-file-input" id="customFile">
                                      <label class="custom-file-label" for="customFile">Pilih foto</label>
                                   </div>
                                   <div class="my-3">                              
                                   <?php if($foto){?><img class="img-thumbnail" src="images/<?php echo $foto;?>"><?php }else{}?>
                                   </div>   
                                   <div class="form-group">                                                               
                                   <textarea class="form-control " name="laporan" id="<?php echo $id; ?>"><?php echo $laporan; ?></textarea>
                                  </div>                                     
                                  <button type="submit" name="kirim_laporan" class="btn btn-info btn-sm">Simpan Laporan</button>
                                </form>
                                <br/>
                                <form id="form_reset_laporan"  method="post">
                                  <input hidden name="id" value="<?php echo $id; ?>">
                                  <button type="submit" name="reset_laporan" class="btn btn-warning btn-sm">Reset Laporan</button>

                                </form>
                                <?php }else{} ?>  
                               <?php endif ?>                 
                        </td>
                                          
                    </tr>        
<script>
       $('#<?php echo $id; ?>').summernote({
        placeholder: 'Tulis laporan disini...',
        tabsize: 2,
        height: 200
      });
</script>      
<?php } ?> 
<?php }else{ }?>     
                </tbody>
      </table>
 </div>
     <hr/>
     <div class="form-group">
                        <center><a href="logout_mobile.php" class="btn btn-warning">Log Out</a></center>
     </div>
<br/>




