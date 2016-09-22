<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "root299";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$citation = rand(10000, 99999);
$officer = $_POST['officerID'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$time= $_POST['dateTime'];
$where = $_POST['happenWhere'];
$des = $_POST['description'];

$sql= "INSERT INTO citation (citationID, citationType, officerID,firstname,lastname, amount, incidentTime,
  incidentPlace, description)
VALUES ('$citation','smoking','$officer','$fn','$ln','250','$time','$where','$des');";

if (isset($_POST['btnSubmit'], $sql)){
  echo "Your citation ID is $citation";
}

if (!mysqli_query($conn, $sql)) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  mysqli_close($conn);

?>
