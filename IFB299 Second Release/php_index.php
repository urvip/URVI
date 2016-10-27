<?php
//This file starts PHP session. If the session has already started, go to OHS.php
include('login.php');
if(isset($_SESSION['login_user'])){
  header("url=OHS.php");
}
?>
