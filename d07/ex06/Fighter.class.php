<?php
abstract class Fighter
{
	abstract function fight($src);
	public $soldier;
	public function __construct( $type )
	{
		$this->soldier = $type;
	}
	public function getType()
	{
		return ($this->soldier);
	}
	public function __clone()
	{
		
	}
}
?>