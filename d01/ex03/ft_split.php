#!/usr/bin/php
<?php 
function ft_split($str)
{
	$arr = explode(" ", $str);
	foreach ($arr as $index => $list)
	{
		if ($list === '')
			unset($arr[$index]);	
	}
	sort($arr);
	return ($arr);
}
?>
