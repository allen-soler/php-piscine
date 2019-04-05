<?php
session_start();

function val_user($file) {
	foreach ($file as $val)
	{
		if ($val['login'] === $_POST['login'])
			return (false);
	}
	return (true);
}
function check_user() {
	if (!file_exists("../private/passwd")) {
		$_SESSION['user'] = $_POST['login'];
		$_SESSION['passwd'] = $_POST['passwd'];
		$info = [];
		$info[] = array("login" => $_SESSION['user'], "passwd" => hash('whirlpool',$_SESSION['passwd']));
		$info = serialize($info);
		file_put_contents("../private/passwd", $info);
		return (1);
	}
	else {
		$file = file_get_contents("../private/passwd");
		$file = unserialize($file);
		if (val_user($file) === true) {
			$_SESSION['user'] = $_POST['login'];
			$_SESSION['passwd'] = $_POST['passwd'];
			$file[] = array("login" => $_SESSION['user'], "passwd" => hash('whirlpool',$_SESSION['passwd']));
			$file = serialize($file);
			file_put_contents("../private/passwd", $file);
			return (1);
		}
		else
			return (0);
	}
}
if (isset($_POST)) {

	if ($_POST['login'] === "" && $_POST['passwd'] === "" && isset($_POST['submit']) && isset($_POST['submit']))
		echo "ERROR";
	else if (isset($_POST['login']) && isset($_POST['passwd']) && isset($_POST['submit'])) {
		if (!file_exists('../private/')) {
			mkdir ('../private', 0777, true);
		}
		if (check_user() === 1) {
			echo "OK\n";
		}
		else
			echo "ERROR\n";
	}
}
?>
