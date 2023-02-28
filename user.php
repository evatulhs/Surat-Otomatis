<?php
session_start();
  if (empty($_SESSION['agenda_username'])) {
    header("Location:login.php");
  }

?>


<div class="">
<div id="data_user"></div>
</div>

<?php include 'ajax.php'; ?>