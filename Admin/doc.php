<?php
	session_start();
	/*if(!isset($_SESSION["aid"]))  {
		header("Location: ./admin_log.php");
		exit;
	}*/
?>

<html>
<head>
	<title>Admin | Doctors</title>
	<link rel="stylesheet" href="../CSS/style.css">	
</head>
<body>

<header>
  <img src="../Images/head.jpg" width="100%" height="100%">
 
</header>
   

		
		<div class="sidebar">
			<ul>
				<li><a href="admin_home.php">&nbsp;Home</a></li>
				<li class="active"><a href="doc.php">&nbsp;Doctors</a></li>
				<li><a href="adddoc.php">&nbsp;Add Doctor</a></li>
				<li><a href="mem.php">&nbsp;Members</a></li>
                <li><a href="app.php">&nbsp;Appointments</a></li>
                <li><a href="upapp.php">&nbsp;Update Appointments</a></li>
				<li><a href="../PHP/admin_logout.php">&nbsp;Logout</a></li>
			</ul>
		</div>

		<table class="tableRes">
        <thead style="background-color: rgba(14, 79, 94, 0.1);">
            <td colspan="8" style="padding: 20px; border: 0px solid #ddd;"><h1>Admin | Doctors</h1></td>
        </thead>
        <tr style="color: #fff; background-color: rgba(14, 79, 94, 0.7);">
            <th>DOCTOR NAME</th>
            <th>SPECIALIZATION</th>
            <th>Fee</th>
            <th>Email</th>
            <th>Telephone</th>
			<th>DATE</th>
            <th>TIME</th>
            <th>Action</th>
		</tr>
		<tbody>
		<tr>
		    <td>Dr. Sampath Ariyawansha</td>
		    <td>rdgredhfdhfhnj</td>
		    <td>gerdhrthbh</td>
		    <td>ggg rhfn nfh hthb</td>
            <td>rdgredh</td>
            <td>rdgredh</td>
            <td>rdgredh</td>
            <td><center><input type="button" value="UPDATE"> <input type="button" style="background-color:#ff0000; margin-left: 0px;" value="DELETE" ></center></td>
		</tr>
		<?php
    		include("../dbcon/dbcon.php");

			$sql = "SELECT * FROM doctor_details";
			$result = mysqli_query($conn,$sql);

    		if(mysqli_num_rows($result) > 0){

        		while($row=mysqli_fetch_assoc($result)){
					echo"<form method='post' action='updoc.php'>";
            		echo"<tr>";
					echo"<td><input name='dname' type='text' readonly value='Dr. $row[dname]'></td>
						<td><input name='spe' type='text' readonly value='$row[specialization]'></td>
						<td><input type='text' name='fee' readonly value='$row[fee]'></td>
						<td><input type='text' name='demail' readonly value='$row[email]'></td>
						<td><input type='text' name='dtel' readonly value='$row[tel]'></td>
						<td><input type='text' name='adate' readonly value='$row[adate]'></td>
						<td><input type='text' name='atime' readonly value='$row[atime]'></td>
						<td><center><input type='button' value='UPDATE'> <input type='button' style='background-color:#ff0000; margin-left: 0px;' value='DELETE' ></center></td>";
					echo"</tr>";
					echo"</form>";
        			}
    		}else{
				echo"<tr>";
				echo"<center><td colspan = '8'><h1>NO Dctors Found</h1></td></center>";
				echo"</tr>";
    		}
		?>
		</tbody>
    </table>

</body>
</html>