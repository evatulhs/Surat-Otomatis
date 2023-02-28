<?php
 include 'dbconfig.php';
 session_start();
 if (empty($_SESSION['agenda_username'])){header("Location:index.php");}

$username = $_SESSION['agenda_username'];
      // menampilkan data dari database yang mempunyai id=$id
      $query = "SELECT * FROM user WHERE username='$username'";
      $result = mysqli_query($kominfo, $query);
      $data = mysqli_fetch_assoc($result);
?>
<div class="text-center"><?php if($data['foto_profile']){echo '<img src="fotoprofile/'.$data['foto_profile'].'" class="profile-user-img img-fluid img-circle">';}else{echo '<img src="fotoprofile/default-150x150.png" class="profile-user-img img-fluid img-circle">';} ?><br/><br/></div>
     
                
        <form class="form-horizontal" method="POST" id="form_edit_profile" enctype="multipart/form-data" >
      
        <!-- menampung nilai id produk yang akan di edit -->
        
        <div class="form-group row">
          <label class="control-label col-sm-3">Foto Profile </label>
          <div class="col-sm-8">
          <input hidden type="text" name="id" value="<?php echo $data['id']; ?>" />  
          <input class="form-control" type="file" name="foto_profile" />
          </div>
        </div>
       
        <div class="form-group row">
          <label class="control-label col-sm-3">Username </label>
          <div class="col-sm-8">
          <input class="form-control" type="text" name="username" value="<?php echo $data['username']; ?>" readonly/>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-3" >Nama </label>
          <div class="col-sm-8">
          <input class="form-control" type="text" name="nama"  value="<?php echo $data['nama']; ?>"/>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-3" >Email </label>
           <div class="col-sm-8">
          <input class="form-control"type="text" name="email"  value="<?php echo $data['email']; ?>"/>
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-sm-3" >No. HP </label>
          <div class="col-sm-8">
          <input class="form-control" type="text" name="hp"  value="<?php echo $data['hp']; ?>"/>
          </div>
        </div>
        
        <div class="form-group">
         <div class="col-sm-offset-3 col-sm-4">
         <button class="btn btn-info btn-sm" type="submit" name="simpan" value="simpan" >Simpan Perubahan</button>
         </div> 
        </div>
      </form>

