<?php
if(isset($_POST['Submit']) && empty($_POST['booking'])) 
{
    echo "<p align='center'><font size='1' color='red'>Please enter given booking number which consists of 7 digits. Thank you!</font></p>";
}
else if(isset($_POST['Submit']) && !empty($_POST['booking'])) {
        if (strlen($_POST['booking'])<7 || strlen($_POST['booking'])>7)
    	    echo "<p align='center'><font size='1' color='red'>Please enter given citation number which consists of 7 digits. Thank you!</font></p>";
	    else {
            if(isset($_POST['pay'])) {echo "Redirecting..."; header('location:payment.php'); exit;}
            include("sqlconnect.php");
		    $id=$_POST['booking'];

		    if ($res = mysql_query("SELECT bookingID, firstname, lastname, duration 
                FROM booking WHERE bookingID='$id'", $dblink)) {

			    while ($row = mysql_fetch_row($res)) {
						echo "<br><br>";
						echo "<table cellspacing=0 class='tblCitation'>
						 <thead>
							 <tr align='center'>
								 <th>BookingID</th>
								 <th>Firstname</th>
								 <th>Lastname</th>
                                 <th>Duration</th>
								 <th></th>
							 </tr>
						 </thead>
						 <tbody>
							 <tr align='center'>
								 <td><strong>$row[0]</strong></td>
								 <td>$row[1]</td>
								 <td>$row[2]</td>
								 <td>$row[3]</td>
								 <td>
								 	<form align='center' method=POST action='payment.php'>
								 		<input type='submit' value='Pay Now!' name='pay'>
								 	</form>
								 </td>
							 </tr>
						 </tbody>
					 </table>";
					}
				}
				mysql_close($dblink);
			}
}
?>