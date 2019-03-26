<?php
function ft_is_sort($tab)
{
	$fake = $tab;
	sort($fake);
	$flag = 1;
	foreach($fake as $index => $val)
	{
		if ($val != $tab[$index])
			$flag = 0;
	}
	return ($flag);
}
?>
