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
$i = 1;
$tab = ft_split($argv[1]);
$arr = $tab[0];
foreach($tab as $index)
{
	if ($i > 1)
		echo $index . " ";
	$i++;
}
echo $tab[0] . "\n";
?>
