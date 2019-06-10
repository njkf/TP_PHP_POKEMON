<?php


class Salameche extends Pokemon
    {
        public function __construct ($level, $life = null)
        {
            $name = 'Salameche';
            $max_life = 100 + 4 * $level;
            $life = $life ?? $max_life;
            $type = 'feu';
            $strength = 10 + 5 * $level;

            parent::__construct($name, $max_life, $life, $level, $type, $strength);
        }

        public static function say_hi ()
        {
            echo "Salam !\n";
        }

    }


var_dump($Salameche);

?>

