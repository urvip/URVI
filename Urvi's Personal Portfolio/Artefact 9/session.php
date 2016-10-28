<!--
This page fetches complete information of the logged in user.
It assesses how users access to a specific webpage
  // if (isset($login_session) = 1) {
        users are allowed to access
      }
      else {go back to auth.php}
 -->
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("sql311.byethost13.com", "b13_18981129", "ngochieu123");
// Selecting Database
$db = mysql_select_db("b13_18981129_root299", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("SELECT username FROM auth WHERE username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){ //if not logged in by username and password
mysql_close($connection); // Closing Connection
header('Location: auth.php'); // Redirecting to auth.php
}
?>
