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
<div class="card-header"><h3 class="card-title">Ganti Password</h3></div>
<div class="card-body box-profile">
        <form class="form-horizontal" method="POST" id="form_edit_password">
          <input hidden type="text" name="id" value="<?php echo $data['id']; ?>" />  
          <div class="form-group row">
                <label class="control-label col-sm-4">Password Lama</label>
                <div class="input-group col-sm-6 " id="show_hide_password"><input id="password_lama" value="<?php echo $data['password']; ?>" class="form-control" data-toggle="password" type="password" name="password_lama"   required><div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye"></i></span></div>
                </div>
          </div>
          <div class="form-group row">
                <label class="control-label col-sm-4">Password Baru</label>
                <div class="input-group col-sm-6"><input id="password_baru" class="form-control" data-toggle="password" type="password" name="password_baru" required> <div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye"></i></span></div>
                </div>
          </div>
          <div class="form-group row">
                <label class="control-label col-sm-4">Konfirmasi Password</label>
                <div class="input-group col-sm-6"><input id="konfirmasi_password" class="form-control" data-toggle="password" type="password" name="konfirmasi_password" required> <div class="input-group-append"><span class="input-group-text"><i class="fa fa-eye"></i></span></div>
                </div> 
          </div>
          <div class="form-group">
          <div class="col-sm-offset-3 col-sm-4">
          <button class="btn btn-info btn-sm" type="submit" name="simpan" value="simpan" >Ganti Password</button>
          </div> 
          </div>  
        </form>
</div>
<script type="text/javascript" src="bootstrap-show-password.js"></script>