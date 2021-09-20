<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../login.php");
		exit;
	}
?>
<html>
<head>
	<title>Channel | eZ Channeling</title>
	<link rel="stylesheet" href="../CSS/style.css">

	<script language="javascript">
		function validTest(){
			if(document.makeapp.dname.value==''){
				alert("Please Enter the Doctor Name");
				return false;
			}else{
				return confirm;
			}
		}
	</script>
	
</head>
<body>

	<header>
  		<img src="../Images/head.jpg" height="100%" width="100%">
 
	</header>

	<div class="sidebar">
		<ul>
			<li><a href="home.php">&nbsp;Home</a></li>
			<li class="active"><a href="makeapp.php">&nbsp;Make Appointment</a></li>
			<li><a href="myapp.php">&nbsp;My Appointments</a></li>
			<!--<li><a href="updateapp.php">&nbsp;Update My Appointments</a></li>
			<li><a href="canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
			<li><a href="about.php">&nbsp;About</a></li>
			<li><a href="contact.php">&nbsp;Contact</a></li>
			<li><a href="../PHP/logout.php">&nbsp;Logout</a></li>
		</ul>
	</div>

	<div class="boxSearch">

		<h1>Channel your Doctor</h1>
		<form name="makeapp" action="Sub/docres.php" onsubmit="return validTest()" method="POST">
			<p>Doctor Name</p>
			<input type="text" name="dname" placeholder="Ex:- Saman Perera">
			<p>Specialization</p>
			<select name="specialization">
				<option selected>Any</option>
				<option>Genaral</option>
				<option>Family Medicine</option>
				<option>Internal Medicine</option>
				<option>Emergency Medicine</option>
				<option>Allergy and Immunology</option>
				<option>Psychiatry</option>
				<option>Surgery</option>
				<option>Cardiology</option>
				<option>Dermatology</option>
				<option>Pathology</option>
				<option>Pediatrics</option>
				<option>Urology</option>
			</select>
			<br>
			<input type="submit" name="submit" value="Search">
		</form>
		
	</div>

</body>
</html>