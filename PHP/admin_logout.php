<?php

    session_start();
    unset($_SESSION['aid']);
    unset($_SESSION['aun']);
    echo "<script> window.location.href= '../Admin/admin_log.php';
    alert('You are Successfuly Logged Out'); </script>";
    //header("Location:../Admin/admin_log.php");

?>