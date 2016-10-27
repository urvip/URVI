<!DOCTYPE html>
<html>
	<head>
		<title>Atmiya College Parking Homepage</title>
		<link rel="stylesheet" type="text/css" href="styles/css.css" />
        <link rel="stylesheet" type="text/css" href="styles/tblReport.css" />
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
            <h2 align="center">Report a parking incident</h2>
            <hr/><br>
            <div class="container">
                <form id="contact" method=POST>
                <fieldset>
                    <input placeholder="Officer ID" type="text" tabindex="1" name="officerID" required autofocus>
                </fieldset>
                <fieldset>
    		        <input placeholder="Offender's First Name" type="text" tabindex="2" name="firstname" required autofocus>
		        </fieldset>
                <fieldset>
                    <input placeholder="Offender's Last Name" type="text" tabindex="3" name="lastname" required>
                </fieldset>
                <fieldset>
                    <input placeholder="E-mail" type="email" tabindex="4" name="email" required>
                </fieldset>
                <fieldset>
                    <input placeholder="Vehicle Registration" type="text" tabindex="5" name="VRinfo" required>
                </fieldset>
                <fieldset>
                    Vehicle Type:   <input type="radio" name="vtype" value="2wheel" tabindex="6" required> 2 Wheel 
                                    <input type="radio" name="vtype" value="4wheel" tabindex="7" required> 4 Wheel
                </fieldset>
                <fieldset>
                    Date and Time:<input type="datetime-local" tabindex="8" name="datetime" required/>
                </fieldset>
                <fieldset>
                    Location: <select tabindex="9" name="where" required/>
                    <option> </option><option>A</option><option>B</option><option>C</option><option>D</option><option>E</option><option>F</option><option>G</option>
                    <option>H</option><option>I</option><option>J</option><option>K</option><option>L</option><option>M</option><option>N</option><option>O</option>
                    <option>P</option><option>Q</option><option>R</option><option>S</option><option>T</option><option>U</option><option>V</option><option>W</option>
                    <option>X</option><option>Y</option><option>Z</option>
                    </select> block
                </fieldset>
		        <fieldset>
			        <textarea placeholder="Description" type="text" tabindex="10" name="description" required></textarea>
		        </fieldset>
		        <fieldset>
			        Proof: <input type="image" tabindex="11" name="proof" required>
		        </fieldset>
                <fieldset>
                    <button name="btnSubmit_parking" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
                </form>
			<?php include("report_exe.php");?>
            </div>
        </div>

		<!-- below is the footer -->
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
    </body>
</html>
