<!--This file executes log out action-->
<?php
session_start();
// Destroying All Sessions
if(session_destroy()) {
    echo 'You have cleaned session';
    echo '<br>';
    echo 'Redirecting . . .';
    header('Refresh: 1; URL = homepage.html');
}
?>
