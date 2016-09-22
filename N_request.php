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
$booking=rand(1000000, 9999999);
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$email=$_POST['eaddress'];
$add=$_POST['address'];
$option=$_POST['pickup'];
$vt=$_POST['vtype'];
$vr=$_POST['VRinfo'];
$drt=$_POST['duration'];


$sql = "INSERT INTO booking (bookingID, bookingType, firstname, lastname, vehicleRego, address, duration, startDate, endDate, email, vehicleType, deliveryOption)
VALUES ('$booking', 'normal', '$fn', '$ln', '$vr', '$add', '$drt', '2016-Sept-3 17:00:00', '2016-Sept-10 17:00:00', '$email', '$vt', '$option')";

if (mysqli_query($conn, $sql)) {
    echo "Your booking number is $booking";
    echo "<a href='normalRequest.html'>Click here</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
