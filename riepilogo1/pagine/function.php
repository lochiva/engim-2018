<?php

// lo scope di una variabile è limitata al blocco di codice presente nella funzione


function animali(){
  $animale= "gatto";
}

$animale= "cane";
echo $animale . "<br/>";
//la chiamata a questa funzione non ha impatto sulla var ;
echo $animale . "<br/>";


//se però dichiaro una variaible come global allora viene ridefinita la variaible nello scope generale:
function frutti(){
  global $frutto ;
  $frutto = "banana";
}

$frutto= "mela";
echo $frutto  .  "<br/>";
//la chiamata a questa funzione non ha impatto sulla var ;
frutti();
echo $frutto . "<br/>";




// passaggio di parametri by value e by reference
// normalmente ad una funzione si passano i parametri by value,
// questo significa che la funzione lavora su una COPIA dei dati



function aumento1($valore){

$valore++;


}


function aumento2(&$valore){

$valore++;


}


//in questo caso la funzione lavora su una copia della varibile
$importo = 100;
echo $importo . "<br/>";
aumento1($importo);
echo $importo . "<br/>";



//In questo caso la funzione lavora sulla variabile originale, non sulla copia
$importo = 100;
echo $importo . "<br/>";
aumento2($importo);
echo $importo . "<br/>";



// posso mettere una funzione in una funzione ?
// si ma non ha senso.


function esterna(){

  $var1=1;
  function interna(){
    $var2= 2;
    echo $var2;
  }

echo interna();



}

echo "ora chiamo la funzione da fuori";
//echo interna(); 
