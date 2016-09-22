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
			<h2 align="center">Reports</h2><br>
      <?php

        $dblink = mysql_connect("localhost", "root", "");

        mysql_select_db("root299", $dblink);

        $res = mysql_query("select citationID, citationType, officerID, firstname, lastname, description
         from citation", $dblink);

        echo "<table border=1 cellspacing=0 cellpadding=0>";
        echo "<tr>";
        echo "<th>CitationID</th><th>Citation Type</th><th>OfficerID</th><th>First Name</th><th>Last Name</th>
          <th>Description</th>";
        echo "</tr>";
        while ($row = mysql_fetch_row($res)) {
          echo "<tr>";
          echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td>";
          echo "</tr>";
        }
        echo "</table>";

        mysql_close($dblink);

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
