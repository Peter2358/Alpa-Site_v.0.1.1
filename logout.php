<?php
// start session
session_start();

// destroy the session
if (session_destroy())
{
	// redirect to the login page
	header("location: login.php");
	exit;
}
?>
