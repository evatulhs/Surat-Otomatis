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

      <table class="table table-bordered " >
       <thead>
        <tr>
         <th width="5%">No</th>
         <th width="">Agenda</th>         
         <th width="">Hadir/Disposisi</th>
        
         </tr>
       </thead>
       <tbody>
<?php
$query_pag_data = "SELECT * from acara where jabatan='$jabatan' and tanggal='$hari_ini' ORDER BY id DESC ";
$result_pag_data = mysqli_query($kominfo, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
 $id=$row['id'];
 $no_agenda=$row['no_agenda']; 
 $pakaian=$row['pakaian'];  
 $nama_acara=$row['nama_acara']; 
 $lokasi=$row['lokasi']; 
 $jabatan=$row['jabatan'];
 $tanggal=$row['tanggal'];
 $jam=$row['jam']; 
 $ket=$row['ket'];
 $pa=$row['pa'];
 $dis1=$row['dis1'];
 $dis2=$row['dis2'];
 $dis3=$row['dis3'];
 $status=$row['status'];  
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
                               <div class="input-group input-group-sm">                                                           
                               <?php if($status == 0): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="0" class="btn btn-danger btn-sm btn-sm">Tidak hadir</button> 
                               <?php elseif($status == 1): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="1" class="btn btn-success btn-sm hapus">Hadir</button> 
                               <?php else: ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="2" class="btn btn-warning btn-sm hapus">Disposisi</button>  
                               <?php endif ?>
                               </div>
                               <br/> 
                               <?php if($status == 1 OR $status == 0): ?>
                               <?php else: ?>
                               <form id="edit_disposisi"  method="post">
                               <?php if($jabatan=='Kepala Dinas' OR $dis1){ ?>                                 
                               <div class="input-group input-group-sm"> 
                               <span class="input-group-append"><b>Disposisi</b>&nbsp;:&nbsp;</span>                       
                               <input hidden name="id" value="<?php echo $id; ?>">   
                               <select class="form-control" name="jabatan" required>
                               <option disabled selected>== Pilih Pejabat ==</option>
                               <?php $tampil_pe = mysqli_query($kominfo, "select * from jabatan where sub='$jabatan' "); //ambil data dari tabel kecamatan
                               while($hasil_pe = mysqli_fetch_array($tampil_pe)){ ?> 
                               <option value="<?php echo $hasil_pe['nama_jabatan']; ?>"><?php echo $hasil_pe['nama_jabatan']; ?></option>                              
                               <?php } ?>
                               </select>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                               <label class="form-check-label" for="flexCheckDefault">Sekdis</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                               <label class="form-check-label" for="flexCheckDefault">Kabid TI</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                               <label class="form-check-label" for="flexCheckDefault">Kabid IKP</label>
                               </div>
                               <div class="form-check">
                               <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                               <label class="form-check-label" for="flexCheckDefault">Kabid SP</label>
                               </div>
                               <span class="input-group-append">
                               <button type="submit" name="kirim_disposisi" class="btn btn-info btn-sm">Kirim</button>
                               </span>
                               </div>
                               <?php }else{ }?> 
                               <br/>
                               <div class="input-group input-group-sm"> 
                               <span class="input-group-append"><b>Arahan</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span>                                
                               <?php if($jabatan=='Kepala Dinas'){ ?> 
                               <textarea  class="form-control"  name="dis1" cols="30" rows="5"><?php echo $jabatan; ?> : </textarea>
                               <?php }else{?> 
                               <?php if($dis1){ ?>
                               <textarea disabled class="form-control" cols="30" rows="5"><?php echo $dis1; ?></textarea>
                               <textarea  class="form-control"  name="dis2" cols="30" rows="5"><?php echo $jabatan; ?> : </textarea>
                               <?php }else{?>
                               <textarea disabled class="form-control" cols="30" rows="5"><?php echo $dis2; ?></textarea>                                
                               <?php } ?>                              
                               <?php } ?>
                               <?php endif ?>                             
                               </div>                                
                               </form>                             
                        </td>
                                          
                    </tr> 

<?php } ?>     
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
         <th >Hadir/Disposisi</th>
        
         </tr>
       </thead>
       <tbody>
<?php
$query_pag_data = "SELECT * from acara where jabatan='$jabatan' and tanggal='$besok' ORDER BY id DESC ";
$result_pag_data = mysqli_query($kominfo, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
 $id=$row['id']; 
 $nama_acara=$row['nama_acara']; 
 $lokasi=$row['lokasi']; 
 $jabatan=$row['jabatan'];
 $tanggal=$row['tanggal'];
 $jam=$row['jam']; 
 $ket=$row['ket'];
 $pa=$row['pa'];
 $dis1=$row['dis1'];
 $dis2=$row['dis2'];
 $dis3=$row['dis3'];
 $status=$row['status']; 
   
?>
                    <tr >
                        <td><?php echo ++$no_urut1;?></td>
                        <td>
                        <table>
                          <tbody>
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
                                 <b>Lokasi</b>
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
                         <td >
                               <div class="input-group input-group-sm">                                                           
                               <?php if($status == 0): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="0" class="btn btn-danger btn-sm btn-sm">Tidak hadir</button> 
                               <?php elseif($status == 1): ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="1" class="btn btn-success btn-sm hapus">Hadir</button> 
                               <?php else: ?>
                               <button id="status" data-id="<?php echo $id; ?>"  value="2" class="btn btn-warning btn-sm hapus">Disposisi</button>  
                               <?php endif ?>
                               </div>
                               <br/> 
                               <?php if($status == 1 OR $status == 0): ?>
                               <?php else: ?>
                               <form id="edit_disposisi"  method="post">
                               <?php if($dis3 ){}else{?>                                 
                               <div class="input-group input-group-sm"> 
                               <span class="input-group-append"><b>Disposisi</b>&nbsp;:&nbsp;</span>                       
                               <input hidden name="id" value="<?php echo $id; ?>">   
                               <select class="form-control" name="jabatan" required>
                               <option disabled selected>== Pilih Pejabat ==</option>
                               <?php $tampil_pe = mysqli_query($kominfo, "select * from jabatan where sub='$jabatan' "); //ambil data dari tabel kecamatan
                               while($hasil_pe = mysqli_fetch_array($tampil_pe)){ ?> 
                               <option value="<?php echo $hasil_pe['nama_jabatan']; ?>"><?php echo $hasil_pe['nama_jabatan']; ?></option>                              
                               <?php } ?>
                               </select>
                               <span class="input-group-append">
                               <button type="submit" name="kirim_disposisi" class="btn btn-info btn-sm">Kirim</button>
                               </span>
                               </div>
                               <?php }?> 
                               <br/>
                               <div class="input-group input-group-sm"> 
                               <span class="input-group-append"><b>Arahan</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</span>                                
                               <?php if($jabatan=='Kepala Dinas'){ ?> 
                               <textarea  class="form-control"  name="dis1" cols="30" rows="5"><?php echo $jabatan; ?> : </textarea>
                               <?php }else{ }?> 
                               <?php if($jabatan=='Sekretaris Dinas'){ ?>
                               <textarea readonly class="form-control" cols="30" rows="5" name="dis1" value="<?php echo $dis1; ?>"><?php echo $dis1; ?></textarea>
                               <textarea  class="form-control"  name="dis2" cols="30" rows="5"><?php echo $jabatan; ?> : </textarea>
                               <?php }else{ }?>
                               <?php if($jabatan=='Kepala Bidang TI' OR $jabatan=='Kepala Bidang IKP' OR $jabatan=='Kepala Bidang SP'){ ?>
                               <textarea readonly class="form-control" cols="30" rows="5" name="dis1" value="<?php echo $dis1; ?>"><?php echo $dis1; ?></textarea>
                               <textarea readonly class="form-control" cols="30" rows="5" name="dis2" value="<?php echo $dis2; ?>"><?php echo $dis2; ?></textarea> 
                               <textarea  class="form-control"   cols="30" rows="5" name="dis3"><?php echo $jabatan; ?> : </textarea> 
                               <?php }else{ }?>                               
                               <?php if($dis3){ ?>
                               <textarea disabled class="form-control" cols="30" rows="5" ><?php echo $dis1; ?></textarea>
                               <textarea disabled class="form-control" cols="30" rows="5" ><?php echo $dis2; ?></textarea>
                               <textarea disabled class="form-control" cols="30" rows="5" ><?php echo $dis3; ?></textarea>                                                             
                               <?php }else{ }?> 
                               <?php endif ?>                             
                               </div>                                
                               </form>                 
                        </td>
                                          
                    </tr> 

<?php } ?>     
                </tbody>
      </table>
      
     </div>
     <br/>
     <div class="form-group">
                        <center><a href="logout_mobile.php" class="btn btn-warning">Log Out</a></center>
     </div>
<br/>

