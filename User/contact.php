<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../login.php");
		exit;
	}
?>
<html>
<head>
	<title>Contact | eZ Channeling</title>
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

	<header>
		<img src="../Images/head.jpg" width="100%" height="100%">
 
	</header>
   

		
		<div class="sidebar">
			<ul>
				<li><a href="home.php">&nbsp;Home</a></li>
				<li><a href="makeapp.php">&nbsp;Make Appointment</a></li>
				<li><a href="myapp.php">&nbsp;My Appointments</a></li>
				<!--<li><a href="updateapp.php">&nbsp;Update My Appointments</a></li>
				<li><a href="canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
				<li><a href="about.php">&nbsp;About</a></li>
				<li class="active"><a href="contact.php">&nbsp;Contact</a></li>
				<li><a href="../PHP/logout.php">&nbsp;Logout</a></li>
			</ul>
		</div>
		
		<div class="main">
			<div class="content">
				<h1>Contact</h1>
				<br>
				<form>
					<table>
						<tr>
							<td><span class="require">*</span> Name</td>
							<td><input type="text" placeholder="Name"></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" placeholder="a@a.com"></td>
						</tr>
						<tr>
							<td><span class="require">*</span> Message</td>
							<td><textarea rows="6"></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Send"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>

</body>
</html>