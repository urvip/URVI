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
				<li><a href="Tos.html"><font color="white">Contact Us</font></a></li>
			</ul>
		</nav>
    <div id="wrap">
      <h2 align="center">Report a smoking incident</h2>
      <hr/><br>
      <form name="rptParking" align="center" method=POST>
        <br>Supervisor ID: <input type="text" name="officerID">
        <br>Violator first name: <input type="text" name="firstname">
        <br>Violator last name: <input type="text" name="lastname">
        <br>Department violator belongs to:<br><input type="text" name="happenWhere">
        <br>Date and Time: <input type="datetime-local" name="dateTime">
				<br>Description: <textarea name="description" cols=40 rows=1></textarea>
				<br>Proof: <input type="image" name="proof">
        <br>
        <input type="submit" value="Submit" name="btnSubmit">
        <input type="reset" value="Clear Form" name="btnReset">

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
				$time= $_POST['dateTime'];
				$where = $_POST['happenWhere'];
				$des = $_POST['description'];

				$sql= "INSERT INTO citation (citationID, citationType, officerID,firstname,lastname, amount, incidentTime,
				  incidentPlace, description)
				VALUES ('$citation','smoking','$officer','$fn','$ln','250','$time','$where','$des');";

				if (isset($_POST['btnSubmit'], $sql)){
				  echo "Your citation ID is $citation";
				}

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
						<li>Home</li>
						<li>Normal</li>
						<li>Premium</li>
						<li>Payment</li>
					</ul></td>
					<td><ul class="sub-link2">
						<li>ToS</li>
						<li>Contact Us</li>
						<li>About Us</li>
					</ul></td>
					<td><ul class="sub-link3">
						<li><a href="auth.php">OHS only</a></li>
						<li>Report</li>
					</ul><td>
				</tr>
			</table>
			<div class="cpright">
				<p>&copy; 2016 Copyright. All Rights Reserved</p>
			</div>
		</div>
  </body>
</html>
