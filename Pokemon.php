<?php

abstract class Pokemon 
{
	public $name;
    	public $life;
    	public $level;
    	public $type;
    	public $strength;

	public function __construct ($name, $lifemax, $life, $level, $type, $strength)
    		{
	    		$this->name = $name;
			$this->lifemax = $lifemax;
	    		$this->life = $life;
	    		$this->level = $level;
	    		$this->type = $type;
	    		$this->strength = $strength;

			static::say_hi();
    		}

	public function level_up ()
		{
		        $this->level += 1;
		        $this->life += 5;
		        $this->strength += 2;
		        $level_up_text = $this->name . ' passe au niveau ' . $this->level . "\nIl gagne 5 pts de vie et 2 pts de force.\n";

		        echo $level_up_text;
		        return true;
		}
		
	public function attaquer ()
		{
			$dommage= $this->strength * (rand(900, 1100) / 1000);
			return true;
		}
		
	public function defendre ()
		{
			$this->life -= $dommage;
		}
}


?>
