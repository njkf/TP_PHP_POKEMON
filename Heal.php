<?php

abstract class Heal
{
	protected $name;
    	protected $healing;

	public function __construct ($name, $healing)
    	{
    		$this->name = $name;
    		$this->healing = $healing;
	}

	public function soin ($target, $potion_use)
	{
		
	}
}


?>
