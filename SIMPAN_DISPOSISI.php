case 'kirim_disposisi': 

    $id_agenda = $_POST['id'];    
    $arr = $_POST['jabatan']; 
    $jabatan = implode (", ", $arr);
    $ket = $_POST['ket'];
    $dis1 = $_POST['dis1'];
    $dis2 = $_POST['dis2'];
    $dis3 = $_POST['dis3'];
   
    //input data
    $kirim_agenda = mysqli_query($kominfo, " UPDATE `acara` SET  jabatan='$jabatan', ket='$ket', dis1='$dis1', dis2='$dis2', dis3='$dis3' WHERE id='$id_agenda' ");
    if ($kirim_agenda)
     {
        echo "Kirim Disposisi Berhasil";
     }
     else
     {
        echo "Kirim Disposisi Gagal :" . mysqli_error($kominfo);
     }
    break;