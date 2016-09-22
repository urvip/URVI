<!DOCTYPE html>
<html>
	<head>
		<title>Atmiya College Parking Homepage</title>
		<link rel="stylesheet" type="text/css" href="styles/css.css" />
	</head>


	<body>
		<div id="header">
			<div class="logo"><a href="homepage.html">
				<img src="images/logo.png" width=60px height=60px/>Atmiya<span>College</span>
			</a></div>
		</div>

		<nav class="navClass">
			<ul>
				<li><a href="homepage.html"><font color="white">Home</font></a></li>
				<li><a href="normalRequest.html"><font color="white">Normal Request</font></a></li>
				<li><a href="premiumRequest.html"><font color="white">Premium Request</font></a></li>
				<li><font color="white">Payment</font>
					<ul class="sub-menu">
						<li><a href="Tos.html"><font color="white">Booking</font></a></li>
						<li><a href="payfines.html"><font color="white">Fines</font></a></li>
					</ul>
				</li>
				<li><a href="report.html"><font color="white">Report</font></a></li>
				<li><a href="Tos.html"><font color="white">ToS</font></a></li>
				<li><a href="contact.html"><font color="white">Contact Us</font></a></li>
			</ul>
		</nav>
    <div id="wrap" style=height:650px>
      <h2 align="center">Report an incident</h2>
      <hr/><br>
      <form name="rptParking" align="center" method=POST>
        <br>Officer ID: <input type="text" name="officerID">
        <br>Violator first name: <input type="text" name="firstname">
        <br>Violator last name: <input type="text" name="lastname">
        <br>Vehicle Registration: <input type="text" name="VRinfo">
        <br>Date and Time: <input type="datetime-local" name="dateTime">
        <br>Description: <br><textarea name="description" cols=40 rows=1></textarea>
        <br>
        <input type="submit" value="Submit" name="btnSubmit">
        <input type="reset" value="Clear Form" name="btnClear">

      </form>
			<?php
			if(isset($_POST['btnSubmit'])) {
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "root299";

				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if (!$conn) {
				    die("Connection failed: " . mysqli_connect_error());
				}

				$citation = rand(10000, 99999);
				$officer = $_POST['officerID'];
				$fn = $_POST['firstname'];
				$ln = $_POST['lastname'];
				$vr = $_POST['VRinfo'];
				$dtime = $_POST['dateTime'];
				$des = $_POST['description'];

				$sql= "INSERT INTO citation (citationID, citationType, officerID,firstname,lastname,
					vehicleRego, amount, incidentTime, description)
				VALUES ('$citation','other','$officer','$fn','$ln','$vr', '179', '$dtime','$des');";

				// if (isset($_POST['btnSubmit'], $sql)){
				//   echo "Your citation ID is $citation";
				// }

				if (!mysqli_query($conn, $sql)) {
				    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

				  mysqli_close($conn);
			}

			?>
    </div>

		<!-- below is the footer -->
		<div id="base">
			<table class="qlink" width=50%>
				<tr align="left">
					<th>Quick Links</th>
					<th>Supports</th>
					<th>Staff Only</th>
				</tr>
				<tr>
					<td><ul class="sub-link1">
						<li><a href="homepage.html"><font color="white">Home</font></a></li>
						<li><a href="normalRequest.html"><font color="white">Normal</font></a></li>
						<li><a href="premiumRequest.html"><font color="white">Premium</font></a></li>
					</ul></td>
					<td><ul class="sub-link2">
						<li><a href="Tos.html"><font color="white">ToS</font></a></li>
						<li><a href="contact.html"><font color="white">Contact Us</font></a></li>
						<li>About Us</li>
					</ul></td>
					<td><ul class="sub-link3">
						<li><a href="auth.php"><font color="white">OHS only</font></a></li>
						<li><a href="report.html"><font color="white">Report</font></a></li>
					</ul><td>
				</tr>
			</table>
			<div class="cpright">
				<p>&copy; 2016 Copyright. All Rights Reserved</p>
			</div>
		</div>
  </body>
</html>
