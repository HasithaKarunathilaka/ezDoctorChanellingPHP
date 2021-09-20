<?php

    include("../dbcon/dbcon.php");

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $nic = $_POST['nic'];
    $mob = $_POST['mob'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];

    $sql = "INSERT INTO user_details (fname,lname,nic,mob,email,pw) values ('$fname','$lname','$nic','$mob','$email','$pw')";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo"<script> window.location.href= '../login.php';
        alert('Registration Successful. Please Log In to Countinue.');</script>";
        //header("Location:../login.php");
    }
    else{
        echo"<script> window.location.href= '../signup.php';
        alert('Email already Exist...!');</script>";
        //header("Location:../signup.php");
    }

    exit;

?>