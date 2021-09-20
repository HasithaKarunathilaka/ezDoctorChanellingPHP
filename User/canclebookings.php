<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../login.php");
		exit;
	}
?>
<html>
<head>
	<title>Cancle Appointment | eZ Channeling</title>
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

	<header>
  		<img src="../Images/head.jpg" height="100%" width="100%">
 
	</header>

	<div class="sidebar">
		<ul>
			<li><a href="home.php">&nbsp;Home</a></li>
			<li><a href="makeapp.php">&nbsp;Make Appointment</a></li>
			<li><a href="myapp.php">&nbsp;My Appointments</a></li>
			<!--<li><a href="updateapp.php">&nbsp;Update My Appointments</a></li>
			<li class="active"><a href="canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
			<li><a href="about.php">&nbsp;About</a></li>
			<li><a href="contact.php">&nbsp;Contact</a></li>
			<li><a href="../PHP/logout.php">&nbsp;Logout</a></li>
		</ul>
	</div>

	<div class="boxSearchApp">

		<form class="formAppSrc" action="" method="POST"></form>
			<p>Appointment No: </p>
			<input type="text" name="" placeholder="X">
			<br>
			<center><input type="button" value="Search" onclick=""></center>
		</form>
		
	</div>

</body>
</html>