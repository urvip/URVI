<?php include('session.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title>Atmiya College Parking Homepage</title>
		<link rel="stylesheet" type="text/css" href="styles/auth_css.css" />
        <link rel="stylesheet" type="text/css" href="styles/tblOHS.css" />
	</head>
	<body>
		<div id="header">
			<div class="logo"><a href="homepage.html">
				<img src="images/logo2.png" width=60px height=60px/>Atmiya<span>College</span>
			</a></div>
		</div>

		<nav class="navClass">
			<ul>
				<li><a href="OHS.php"><font color="white">Home</font></a></li>
				<li><a href="bookingDisplay.php"><font color="white">Booking Requests</font></a></li>
				<li align="right"><a href="logout.php"><font color="white">Log Out</font></a></li>
			</ul>
		</nav>
        <div id="wrap">
		    <h1 align="center">Booking Report</h1><br>
            <section>
            <div class='tbl-header'>
                <table class='tblHead' border=0 cellspacing=0 cellpadding=0>
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>Booking Type</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Vehicle Registration</th>
                        <th>Duration</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Approval</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <script src="javascripts/scrollbar.js"></script>
                <table class="tblTail" cellpadding="0" cellspacing="0" border="0">
                    <tbody><?php include("display_booking_exe.php");?></tbody>
                </table>
            </div>
            </section>
                <style>.btnSave {background-color: #43A047; color: #fff; font-size: 12px; padding: 12px 28px; 
                                border-radius: 4px; text-align:right; margin-left:85%; border:0; }</style>
            <input type='submit' name='save' class='btnSave' value='Save'>
            </form>
            <?php
            if ($_POST['approval'] && !empty($_POST['approval']) && isset($_POST['save']) ) {
                echo "".$_POST['approval']."";
            }
            ?>
        </div>
		<!-- below is the footer -->
		<div id="base">
			<table class="qlink">
				<tr><td><font color="white">For technical supports, please call <u>0412 345 678</u>. Hotline 24/7.
					Alternatively, email to <u>help@parking.atmiya.edu.au</u></font></td></tr>
		</div>
    </body>
</html>
