<?php

include './Heal.php';
    
class Potion extends Heal
    {
	public $name;
    	public $healing;

        public function __construct ($name, $healing)
        {
            this->$name = 'Potion';
            this->$healing = 20;

            parent::__construct($name, $level);
        }

    }

$Potion = new Potion();
var_dump($Potion);

?>
