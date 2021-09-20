<?php

    include("../dbcon/dbcon.php");

    $un = $_POST['un'];
    $pw = $_POST['psw'];

    $sql = "SELECT * FROM admlog WHERE un = '$un' AND pw = '$pw'";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)){
        $aid = $row["0"];
        $aun = $row["1"];
    }

    if($result->num_rows == 1){
        session_start();
        $_SESSION["uid"] = $aid;
        $_SESSION["uname"] = $aun;
        echo "<script> window.location.href= '../Admin/admin_home.php';
        alert('Log In Successful'); </script>";
        //header("Location:../Admin/admin_home.php");
    }
    else{
        //header("Location:../Admin/admin_log.php");
        echo "<script> window.location.href= '../Admin/admin_log.php';
        alert('Username or Password is Incorrect'); </script>";
        
    }

    $conn->close();

?>