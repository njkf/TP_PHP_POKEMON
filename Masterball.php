<?php

    
class Masterball extends Ball
    {
	public $name;
    	public $level;

        public function __construct ()
        {
            $name = 'Masterball';
            $level = 100;

            parent::__construct($name, $level);
        }

    }


?>
