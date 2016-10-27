<?php
$servername = "sql311.byethost13.com";
$username = "b13_18981129";
$password = "ngochieu123";
$dbname = "b13_18981129_root299";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$booking=rand(1000000, 9999999);
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$email=$_POST['eaddress'];
$add=$_POST['address'];
$option=$_POST['pickup'];
$vt=$_POST['vtype'];
$vr=$_POST['VRinfo'];
$drt=$_POST['duration'];
$start=$_POST['startDate'];
$end=$_POST['endDate'];


$sql = "INSERT INTO booking (bookingID, bookingType, firstname, lastname, vehicleRego,
  address, duration, startDate, endDate, email, vehicleType, deliveryOption)
VALUES ('$booking', 'premium', '$fn', '$ln', '$vr', '$add', '$drt', '$start', '$end', '$email', '$vt', '$option')";

if (mysqli_query($conn, $sql)) {
    echo "You have successfully booked a request <br>";
    echo "Your booking number is $booking<br>";
    header ("Refresh: 3, url='premiumRequest.html'");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
