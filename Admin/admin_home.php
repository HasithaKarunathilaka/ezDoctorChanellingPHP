<?php
	session_start();
	/*if(!isset($_SESSION["aid"]))  {
		header("Location: ./admin_log.php");
		exit;
	}*/
?>

<html>
<head>
	<title>Admin | Home</title>
	<link rel="stylesheet" href="../CSS/style.css">	
</head>
<body>

<header>
  <img src="../Images/head.jpg" width="100%" height="100%">
 
</header>
   

		
		<div class="sidebar">
			<ul>
				<li class="active"><a href="admin_home.php">&nbsp;Home</a></li>
				<li><a href="doc.php">&nbsp;Doctors</a></li>
				<li><a href="adddoc.php">&nbsp;Add Doctor</a></li>
				<li><a href="mem.php">&nbsp;Members</a></li>
                <li><a href="app.php">&nbsp;Appointments</a></li>
                <li><a href="upapp.php">&nbsp;Update Appointments</a></li>
				<li><a href="../PHP/admin_logout.php">&nbsp;Logout</a></li>
			</ul>
		</div>

		<div class="main">
			<div class="content">
				<h1>Access</h1>
			</div>
		</div>

</body>
</html>