<?php
Class NightsWatch implements IFighter
{
	private $arr;
	public function recruit( $src )
	{
		if ($src instanceof IFighter)
		{
			$this->arr[] = $src;
		}
	}
	public function fight()
	{
		foreach ($this->arr as $key => $val) {
			$val->fight();
		}
	}
}
?>