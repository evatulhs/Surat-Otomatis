<?php
   session_start();
    if (empty($_SESSION['agenda_username'])){header("Location:index.php");}
    //koneksi
    include 'dbconfig.php';

  // membuat variabel untuk menampung data dari form
if(isset($_POST['simpan_user'])){

  
  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $email   = $_POST['email'];
  $hp   = $_POST['hp'];
  $akses  = $_POST['akses'];
  $foto_profile = $_FILES['foto_profile']['name'];

  function resize_image($file, $width, $height) {
    list($w, $h) = getimagesize($file);
    /* calculate new image size with ratio */
    $ratio = max($width/$w, $height/$h);
    $h = ceil($height / $ratio);
    $x = ($w - $width / $ratio) / 50;
    $w = ceil($width / $ratio);
    /* read binary data from image file */
    $imgString = file_get_contents($file);
    /* create image from string */
    $image = imagecreatefromstring($imgString);
    $tmp = imagecreatetruecolor($width, $height);
    imagecopyresampled($tmp, $image,
    0, 0,
    $x, 0,
    $width, $height,
    $w, $h);
    imagejpeg($tmp, $file, 80);
    return $file;
    /* cleanup memory */
    imagedestroy($image);
    imagedestroy($tmp);
}

  if($foto_profile != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto_profile); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = resize_image($_FILES['foto_profile']['tmp_name'], 180, 200);
    
   $nama_gambar = $nama.'.jpg'; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'fotoprofile/'.$nama_gambar); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "UPDATE user SET nama='$nama', email='$email', hp='$hp',akses='$akses', foto_profile='$nama_gambar'";
                  $query .= "WHERE id = '$id'";
                  $result = mysqli_query($kominfo, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($kominfo).
                           " - ".mysqli_error($kominfo));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>$.toast({ heading: 'Data berhasil di simpan', icon: 'success', showHideTransition: 'fade', position: 'mid-center'})</script> ";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>$.toast({ heading: 'file Harus JPG dan PNG', icon: 'error', showHideTransition: 'fade', position: 'mid-center'})</script> "; 
            }
} else {
   $query = "UPDATE user SET nama='$nama', email='$email', hp='$hp',akses='$akses'";
   $query .= "WHERE id = '$id'";
                  $result = mysqli_query($kominfo, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($kominfo).
                           " - ".mysqli_error($kominfo));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>$.toast({ heading: 'Data berhasil di simpan', icon: 'success', showHideTransition: 'fade', position: 'mid-center'})</script> ";
                  }
}
}

if(isset($_POST['hapus_user'])){
   $id = $_POST['id'];
   $query = "DELETE FROM user WHERE id='$id' ";
    mysqli_query($kominfo, $query);
  echo "<script>$.toast({ heading: 'Data berhasil di hapus', icon: 'error',  showHideTransition: 'fade', position: 'mid-center'})</script> ";  

}

if(isset($_POST['add_user'])){

  
  if (empty($_POST['username'])) {
        echo "<script>$.toast({ heading: 'Data belum lengkap', icon: 'error', showHideTransition: 'fade', position: 'mid-center'})</script> ";
    } else { 
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  


   //membuat insert data user
   $query = 'INSERT INTO user (username, password,akses)VALUES("'.$username.'", "'.$password.'","user")';
   mysqli_multi_query($kominfo, $query);
 
    echo "<script>$.toast({ heading: 'Data berhasil di simpan', icon: 'success', showHideTransition: 'fade', position: 'mid-center'})</script> ";
  }  
}

?>