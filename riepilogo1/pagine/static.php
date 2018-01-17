<?php

// una variaible statica è persistente per tutta la durata di esecuzione e non viene reinizializzata
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?>
