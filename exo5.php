<?php
$number = 12;

if ($number%2 == 1)
{
echo "c'est impair !";
}

else
{
	echo "c'est pair !";
}

// deuxième version possible
echo ($number % 2 == 0) ? "C'est pair !" : "C'est impair !";
?>