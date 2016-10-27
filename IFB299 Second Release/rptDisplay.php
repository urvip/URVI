<?php include('session.php'); ?>
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
				<li><a href="rptDisplay.php"><font color="white">Reports</font></a></li>
			</ul>
		</nav>
        <div id="wrap">
		    <h1 align="center">Citation Report</h1><br>
            <section>
            <div class='tbl-header'>
                <table class='tblHead' border=0 cellspacing=0 cellpadding=0>
                <thead>
                    <tr>
                        <th>Citation ID</th>
                        <th>Citation Type</th>
                        <th>Officer ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date&Time</th>
                        <th>Paid Or Not</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <script src="javascripts/scrollbar.js"></script>
                <table class="tblTail" cellpadding="0" cellspacing="0" border="0">
                    </tbody><?php include("display_report_exe.php");?></tbody>
                </table>
            </div>
            </section>
        </div>

		<!-- below is the footer -->
		<div id="base">
			<table class="qlink">
				<tr><td><font color="white">For technical supports, please call <u>0412 345 678</u>. Hotline 24/7.
					Alternatively, email to <u>help@parking.atmiya.edu.au</u></font></td></tr>
		</div>
    </body>
</html>
