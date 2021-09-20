<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../../login.php");
		exit;
	}
?>
<html>
<head>
	<title>Channel | eZ Channeling</title>
	<link rel="stylesheet" href="../../CSS/style.css">
</head>
<body>

	<header>
  		<img src="../../Images/head.jpg" width="100%" height="100%">
 
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
			<li><a href="../../PHP/logout.php">&nbsp;Logout</a></li>
		</ul>
    </div>
    <table class="tableRes">
        <thead style="background-color: rgba(14, 79, 94, 0.1);">
            <td colspan="6" style="padding: 20px; border: 0px solid #ddd;"><h1>Your Doctors</h1></td>
        </thead>
        <tr style="color: #fff; background-color: rgba(14, 79, 94, 0.7);">
            <th>DOCTOR NAME</th>
			<th>SPECIALIZATION</th>
			<th>DATE</th>
			<th>TIME</th>
            <th>ACTION</th>
		</tr>
		<tbody>
			<?php

   				$dname = $_POST['dname']."%";
    			$specialization = $_POST['specialization'];

    			include("../../dbcon/dbcon.php");

    			if($specialization == "Any"){
        			$sql = "SELECT * FROM doctor_details WHERE dname LIKE '$dname'";
    			}else{
        			$sql = "SELECT * FROM doctor_details WHERE dname LIKE '$dname' AND specialization = '$specialization'";
    			}

				$result = mysqli_query($conn,$sql);

    			if(mysqli_num_rows($result) > 0){

        			while($row=mysqli_fetch_assoc($result)){
						echo"<form method='post' action='patientdtl.php'>";
            			echo"<tr>";
						echo"<td><input name='dname' type='text' readonly value='Dr. $row[dname]'></td>
							<td><input name='spe' type='text' readonly value='$row[specialization]'></td>
							<td><input type='text' readonly value='$row[adate]'></td>
							<td><input type='text' readonly value='$row[atime]'></td>
							<td><input type='submit' value='CHANNEL'></td>";
						echo"</tr>";
						echo"<input type='hidden' name='demail' value='$row[email]'>";
						echo"</form>";
        			}
    			}else{
					echo"<tr>";
					echo"<center><td colspan = '6'><h1>NO Dctors Found</h1></td></center>";
					echo"</tr>";
    			}
			?>
		</tbody>
    </table>

</body>
</html>