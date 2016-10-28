<!--This "login.php" consists of login script in which PHP session is intialized.-->
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['btnSubmit'])) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
    $error = "Username or Password is invalid";
  }
  else {
    // Define $username and $password
    $username=$_POST['username'];
    $password=$_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
    $connection = mysql_connect("sql311.byethost13.com", "b13_18981129", "ngochieu123");
    // To protect MySQL injection for Security purpose
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    // Selecting Database
    $db = mysql_select_db("b13_18981129_root299", $connection);
    // SQL query to fetch information of registerd users and finds user match.
    $query = mysql_query("SELECT * FROM auth WHERE password='$password' AND username='$username'", $connection);
    $rows = mysql_num_rows($query);
    if ($rows == 1) {
      $_SESSION['login_user']=$username; // Initializing session
      header("location: OHS.php"); // Redirecting to OHS.php
    } else {$error = "Username or Password is invalid";}

    mysql_close($connection); // Closing Connection
  }
}
?>
