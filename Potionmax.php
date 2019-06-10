<?php

include './Heal.php';
    
class Potionmax extends Heal
    {
	public $name;
    	public $healing;

        public function __construct ($name, $healing,$target)
        {
            this->$name = 'Potionmax';
           $target->life += $target->maxlife;

            parent::__construct($name, $level);
        }

    }


?>
