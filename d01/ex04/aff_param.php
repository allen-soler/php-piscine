#!/usr/bin/php
<?php 
$argv;

$i = 0;
foreach ($argv as $index)
{
	if ($i > 0)
		echo $index . "\n";
	$i++;
}
?>
