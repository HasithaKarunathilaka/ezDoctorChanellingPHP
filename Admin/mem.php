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
				<li><a href="doc.php">&nbsp;Doctors</a></li>
				<li><a href="adddoc.php">&nbsp;Add Doctor</a></li>
				<li class="active"><a href="mem.php">&nbsp;Members</a></li>
                <li><a href="app.php">&nbsp;Appointments</a></li>
                <li><a href="upapp.php">&nbsp;Update Appointments</a></li>
				<li><a href="../PHP/admin_logout.php">&nbsp;Logout</a></li>
			</ul>
		</div>

		<table class="tableRes">
        <thead style="background-color: rgba(14, 79, 94, 0.1);">
            <td colspan="6" style="padding: 20px; border: 0px solid #ddd;"><h1>Admin | Members</h1></td>
        </thead>
        <tr style="color: #fff; background-color: rgba(14, 79, 94, 0.7);">
            <th>#</th>
            <th>NAME</th>
            <th>NIC</th>
            <th>Moblie</th>
            <th>Email</th>
            <th>Action</th>
		</tr>
		<tbody>
		<tr>
            <td>99</td>
		    <td>Dr. Sampath Ariyawansha</td>
		    <td>rdgredhfdhfhnj</td>
		    <td>gerdhrthbh</td>
		    <td>ggg rhfn nfh hthb</td>
            <td><center><input type="button" style="background-color:#ff0000" value="DELETE" ></center></td>
		</tr>
		<tr>
            <td>99</td>
		    <td>Dr. Sampath Ariyawansha</td>
		    <td>rdgredhfdhfhnj</td>
		    <td>gerdhrthbh</td>
		    <td>ggg rhfn nfh hthb</td>
            <td><center><input type="button" style="background-color:#ff0000" value="DELETE" ></center></td>
		</tr>
		<tr>
            <td>99</td>
		    <td>Dr. Sampath Ariyawansha</td>
		    <td>rdgredhfdhfhnj</td>
		    <td>gerdhrthbh</td>
            <td>rdgredh</td>
            <td><center><input type="button" style="background-color:#ff0000" value="DELETE" ></center></td>
		</tr>
		</tbody>
    </table>

</body>
</html>