<?php
include("sqlconnect.php");
$citation = rand(10000, 99999);
$officer = $_POST['officerID'];
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$vt= $_POST['vtype'];
$vr = $_POST['VRinfo'];
$time= $_POST['datetime'];
$mail = $_POST['email'];
$where = $_POST['where'];
$des = $_POST['description'];
$type="";
$amount="";
$p="NO";
if(isset($_POST['btnSubmit_parking'])) {
    $type="parking"; $amount="200";
    //input data using sql query
    $sql= mysql_query("INSERT INTO citation (citationID, citationType, officerID,firstname,lastname,
    				vehicleRego, vehicleType, amount, paid, incidentTime, incidentPlace, email, description)
				VALUES ('$citation ','parking','$officer','$fn','$ln','$vr','$vt', '$amount', '$p', '$time', '$where', '$mail', '$des')", $dblink);
}
if(isset($_POST['btnSubmit_smoking'])) {
    $type="smoking"; $amount="200";
    //input data using sql query
    $sql= mysql_query("INSERT INTO citation (citationID, citationType, officerID,firstname,lastname,
        			 amount, paid, incidentTime, incidentPlace, email, description)
				VALUES ('$citation ','$type','$officer','$fn','$ln', '$amount', '$p', '$time', '$where', '$mail', '$des')", $dblink);
}
if(isset($_POST['btnSubmit_other'])) {
    $type="other"; $amount="179";
    //input data using sql query
    $sql= mysql_query("INSERT INTO citation (citationID, citationType, officerID,firstname,lastname,
        			 amount, paid, incidentTime, incidentPlace, email, description)
				VALUES ('$citation ','$type','$officer','$fn','$ln', '$amount', '$p', '$time', '$where', '$mail', '$des')", $dblink);
}
mysqli_close($dblink);
?>