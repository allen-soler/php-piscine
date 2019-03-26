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

if ($argc > 1)
{
	$i = 1;
	$tab = array();
	while ($i < $argc)
	{
		$arr1 = ft_split($argv[$i]);
		$tab = array_merge($tab, $arr1);
		$i++;
	}
	sort($tab);
	echo implode("\n", $tab) . "\n";
}
?>
