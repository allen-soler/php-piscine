<?php
Class Tyrion extends Lannister
{
	public function with( $src )
	{
		if (get_parent_class($src) !== 'Lannister')
		{
			return ("Let's do this.");
		}
		return ("Not even if I'm drunk !");
	}
}
?>