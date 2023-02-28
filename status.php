<?php 
    include 'dbconfig.php';
    $id = $_POST['id'];
    $status = $_POST['status'];
    $query = "UPDATE acara SET status='$status' WHERE id='$id'";
    $result = mysqli_query($kominfo,$query);
?>