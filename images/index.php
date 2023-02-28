<?php
session_start();
  if (empty($_SESSION['event_username'])) {
    echo "error";
  }else{echo "error";}

?>