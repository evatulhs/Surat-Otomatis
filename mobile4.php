
<!DOCTYPE html>
<html>
<head>
<head>
  <meta charset="UTF-8">  
<title>Agenda Anda</title>
<link href='lib/main.css' rel='stylesheet' />
<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>
<?php
    //koneksi
    include 'dbconfig.php';
    session_start();
    if (empty($_SESSION['agenda_username'])){header("Location:login_mobile.php");}
  
    $jabatan = $_SESSION['jabatan'];

?>
<script src='lib/main.js'></script>
<script src='lib/locales-all.js'></script>
<script>


      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:'id',
          headerToolbar: {
          left: 'prevYear,prev,next,nextYear today',
          center: 'title',
          right: 'dayGridMonth,dayGridWeek,dayGridDay'
                     },     
          navLinks: true, // can click day/week names to navigate views
          editable: true,
          dayMaxEvents: true, // allow "more" link when too many events
          events: [

<?php
$query_pag_data1 = "SELECT * from acara ";
$result_pag_data1 = mysqli_query($kominfo, $query_pag_data1);

while($row = mysqli_fetch_assoc($result_pag_data1)) {

$tanggal=$row['tanggal']; 
$acara=$row['nama_acara'];
$id=$row['id'];


$ambiltahun  = substr($tanggal,-4); 
$ambilbulan   = preg_replace("/[^a-zA-Z]+/", "", $tanggal);
$ambiltanggal = substr($tanggal,0,2); 

if ($ambilbulan=="Januari")  $namabulan="01";
elseif ($ambilbulan=="Februari")  $namabulan="02";
elseif ($ambilbulan=="Maret")  $namabulan="03";
elseif ($ambilbulan=="April")  $namabulan="04";
elseif ($ambilbulan=="Mei")  $namabulan="05";
elseif ($ambilbulan=="Juni")  $namabulan="06";
elseif ($ambilbulan=="Juli")  $namabulan="07";
elseif ($ambilbulan=="Agustus")  $namabulan="08";
elseif ($ambilbulan=="September")  $namabulan="09";
elseif ($ambilbulan=="Oktober")  $namabulan="10";
elseif ($ambilbulan=="November")  $namabulan="11";
elseif ($ambilbulan=="Desember")  $namabulan="12";

 $tanggal=$row['tanggal'];
 $jam=$row['jam'];

 
$tanggalok="$ambiltahun-$namabulan-$ambiltanggal";



?>


                    {
                      title  : '<?php echo $jam;?> <?php echo $acara;?>',
                      url: 'data_detail.php?id_agenda=<?php echo $id; ?>',
                      start  : '<?php echo $tanggalok;?>'
                    },
<?php } ?>
                  ]
        });
        calendar.render();
      });

    </script>

</head>
<body>

  <div id='calendar'></div>

</body>
</html>
