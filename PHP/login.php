<?php

    include("../dbcon/dbcon.php");

    $un = $_POST['un'];
    $pw = $_POST['psw'];

    $sql = "SELECT * FROM user_details WHERE email = '$un' AND pw = '$pw'";
    $result = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_array($result)){
        $uid = $row["0"];
        $name = $row["1"] . " " . $row["2"];
    }

    if($result->num_rows == 1){
        session_start();
        $_SESSION["uemail"] = $un;
        $_SESSION["uname"] = $name;
        echo "<script> window.location.href= '../User/home.php';
        alert('Log In Successful');</script>";
        //header("Location:../User/home.php");
    }
    else{
        echo "<script> window.location.href= '../login.php';
        alert('Username or Password is Incorrect');</script>";
        //header("Location:../login.php");
    }

    $conn->close();

?>