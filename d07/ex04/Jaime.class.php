<?php
Class Jaime extends Lannister
{
	public function with( $src )
	{
		if (get_parent_class($src) !== 'Lannister')
			return ("Let's do this.");
		elseif (get_class($src) === "Cersei")
			return ("With pleasure, but only in a tower in Winterfell, then.");
		else
			return ("Not even if I'm drunk !");
	}
}
?>