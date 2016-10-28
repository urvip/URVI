<?php
if(isset($_POST['Submit']) && empty($_POST['citation'])) 
{
	echo "<p align='center'><font size='1' color='red'>Please enter given citation number which consists of 5 digits. Thank you!</font></p>";
}else
 if(isset($_POST['Submit']) && !empty($_POST['citation'])) {
	if (strlen($_POST['citation'])<5 || strlen($_POST['citation'])>5)
		echo "<p align='center'><font size='1' color='red'>Please enter given citation number which consists of 5 digits. Thank you!</font></p>";
	else
	{
		if(isset($_POST['pay'])) {
			header('location:payment.php');
			exit;
		}

		include("sqlconnect.php");

		$id=$_POST['citation'];

		$when=''; $where='';
		
		$res = mysql_query("SELECT citationID, firstname, lastname, citationType, amount, paid FROM citation WHERE citationID='$id'", $dblink);
		if (mysql_num_rows($res)<=0)
			echo "<p align='center'><font size='1' color='red'>Please enter given citation number which consists of 5 digits. Thank you!</font></p>";
		else if (mysql_num_rows($res = mysql_query("SELECT citationID, firstname, lastname, citationType, amount, paid FROM citation WHERE citationID='$id' AND paid='NO'", $dblink))>0) {

			$when=mysql_fetch_row(mysql_query("SELECT incidentTime FROM citation WHERE citationID='$id'", $dblink));

			$where=mysql_fetch_row(mysql_query("SELECT incidentPlace FROM citation WHERE citationID='$id'", $dblink));

			while ($row = mysql_fetch_row($res)) {

				echo "<br><br>

				<div class='note'>

					<style>.note {font-family:sans-serif; margin:0 auto; padding-left:10%; width:90%;}</style>

					<p>Your citation was recorded on $when[0] at Atmiya College's $where[0] block</p><br>

					<p><font size='2'><i>Details</i></font></p>

				</div>";

				echo "<table cellspacing=0 class='tblCitation'>

					<thead>

						<tr align='center'>

							<th>CitationID</th>

							<th>Firstname</th>

							<th>Lastname</th>

							<th>Violation Type</th>

							<th>Amount due</th>

							<th></th>

						</tr>

					</thead>

					<tbody>

						<tr align='center'>

							<td><strong>$row[0]</strong></td>

							<td>$row[1]</td>

							<td>$row[2]</td>

							<td>$row[3]</td>

							<td>$row[4]</td>

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

		else if ($res = mysql_query("SELECT citationID, firstname, lastname, citationType, amount, paid FROM citation WHERE citationID='$id' AND paid='YES'", $dblink)) {

			echo "<p align='center'><font size='1' color='red'>You have paid for this citation. Thank you!</font></p>";

		}
		else
			echo "<p align='center'><font size='1' color='red'>It is not in database. Thank you!</font></p>";
		mysql_close($dblink);
	}
}
?>