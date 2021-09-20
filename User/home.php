<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../login.php");
		exit;
	}
?>
<html>
<head>
	<title>Home | eZ Channeling</title>
	<link rel="stylesheet" href="../CSS/style.css">	
</head>
<body>

<header>
  <img src="../Images/head.jpg" width="100%" height="100%">
 
</header>
   

		
		<div class="sidebar">
			<ul>
				<li class="active"><a href="home.php">&nbsp;Home</a></li>
				<li><a href="makeapp.php">&nbsp;Make Appointment</a></li>
				<li><a href="myapp.php">&nbsp;My Appointments</a></li>
				<!--<li><a href="updateapp.php">&nbsp;Update My Appointments</a></li>
				<li><a href="canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
				<li><a href="about.php">&nbsp;About</a></li>
				<li><a href="contact.php">&nbsp;Contact</a></li>
				<li><a href="../PHP/logout.php">&nbsp;Logout</a></li>
			</ul>
		</div>

		<div class="main">
			<div class="content">
				<h1>Access</h1>
			</div>
		</div>

</body>
</html>