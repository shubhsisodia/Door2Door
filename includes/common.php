<?php
    $con = mysqli_connect("localhost", "root", "", "door2door")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>
