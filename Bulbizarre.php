<?php


    
class Bulbizarre extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Bulbizarre';
            $max_life = 100 + 7 * $level;
            $life = $life ?? $max_life;
            $type = 'plante';
            $strength = 10 + 3 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public static function say_hi ()
        {
            echo "Bulbi !\n";
        }

    }


?>
