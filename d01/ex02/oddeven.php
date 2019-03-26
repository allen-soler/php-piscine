#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$line = trim(fgets(STDIN));
	if ($line == NULL)
	{
		echo "^D\n";
		break ;
	}
	if (is_numeric($line))
	{
		$i = (int)$line;
		if ($i % 2 == 0)
			echo "Le chiffre " . $line . " est Pair\n";
		else
			echo "Le chiffre " . $line . " est Impair\n";
	}
	else
		echo "'" . $line . "'" . " n'est pas un chiffre\n";
}
?>
