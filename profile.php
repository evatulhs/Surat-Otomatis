
<?php
  include 'dbconfig.php';
  session_start();
if (empty($_SESSION['agenda_username'])){header("Location:index.php");}


$username = $_SESSION['agenda_username'];
      // menampilkan data dari database yang mempunyai id=$id
      $query = "SELECT * FROM user WHERE username='$username'";
      $result = mysqli_query($kominfo, $query);
      $data = mysqli_fetch_assoc($result);


if($_POST['submit_pass']){
    
  }


?>


<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
<!-- Profile --> 
<div class="col-md-6">  
<div class="card card-primary card-outline">
<div class="card-header "><h5 class="card-title">Profile</h5></div>  
<div class="card-body box-profile">
<div id="data_profile"></div>
</div><!-- /end .card-body box-profile -->
</div><!-- /end .card card-primary card-outline -->
</div><!-- /end .col-md-6 -->
<!-- end profile --> 
<!-- Password --> 
<div class="col-md-6"> 
<div class="card card-primary card-outline">
<div id="data_password"></div>
</div><!-- /end .card card-primary card-outline -->
</div><!-- /end .col-md-6 -->
<!-- end Password --> 
</div><!-- /end .row -->
</div><!-- /end .container-fluid -->
</section><!-- /end .content -->
<script>
 $(document).ready(function() {

            //load data saat aplikasi dijalankan 
            profile();         
            //edit data 
            $("#data_profile").on("submit", "#form_edit_profile", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'edit_profile.php?action=edit_profile',
                    type: 'post',
                   data: new FormData(this),
                          contentType: false,
                          cache: false,
                          processData:false,
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        profile();
                    }
                });
            });

            
        })           

        function profile() {
            $.ajax({
                url: 'data_profile.php',
                type: 'get',
                success: function(data) {
                    $('#data_profile').html(data);
                }
            });
        }
        $(document).ready(function() {

            //load data saat aplikasi dijalankan 
            password();         
            //edit data 
            $("#data_password").on("submit", "#form_edit_password", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'edit_password.php?action=edit_password',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        Swal.fire((data),'', 'success')
                        password();
                    }
                });
            });

            
        })           

        function password() {
            $.ajax({
                url: 'data_password.php',
                type: 'get',
                success: function(data) {
                    $('#data_password').html(data);
                }
            });
        }
</script>

  


 

