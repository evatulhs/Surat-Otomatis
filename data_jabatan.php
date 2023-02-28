<?php
    //koneksi
    include 'dbconfig.php';    
    $id_jabatan = $_GET['id_jabatan'];    
?>
<div class="card-header ">
                <h5 class="card-title">Input Jabatan</h5>
</div>
<div class="card-body ">
     <div class="row"> <!-- class row digunakan sebelum membuat column  -->         
        <div class="col-md-4"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
                <form  method="post" id="<?php if($id_jabatan){?>form_edit_jabatan<?php }else{?>form_tambah_jabatan<?php } ?>">
                    <?php $tampil_id_jabatan = mysqli_query($kominfo, "select * from jabatan where id='$id_jabatan' "); //ambil data dari tabel lokasi
                            $hasil_id_jabatan = mysqli_fetch_array($tampil_id_jabatan)
                            ?>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jabatan</label>
                        <input hidden name="id" value="<?php echo $id_jabatan; ?>">
                        <input type="text" class="form-control" name="nama_jabatan" value="<?php echo $hasil_id_jabatan['nama_jabatan']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Sub Jabatan</label>
                        <select class="form-control" name="sub">
                          <option selected value="<?php echo $hasil_id_jabatan['sub']; ?>"><?php echo $hasil_id_jabatan['sub']; ?></option>
                          <option disabled >== Pilih Sub Jabatan ==</option>
                            <?php $tampil_sub = mysqli_query($kominfo, "select * from jabatan"); //ambil data dari tabel kecamatan
                            while($hasil_sub = mysqli_fetch_array($tampil_sub)){ ?> 
                            <option value="<?php echo $hasil_sub['nama_jabatan']; ?>"><?php echo $hasil_sub['nama_jabatan']; ?></option>
                             <?php } ?>
                        </select>
                    </div>                      
                    <div class="form-group">
                    	<?php if($id_jabatan){?>
                    	<button type="submit" name="edit_jabatan" class="btn btn-info btn-sm">Edit Jabatan</button>
                    	<a id="batal_jabatan" class="btn btn-warning btn-sm">Batal</a>
                    	 <?php }else{?>	
                        <button type="submit" name="tambah_jabatan" class="btn btn-info btn-sm">Input Jabatan</button>
                        <?php } ?>                        
                    </div>
                </form>
        </div>
        <br/>
        <div class="col-md-8"> <!-- ukuruan layar dengan bootstrap adalah 12 kolom, bagian kiri dibuat sebesar 4 kolom-->
                <table id="jabatan" class="table table-bordered">
                    <thead class="">
                     <th width="1%">
                        No
                      </th>
                      <th>
                        Jabatan
                      </th>
                      <th>
                        
                      </th>
                    </thead>
                    <tbody>
                     
                        <?php $noo=1; $tampil_jabatan = mysqli_query($kominfo, "select * from jabatan"); //ambil data dari tabel lokasi
                         while($hasil_jabatan = mysqli_fetch_array($tampil_jabatan)){ ?> 
                      <tr> 
                      	<td>
                         <?php  echo $noo++; ?>
                        </td>
                        <td>
                         <?php echo $hasil_jabatan['nama_jabatan']; ?>
                        </td>
                        <td width="5%">
                          <div class="btn-group">  
                          <a id="edit_jabatan" class="btn btn-info btn-sm btn-sm" value="<?php echo $hasil_jabatan['id']; ?>">Edit</a>
                          <a id="hapus_jabatan"  value="<?php echo $hasil_jabatan['id']; ?>" class="btn btn-danger btn-sm hapus">Hapus</a>
                          </div>
                        </td>
                      </tr>
                        <?php } ?>                     
                    </tbody>
                </table>
          </div>
     </div>
</div>
<hr/>
<script>
$(document).ready(function() {
    $('#jabatan').DataTable({
        "lengthMenu": [[20, 40, 80, -1], [20, 40, 80, "All"]]
    });
} );
</script> 
