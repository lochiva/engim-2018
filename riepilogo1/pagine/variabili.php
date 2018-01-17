<?php
// variabili semplici: il nome deve iniziare con una lettera e può anche contenere numfmt_get_attribute

$num1 = 1; // questo è un numero intero
$num2 = 3;
$string = "questa è una variabile stringa";

$nome="roberto";

$cognome = 'ruffinengo'; // ahc econ gli apici singoli

$persona = $nome . " " . $cognome ; // le stringhe si possono concatenare

echo $persona;
echo "<br>";
$risultato = $num1 + $num2 ;   // i numeri si possono sommare

// attenzine, cake in automatico converte i tipi:

$messaggio = $persona .  $num1 ;

echo "il nome con un numero:". $messaggio;

echo "<br>";
// e ancora più sorprendente:
$sorpresa = $num1 . $num2;

echo ($sorpresa + 1); // stampa 14


 ?>
