<!--To retrieve all booking data from database using sql query and display it on a web page. Also, admin is able to approve booking-->
<?php
include("mail_exe.php");
include("sqlconnect.php");
include("randomX.php");
if (isset($_POST['save'])){
	$res = mysql_query("SELECT bookingID FROM booking", $dblink);
	while ($row = mysql_fetch_row($res)){
		$x=$row[0];
		if (isset($_POST["$x"]))
		{	
			$bId=$_POST["$x"];
			if (strcmp($bId,"Y")==0){
				$res1 = mysql_query("SELECT firstname, lastname, email FROM booking where bookingID=$x", $dblink); //bookingID
                $res_ = generateRandomString(); //generate permitID
				$row1 = mysql_fetch_row($res1);
                $row2 = mysql_fetch_row($res);
				//email
				sendEmail($row1[2], "Your permit reference", 
                "Hi $row1[0], 
Your booking number of $row2[0] has been approved. 
Your permit number is number is $res_.Please log in http://atmiyaparking.byethost13.com/paybooking.php to pay your permit.

Thank you!
                
Kind regards,
Atmiya Parking Team");
				$res3 = mysql_query("INSERT INTO approval(bookingID, permitID) VALUES ('$row2[0]','$res_')", $dblink);
				
			}else if (strcmp($bId,"N")==0){
				
				//delete
				$res1 = mysql_query("DELETE FROM booking WHERE bookingID=$x", $dblink);
                header("Refresh:1,url='bookingDisplay.php'");
                $res = mysql_query("SELECT bookingID, bookingType, firstname, lastname, vehicleRego, duration, startDate, endDate, email FROM booking", $dblink);                        
    			$row = mysql_fetch_row($res);
                echo "<form name='submission' method='POST'>";
    			while ($row) {

					echo "<tr>

						<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>

						<td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>

						<td>

							<input type='radio' name='$row[0]' value='Y'>Yes

							<input type='radio' name='$row[0]' value='N'>No

						</td>

					</tr>";

				}
                sendEmail($row[8], "Your booking request for $row[1]", 
                "Hi $row[2], 
Your booking number of $row[0] has been declined.
Please refer to http://atmiyaparking.byethost13.com/homepage.html to make another booking request.

We are really sorry for any inconvenience!

                
Kind regards,
Atmiya Parking Team");
			}
		}
	}
	
	
}else
{
	$res = mysql_query("SELECT bookingID, bookingType, firstname, lastname, vehicleRego, duration, startDate, endDate FROM booking", $dblink);                        
	echo "<form name='submission' method='POST'>";
	while ($row = mysql_fetch_row($res)) {

		echo "<tr>

			<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>

			<td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td>

			<td>

				<input type='radio' name='$row[0]' value='Y'>Yes

				<input type='radio' name='$row[0]' value='N'>No
                
			</td>

		</tr>";

	}
}
mysql_close($dblink);

?>