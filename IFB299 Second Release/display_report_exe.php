<?php
//To retrieve all report data from database using sql query and display it on a webpage
include("sqlconnect.php");
$res = mysql_query("SELECT citationID, citationType, officerID, firstname, lastname, incidentTime, paid
                    FROM citation", $dblink);
while ($row = mysql_fetch_row($res)) {
    echo "<tr>
        <td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>
        <td>$row[4]</td><td>$row[5]</td><td>$row[6]</td>
    </tr>";
}
mysql_close($dblink);
?>