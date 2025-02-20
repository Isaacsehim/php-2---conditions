<?php

$age = 12;
$gender = 'femme';

if ($age >= 18 && $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes majeure';
} elseif ($age < 18 && $gender == 'femme') {
    echo 'Vous êtes une femme et vous êtes mineure';

} elseif ($age >= 18 && $gender == 'homme') {
    echo 'Vous êtes un homme et vous êtes majeur';
} elseif ($age < 18 && $gender == 'homme') {
    echo 'Vous êtes un homme et vous êtes mineur';
	
} elseif ($gender != 'femme' && $gender != 'homme') {
    echo "Vous ne vous reconnaissez pas dans ces deux genres, nous ajouterons plus d'options d'inclusivité à notre test.";
}

?>

