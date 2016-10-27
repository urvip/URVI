<?php include ('session.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title>Atmiya College Parking Homepage</title>
		<link rel="stylesheet" type="text/css" href="styles/auth_css.css" />
	</head>
	<body>
		<div id="header">
			<div class="logo"><a href="homepage.html">
				<img src="images/logo2.png" width=60px height=60px style=border-radius:10px/>Atmiya<span>College</span>
			</a></div>
		</div>
		<nav class="navClass">
			<ul>
				<li><a href="OHS.php"><font color="white">Hi Admin!</font></a></li>
			</ul>
		</nav>
        <div id="wrap">
		    <h2 align="center">Welcome to Management Page</h2><br>
            <table id="tbGeneral" style=padding-left:15%><tr>
                <td align="center"><a href="rptDisplay.php">
					<img id="pic1" src="images/report.png" width='150px+10%' height='150px+10%'/>
					<p><font color="#0072BB">Reports</font></p>
				</a></td>
                <td width=25%></td>
                <td align="center"><a href="bookingDisplay.php">
					<img id="pic2" src="images/parking.png" width='150px+10%' height='150px+10%'/>
					<p><font color="#0072BB">Booking requests</font></p>
				</a></td>
                <td width=25%></td>
                <td align="center"><a href="logout.php">
                    <img id="pic3" src="images/exit.png" width='150px+10%' height='150px+10%'/>
                    <p><font color="#0072BB">Log Out</font></p>
                </a></td>   
            </tr></table>
        </div>

		<!-- below is the footer -->
		<div id="base">
			<table class="qlink">
				<tr><td><font color="white">For technical supports, please call <u>0412 345 678</u>. Hotline 24/7.
					Alternatively, email to <u>help@parking.atmiya.edu.au</u></font></td></tr>
		</div>
    </body>
</html>
