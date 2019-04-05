<?php
function auth($login, $pwd)
{
	$arr = file_get_contents("../private/passwd");
	$arr = unserialize($arr);
	$pwd = hash('whirlpool', $pwd);
	foreach ($arr as $val) {
		if ($val['login'] === $login) {
			if ($pwd === $val['passwd'])
				return (1);
		}
	}
	return (0);
}
?>
