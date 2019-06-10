<?php

include './Heal.php';
    
class Hyperpotion extends Heal
    {
	public $name;
    	public $healing;

        public function __construct ($name, $healing)
        {
            this->$name = 'Hyperpotion';
            this->$healing = 200;

            parent::__construct($name, $level);
        }

    }


?>
