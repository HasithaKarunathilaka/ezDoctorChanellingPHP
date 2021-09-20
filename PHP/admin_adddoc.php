<?php

    include("../dbcon/dbcon.php");

    $name = $_POST['txtDocName'];
    $specialization = $_POST['specialization'];
    $fee = $_POST['txtDocFee'];
    $email = $_POST['DocEmail'];
    $tel = $_POST['DocTel'];
    $date = $_POST['DocDate'];
    $time = $_POST['DocTime'];

    $sql = "INSERT INTO doctor_details (dname,specialization,fee,email,tel,adate,atime) VALUES ('$name','$specialization','$fee','$email','$tel','$date','$time')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo"<script> window.location.href= '../Admin/adddoc.php';
        alert('Successfuly Registered Doctor Details');</script>";
        //header("Location:../Admin/adddoc.php");
    }
    else{
        echo"<script> window.location.href= '../Admin/adddoc.php';
        alert('Email already Exist...!');</script>";
    }

    exit;


?>