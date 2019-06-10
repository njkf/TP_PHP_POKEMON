<?php

include './Pokemon.php';

include './Salameche.php';
include './Bulbizarre.php';
include './Carapuce.php';

include './Ball.php';

include './Pokeball.php';
include './Superball.php';
include './Hyperball.php';
include './Masterball.php';

include './Heal.php';

include './Potion.php';
include './Superpotion.php';
include './Hyperpotion.php';
include './Potionmax.php';


$Carapuce = new Carapuce(5);
$Salameche = new Salameche(5);
$Bulbizarre = new Bulbizarre(5);

$Pokeball->capture($Salameche, $Pokeball);


?>
