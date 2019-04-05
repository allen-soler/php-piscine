<?php
include 'auth.php';

session_start();
if (isset($_GET))
{
	if (!isset($_GET['login']) && !isset($_GET['passwd']))
		echo "ERROR\n";
	else {
		if (auth($_GET['login'], $_GET['passwd']) == 1) {
			$_SESSION['loggued_on_user'] = $_GET['login'];
			echo "OK\n";
			file_put_contents("whoami.php", $_SESSION['loggued_on_user'] . "\n");
		}
		else {
			$_SESSION['loggued_on_user'] = "";
			file_put_contents("whoami.php", "ERROR\n");
			echo "ERROR\n";
		}	
	}
}
?>
