<?php

    session_start();

    $uemail = $_SESSION['uemail'];
    $demail = $_GET['demail'];
    $appno = $_GET['appno'];

    include("../dbcon/dbcon.php");
    $sql = "DELETE FROM appointments WHERE uemail = '$uemail' AND demail = '$demail' AND app_no = '$appno'";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script> window.location.href= '../User/home.php';
        alert('Appointment Deleted Successful');</script>";
    }

?>