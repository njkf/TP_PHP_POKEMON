<?php


class Superball extends ball
{
	public $name;
    	public $level;

	public function __construct ()
    	{
    		$name = 'Superball';
    		$level = 30;

	 parent::__construct($name, $level);
        }

}

$Superball = new Superball();


?>
