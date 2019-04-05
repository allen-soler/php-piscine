<?php
function change_pwd($arr)
{
	foreach($arr as $key => $val)
	{
		if ($val['login'] === $_POST['login'])
		{
			$str = hash('whirlpool',$_POST['oldpw']);
			if ($str === $val['passwd']) {
				$arr[$key]['passwd'] = hash('whirlpool',$_POST['newpw']);
				echo "OK";
			}
			else {
				echo "ERROR";
				break ;	
			}
		}
	}
	return ($arr);
}
if (isset($_POST)) {

	if ($_POST['login'] === "" && $_POST['oldpw'] === "" && $_POST['newpw'] === "" && isset($_POST['submit']) && isset($_POST['submit']))
		echo "ERROR";
	else if ($_POST['oldpw'] === $_POST['newpw'])
		echo "ERROR";
	else {
		$file = file_get_contents("../private/passwd");
		$arr = unserialize($file);
		$arr = change_pwd($arr);
		$file = serialize($arr);
		file_put_contents("../private/passwd", $file);
	}
}
?>
