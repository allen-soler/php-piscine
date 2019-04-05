#!/usr/bin/php
<?php
function replace($str, $arr)
{
	echo "$str\n";
	print_r($arr);
}

$fd = fopen($argv[1], r);
while ($line = fgets($fd))
{
	$str .= $line;
}
fclose($fd);
preg_match_all("/(<a.*>.*<\/a>)/", $str, $arr, PREG_OFFSET_CAPTURE);
$i = 0;
$i = count($arr);
echo $i . "\n";
for ($j = 0; $j < $i; $j++)
{
	foreach ($arr[$j] as $key => $value)
	{
		var_dump($value);
		/*$line[] = preg_replace_callback("/( title=\")(.*?)(\")/",
			function ($matches) { return var_dump($matches);}, $value);*/
	}
}
//$str = replace($str, $arr);
?>
