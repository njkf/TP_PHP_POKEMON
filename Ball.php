<?php

abstract class Ball
{
	protected $name;
    	protected $level;

	public function __construct ($name, $level)
    	{
    		$this->name = $name;
    		$this->level = $level;
	}

	public function capture ($target, $ball_use)
	{
		if ($ball_use->level <= 50)
		{
		$chance_capture = round((($target->max_life - $target->life) / $target->max_life) * (1 + ($ball_use->level - $target->level) / 25),2);
		}
		else
		{
		$chance_capture = 1;
		}
		echo $chance_capture;
	}
}


?>
