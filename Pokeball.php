<?php

    
class Pokeball extends Ball
    {
	public $name;
    	public $level;

        public function __construct ()
        {
            $name = 'Pokeball';
            $level = 10;

            parent::__construct($name, $level);
        }

    }



?>
