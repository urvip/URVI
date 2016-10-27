<!DOCTYPE html>
<html>
	<head>
		<title>Atmiya College Parking Homepage</title>
		<link rel="stylesheet" type="text/css" href="styles/css.css" />
		<link rel="stylesheet" type="text/css" href="styles/tblCitation.css"/>
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
						<li><a href="paybooking.php"><font color="white">Booking</font></a></li>
						<li><a href="payfines.php"><font color="white">Fines</font></a></li>
					</ul>
				</li>
				<li><a href="report.html"><font color="white">Report</font></a></li>
				<li><a href="Tos.html"><font color="white">ToS</font></a></li>
				<li><a href="contact.html"><font color="white">Contact Us</font></a></li>
			</ul>
		</nav>
        <div id="wrap">
			<h2 align="center">Search your booking by using given booking number</h2><br>
            <!-- filling citation ID -->
			<form align="center" method=POST action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Booking ID <input type="text" name="booking">
                <input type="submit" name="Submit">
                <input type="reset" value="Clear Text" name="clear">
            </form>
            <?php include("paybooking_exe.php");?>
        </div>
		<!-- below is the footer -->
		<div id="cover">
			<div id="base">
				<table class="qlink" width=50%>
					<tr align="left">
						<th>Quick Links</th>
						<th>Supports</th>
						<th>Staff</th>
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
							<li><a href="auth.php"><font color="white">OHS</font></a></li>
							<li><a href="report.html"><font color="white">Report</font></a></li>
						</ul><td>
					</tr>
				</table>
				<div class="cpright">
					<p>&copy; 2016 Copyright. All Rights Reserved</p>
				</div>
			</div>
		</div>
    </body>
</html>
