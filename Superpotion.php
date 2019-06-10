<?php

include './Heal.php';
    
class Superpotion extends Heal
    {
	public $name;
    	public $healing;

        public function __construct ($name, $healing)
        {
            this->$name = 'Superpotion';
            this->$healing = 50;

            parent::__construct($name, $level);
        }

    }


?>
