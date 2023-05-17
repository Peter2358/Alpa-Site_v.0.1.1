<?php
// start the session
session_start();
// if the user is already logged in, then redirect user to landing page
if(isset($_SESSION['user_name']) && ($_SESSION['user_name']) === true)
{
	header('location: landing.php');
    exit;
}
?>
