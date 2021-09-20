<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../login.php");
		exit;
	}
?>
<html>
<head>
	<title>My Appointments | eZ Channeling</title>
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
			<li class="active"><a href="myapp.php">&nbsp;My Appointments</a></li>
			<!--<li><a href="updateapp.php">&nbsp;Update My Appointments</a></li>
			<li><a href="canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
			<li><a href="about.php">&nbsp;About</a></li>
			<li><a href="contact.php">&nbsp;Contact</a></li>
			<li><a href="../PHP/logout.php">&nbsp;Logout</a></li>
		</ul>
	</div>
	<table class="tablemy">
        <thead style="background-color: rgba(14, 79, 94, 0.1);">
			<td colspan="2" style="padding: 20px; border: 0px solid #ddd; background-color: #ecfffe71;"><h1>Patient Details</h1></td>
			<td colspan="6" style="padding: 20px; border: 0px solid #ddd; background-color: #00ffee70;border-left-width: 4px; border-left-color: #24484d;"><h1>Appointment Details</h1></td>
        </thead>
        <tr style="color: #fff; background-color: rgba(14, 79, 94, 0.7);">
			<th>NAME</th>
			<th>TELEPHONE</th>
			<th id="tblbo">NAME</th>
			<th>SPECIALIZATION</th>
			<th>DATE</th>
			<th>TIME</th>
			<th>ACTIVE<br>AS</th>
			<th>FEE</th>
			<th>NOTE</th>
			<th>ACTION</th>
		</tr>
		<tbody>
			
		<?php
    			include("../dbcon/dbcon.php");

				$uemail = $_SESSION['uemail'];
        		$sql = "SELECT doctor_details.dname,doctor_details.specialization,doctor_details.fee,doctor_details.adate,doctor_details.atime,appointments.demail,appointments.title,appointments.ptn_name,appointments.ptn_tel,appointments.app_no,appointments.note  FROM doctor_details JOIN appointments ON doctor_details.email = appointments.demail WHERE uemail = '$uemail'";

				$result = mysqli_query($conn,$sql);

    			if(mysqli_num_rows($result) > 0){

        			while($row=mysqli_fetch_assoc($result)){
						echo"<form method='post' action='Sub/upptn.php'>";
						$demail = $row['demail'];
						$appno = $row['app_no'];
            			echo"<tr>";
						echo"<td><input name='dname' type='text' readonly value='$row[title] $row[ptn_name]'></td>
							<td><input name='spe' type='text' name='ptn_tele' readonly value='$row[ptn_tel]'></td>
							<td id='tblbo'><input type='text' readonly value='Dr. $row[dname]'></td>
							<td><input type='text' readonly value='$row[specialization]'></td>
							<td><input type='text' readonly value='$row[adate]'></td>
							<td><input type='text' readonly value='$row[atime]'></td>
							<td><input type='text' name='appno' readonly value='$row[app_no]'></td>
							<td><input type='text' readonly value='Rs. $row[fee].00'></td>
							<td><input type='text' readonly value='$row[note]'></td>
							<td><input type='submit' value='UPDATE'><a href='../PHP/delapp.php?demail=$demail&appno=$appno'><center><input type='button' style='background-color:#ff0000; margin-left: 10px;' value='DELETE'></center></a></td>";
						echo"</tr>";
						echo"<input type='hidden' name='demail' value='$row[demail]'>";
						echo"<input type='hidden' name='title' value='$row[title]'>";
						echo"<input type='hidden' name='ptn_name' value='$row[ptn_name]'>";
						echo"<input type='hidden' name='ptn_tel' value='$row[ptn_tel]'>";
						echo"</form>";
        			}
    			}else{
					echo"<tr>";
					echo"<center><td colspan = '10'><h1>No Appoinments Found</h1></td></center>";
					echo"</tr>";
    			}
			?>
		</tbody>
    </table>
	

</body>
</html>