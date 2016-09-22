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
			<h2 align="center">Warning</h2><br>
      <p align="center">This page is strictly prohibited. Staff only!</p><br>
      <p align="center">Please enter 6-digit number for authentication below</p><br>
      <form name="auth" align="center" action="OHS.php">
        Password: <input type="text" name="password">
        <input type="submit" value="Submit" name="btnSubmit">
      </form>
      <?php
      $submit=$_POST['btnSubmit'];
      $pass=$_POST['password'];
      if(isset($submit)) {
        while (!$pass=="123456" || $pass="") {
          echo "Access denied";
        }
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
