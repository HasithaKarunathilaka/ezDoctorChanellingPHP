<?php

    session_start();
    unset($_SESSION['uid']);
    unset($_SESSION['uname']);
    echo "<script> window.location.href= '../login.php';
    alert('You are Successfuly Logged Out'); </script>";
    //header("Location:../login.php");

?>