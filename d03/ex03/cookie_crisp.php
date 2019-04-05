<?php
if ($_GET['action'] == "set")
{
	if ($_GET['name'] && $_GET['value'] && !$_GET['expire'])
		setcookie($_GET['name'],$_GET['value']);
	else if ($_GET['name'] && $_GET['value'] && $_GET['expire'])
		setcookie($_GET['name'],$_GET['value'], time() + (int)$_GET['expire']);
}
else if ($_GET['action'] == "get")
{
	if ($_COOKIE)
		echo $_COOKIE[$_POST['name']] . "\n"; 
}
else if ($_GET['action'] == "del")
{
	setcookie($_GET['name'],$_GET['value'], time() - 1);
}
?>
