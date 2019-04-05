<?php
class UnholyFactory
{
	private $array = array();
	private $fabricate = array();
	private $type_f;
	public function absorb( $type )
	{
		if ($type instanceof Fighter)
		{
			if (in_array($type, $this->array))
				print("(Factory already absorbed a fighter of type ");
			else
			{
				print("(Factory absorbed a fighter of type ");
				$this->array[] =  $type;
			}
			print($type->getType() . ")");
			print(PHP_EOL);
		}
		else
		{
			print("(Factory can't absorb this, it's not a fighter)");
			print(PHP_EOL);
		}
	}
	private function ft_change($change)
	{
		if ($change === "foot soldier")
			return "Footsoldier";
		else if ($change === "llama")
			return "Llama";
		else if ($change === "archer")
			return "Archer";
		else if ($change === "assassin")
			return "Assassin";
	}
	public function fabricate( $change )
	{
		$this->type_f = $this->ft_change($change);
		foreach ($this->array as $key => $value) {
			if (get_class($value) === $this->type_f)
			{
				$new = clone $this->array[$key];
				print("(Factory fabricates a fighter of type " . $change . ")". PHP_EOL);
				return ($new);
			}
		}
		print("(Factory hasn't absorbed any fighter of type ". $change . ")". PHP_EOL);
	}
}
?>
