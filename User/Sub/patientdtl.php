<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../../login.php");
		exit;
	}

	$demail = $_POST['demail']


?>
<html>
<head>
	<title>Channel | eZ Channeling</title>
	<link rel="stylesheet" href="../../CSS/style.css">

	<script language="javascript">
		function datval(){
			if(document.ptndata.ptn_name.value==""){
				alert("Please Enter the Patient Name.");
				return false;
			}
			if(document.ptndata.ptn_tel.value==""){
				alert("Please Enter the Patient Telephone Number.");
				return false;
			}else{
				return confirm;
			}
		}

	</script>

</head>
<body>

	<header>
  		<img src="../../Images/head.jpg" height="100%" width="100%">
 
	</header>

	<div class="sidebar">
		<ul>
			<li><a href="../home.php">&nbsp;Home</a></li>
			<li class="active"><a href="../makeapp.php">&nbsp;Make Appointment</a></li>
			<li><a href="../myapp.php">&nbsp;My Appointments</a></li>
			<!--<li><a href="../updateapp.php">&nbsp;Update My Appointments</a></li>
			<li><a href="../canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
			<li><a href="../about.php">&nbsp;About</a></li>
			<li><a href="../contact.php">&nbsp;Contact</a></li>
			<li><a href="../../PHP/logout.php"">&nbsp;Logout</a></li>
		</ul>
	</div>

	<div class="boxPatient">

		<h1>Patient Details</h1>
		<form name="ptndata" class="formPatient" action="../../PHP/bookdoc.php" method="POST" onsubmit="return datval()">
			<p>Title</p>
			<select name="title">
				<option selected>Mr. </option>
				<option>Mrs. </option>
				<option>Miss. </option>
				<option>Mast. </option>
				<option>Rev. </option>
				<option>Dr. </option>
				<option>Baby. </option>
            </select>
            <p>Patient Name</p>
            <input type="text" name="ptn_name" placeholder="Saman Perera">
            <p>Patient Telephone</p>
			<input type="text" name="ptn_tel" placeholder="07XXXXXXXX">
			<br>
			<center><input type="submit" value="Channel"></center>
			<?php
				echo"<input type='hidden' name='demail' value='$demail'>";
			?>
		</form>
		
	</div>

</body>
</html>