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
 
$hari_ini = date('d F Y');
$date = strtotime("+1 day");
$besok = date('d F Y',$date); 
?>



<div class="card-body px-lg-5 py-lg-5">
              <div class=""><center><img src="img/smp.png" width="80"></center></div>
              <hr/>
              <div class="text-center text-muted mb-4">
                <h4>Agenda <b><?php echo  $jabatan; ?></b><div><?php echo hari_ini(); ?>, <?php echo date('d F Y'); ?> </div></h4>
              </div>
              <hr/>    
<div class="table-responsive">

      <table class="table table-bordered " >
       <thead>
        <tr>
         <th width="5%">No</th>
         <th width="">Agenda</th>         
         <th >Keterangan</th>
        
         </tr>
       </thead>
       <tbody>
<?php
$query_pag_data = "SELECT * from acara where jabatan='$jabatan' and tanggal='$hari_ini' ORDER BY id DESC ";
$result_pag_data = mysqli_query($kominfo, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
 $id=$row['id']; 
 $nama_acara=$row['nama_acara']; 
 $lokasi=$row['lokasi']; 
 $jabatan=$row['jabatan'];
 $tanggal=$row['tanggal'];
  $jam=$row['jam']; 
 $ket=$row['ket'];
   
?>
                    <tr >
                        <td><?php echo ++$no_urut;?></td>
                        <td>
                        <table>
                          <tbody>
                            <tr >
                              <td style="border-style: none;">
                                 Acara
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
                                 Lokasi
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
                                Tanggal
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
                                Pukul
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
                                Pimpinan Acara 
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <?php echo $pa; ?>
                              </td>
                            </tr> 
                            <tr>
                              <td style="border-style: none;">
                                Disposisi 
                              </td>
                              <td style="border-style: none;">
                                :
                              </td>
                              <td style="border-style: none;">
                                <form id="edit_disposisi"  method="post">
                                <div class="input-group input-group-sm">                        
                                <input hidden name="id" value="<?php echo $id; ?>">   
                                <select class="form-control" name="jabatan" required>
                                <option disabled selected>== Pilih Pejabat ==</option>
                               <?php $tampil_pe = mysqli_query($kominfo, "select * from user"); //ambil data dari tabel kecamatan
                               while($hasil_pe = mysqli_fetch_array($tampil_pe)){ ?> 
                               <option value="<?php echo $hasil_pe['jabatan']; ?>"><?php echo $hasil_pe['nama']; ?> - <?php echo $hasil_pe['jabatan']; ?></option>                              
                               <?php } ?>
                               </select>
                               <span class="input-group-append">
                               <a id="kirim_agenda" class="btn btn-info btn-sm btn-sm" >kirim</a>
                               </span>
                               </div>
                              </form>
                              </td>
                            </tr>                            
                          </tbody>
                        </table>
                        </td>
                        <td><?php echo $ket; ?>

                        </td>
                                          
                    </tr> 

<?php } ?>     
                </tbody>
      </table>
      <hr/>
              <div class="text-center text-muted mb-4">
                <h4>Agenda <b><?php echo  $jabatan; ?></b><div><?php echo besok(); ?>, <?php echo $besok; ?> </div></h4>
              </div>
              <hr/>
          
      <table class="table table-bordered " style="width:100%;">
       <thead>
        <tr>
         <th width="5%">No</th>
         <th width="">Agenda</th>         
         <th >Keterangan</th>
        
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
   
?>
                    <tr >
                        <td><?php echo ++$no_urut1;?></td>
                        <td>
                        <table>
                          <tbody>
                            <tr >
                              <td style="border-style: none;">
                                 Acara
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
                                 Lokasi
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
                                Tanggal
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
                                Pukul
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
                                Pimpinan Acara 
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
                        <td><?php echo $ket; ?>

                        </td>
                                          
                    </tr> 

<?php } ?>     
                </tbody>
      </table>
      
     </div>
     <br/>
     <div class="form-group">
                        <center><a href="user_log.php" class="btn btn-warning">Log Out</a></center>
     </div>
<br/>

