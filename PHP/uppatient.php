<?php

    session_start();

    $uemail = $_SESSION['uemail'];
    $demail = $_POST['demail'];
    $appno = $_POST['appno'];
    $title = $_POST['title'];
    $ptnname = $_POST['ptn_name'];
    $ptntel = $_POST['ptn_tel'];

    include("../dbcon/dbcon.php");

    $sql = "UPDATE appointments SET title='$title', ptn_name='$ptnname', ptn_tel='$ptntel' WHERE uemail = '$uemail' AND demail = '$demail' AND app_no = '$appno'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script> window.location.href= '../User/home.php';
        alert('Update Successful');</script>";
    }
?>