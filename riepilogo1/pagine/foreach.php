<?php

// ciclo for con un contatore:
$persone= ['mario','paolo'];

echo "<br>";
foreach ($persone as $key=>$value){
  echo $key . " " .  $value . "</br>";

}


echo "<br>";
$dati=['nome'=>'mario', 'cognome'=>'rossi'] ;
foreach ($dati as $key=>$value){
  echo $key . " " .  $value . "<br>";

}
