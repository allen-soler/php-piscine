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
	$arr = array_values($arr);
	return ($arr);
}

if ($argc == 2)
{
	$arr = ft_split($argv[1]);	
	echo implode(" ", $arr) . "\n";
	/*
	foreach($arr as $index => $value)
	{
		if ($value !== end($arr))
			echo $arr[$index] . " ";
		else
			echo $arr[$index] . "\n";
	}
	 */
}
?>
