<?php
include 'dbconfig.php';
session_start();
if (empty($_SESSION['agenda_username'])){header("Location:index.php");}
  
switch ($_GET['action'])
{

    case 'edit_password':

  //membuat variabel untuk menyimpan data inputan yang di isikan di form
    $id      = $_POST['id'];
    $password_lama      = $_POST['password_lama'];
    $password_baru      = $_POST['password_baru'];
    $konfirmasi_password  = $_POST['konfirmasi_password'];
    
    //cek dahulu ke database dengan query SELECT
    //kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
    //encrypt -> md5($password_lama)
    $cek = $kominfo->query("SELECT password FROM user WHERE password='$password_lama'");
    
    if($cek->num_rows){
      //kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
      //membuat kondisi minimal password adalah 5 karakter
      if(strlen($password_baru) >= 5){
        //jika password baru sudah 5 atau lebih, maka lanjut ke bawah
        //membuat kondisi jika password baru harus sama dengan konfirmasi password
        if($password_baru == $konfirmasi_password){
          //jika semua kondisi sudah benar, maka melakukan update kedatabase
          //query UPDATE SET password = encrypt md5 password_baru
          //kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
                  
          $update = $kominfo->query("UPDATE user SET password='$password_baru' WHERE id='$id'");
          if($update){
            //kondisi jika proses query UPDATE berhasil
            echo "Password berhasil di rubah!";
          }else{
            //kondisi jika proses query gagal
            echo "Gagal merubah password!";
          }         
        }else{
          //kondisi jika password baru beda dengan konfirmasi password
          echo "Konfirmasi password tidak cocok!";
        }
      }else{
        //kondisi jika password baru yang dimasukkan kurang dari 5 karakter
        echo "Minimal password baru adalah 5 karakter!";
      }
    }else{
      //kondisi jika password lama tidak cocok dengan data yang ada di database
      echo "Password lama tidak cocok!";
    }

    break;
}
?>    