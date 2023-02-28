<?php
    //koneksi
    include 'dbconfig.php';
    $id_user = $_GET['id_user'];
?>


<div class="content">       
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card card-info card-outline">
<div class="card-header"><h3 class="card-title">User Management</h3></div>
<!-- /.card-header -->
<div class="card-body">
 <form  method="post" id="<?php if($id_user){?>form_edit_user<?php }else{?>form_tambah_user<?php } ?>">
                         <?php $tampil_id_user = mysqli_query($kominfo, "select * from user where id='$id_user' "); //ambil data dari tabel lokasi
                         $hasil_id_user = mysqli_fetch_array($tampil_id_user) ?>                         
 <table id="user" class="table table-bordered">
                    <thead class="">
                      <th>
                        Username
                      </th>                      
                      <th>
                        Nama
                      </th>
                      <th>
                       Jabatan
                      </th>
                       <th>
                       Email
                      </th>
                       <th>
                        HP
                      </th>
                       <th>
                        Akses
                      </th>
                       <th>
                        Foto
                      </th>
                      <th width="10%">
                        
                      </th>
                    </thead>
                    <tbody>
                     
                  
                      <tr> 
                         
                        <td>
                           <input type="hidden" name="id" value="<?php echo $hasil_id_user['id']; ?>">       
                           <input type="text" name="username" class="form-control " value="<?php echo $hasil_id_user['username']; ?>" required/> 
                        </td>                       
                        <td>
                          <input type="text" name="nama" class="form-control" value="<?php echo $hasil_id_user['nama']; ?>">   
                        </td>
                         <td>
                         <select class="form-control" name="jabatan">
                          <option selected value="<?php echo $hasil_id_user['jabatan']; ?>"><?php echo $hasil_id_user['jabatan']; ?></option>
                          <option disabled >== Pilih Sub Jabatan ==</option>
                            <?php $tampil_sub = mysqli_query($kominfo, "select * from jabatan"); //ambil data dari tabel kecamatan
                            while($hasil_sub = mysqli_fetch_array($tampil_sub)){ ?> 
                            <option value="<?php echo $hasil_sub['nama_jabatan']; ?>"><?php echo $hasil_sub['nama_jabatan']; ?></option>
                            <?php } ?>
                        </select>  
                        </td>
                        <td>
                          <input type="text" name="email" class="form-control" value="<?php echo $hasil_id_user['email']; ?>">    
                        </td>
                        <td >
                          <input type="text" name="hp" class="form-control" value="<?php echo $hasil_id_user['hp']; ?>">  
                        </td>
                         <td >
                          <select type="text" name="akses" class="form-control " value="<?php echo $hasil_id_user['akses']; ?>"><option><?php echo $hasil_id_user['akses']; ?></option><option disabled>Pilih Akses</option><option>admin</option><option>operator</option><option>user</option>
                          </select>
                        </td>
                         <td >
                          <input type="file" class="form-control" name="foto_profile" value="<?php echo $hasil_id_user['foto_profile']; ?>" >
                         <?php if($id_user){ ?><center style="margin:10px;"><img src="fotoprofile/<?php echo $hasil_id_user['foto_profile']; ?>" width="50" ></center> <?php } ?>
                        </td>
                        <td>
                           <?php if($id_user){ ?>
                           <button type="submit" name="edit_user"  class="btn btn-info btn-sm">Edit User</button>
                          <a id="batal_user" class="btn btn-warning btn-sm">Batal</a>
                          <?php }else{ ?>
                          <button type="submit" name="simpan_user" class="btn btn-info btn-sm">Input User</button>
                        <?php } ?>
                        </td>
                         
                      </tr>
                                         
                    </tbody>
                </table>
    </form>                                      
                    <br/><br/>
<div class="table-responsive">
      <table id="data_table" class="table table-bordered table-striped" style="width:100%;">
       <thead>
        <tr>
         <th width="5%">ID</th>
         <th width="">Username</th>
         <th width="">Nama</th>
         <th width="">Jabatan</th>
         <th >Email</th>
         <th >Hp</th>
         <th width="6%">Akses</th>
         <th width="8%">Foto Profile</th>
         <th width="10%"></th>
         </tr>
       </thead>
       <tbody>
<?php 
$query_pag_data = "SELECT * from user ORDER BY id DESC ";
$result_pag_data = mysqli_query($kominfo, $query_pag_data);
while($row = mysqli_fetch_assoc($result_pag_data)) {
 $id=$row['id']; 
 $username=$row['username']; 
 $nama=$row['nama']; 
 $jabatan=$row['jabatan'];
 $email=$row['email']; 
 $hp=$row['hp'];
 $bidang=$row['bidang'];
 $akses=$row['akses'];
 $foto=$row['foto_profile'];  
?>
                    <tr id="<?php echo $id; ?>">
                        <td><?php echo ++$no_urut;?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $nama; ?></td>
                         <td><?php echo $jabatan; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $hp; ?></td>
                        <td><?php echo $akses; ?></td>
                        <td><center><?php if($foto){echo '<img src="fotoprofile/'.$foto.'" width="50" >';}else{echo "Tidak Ada File";} ?></center></td>
                        <td><a id="edit_user" class="btn btn-info btn-sm btn-sm" value="<?php echo $id; ?>">Edit</a>
                            <a id="hapus_user"value="<?php echo $id; ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
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

