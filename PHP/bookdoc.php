<?php
    session_start();
    $uemail = $_SESSION['uemail'];
    $demail = $_POST['demail'];
    $title = $_POST['title'];
    $ptn_name = $_POST['ptn_name'];
    $ptn_tel = $_POST['ptn_tel'];

    include("../dbcon/dbcon.php");

    $sql1 = "SELECT MAX(app_no) AS 'App No' FROM appointments WHERE demail = '$demail'";
    $max = mysqli_query($conn,$sql1);

    $row = mysqli_fetch_assoc($max);
    $appno = $row['App No'] + 1;

    $sql = "INSERT INTO appointments (uemail,demail,title,ptn_name,ptn_tel,app_no) VALUES ('$uemail','$demail','$title','$ptn_name','$ptn_tel','$appno')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo"<script> window.location.href= '../User/makeapp.php';
        var ano = '$appno';
        alert('Chennel Recorded. Your Appointment No is: ' + ano);</script>";
    }


?>