<?php
// array semplici: un elenco di elementi
$nomi = ['Roberto', 'Paolo', 'carlo'];

// accedo all'elemento usando l'indice:
echo $nomi[1];

// aggungo elementi in fondo:
$nomi[]='Federica';

 // sostituisco il contenuto di una cella
 $nomi[2]="Carlo";


 // array associativi
 $persona1= ['nome'=>'Mario', 'cognome'=>'Rossi'];
 $persona2= ['nome'=>'Carla', 'cognome'=>'Verdi'];

 // accedere ad un valore:
 echo $persona1['nome']; // vale Mario

 // riassegnare un valore:
 $persona['cognome']= 'Gialli';


 // array di array...

 $persone=[];
 $persone[]=$persona1;
 $persone[]=$persona2;

 // oppure:
 $persone2= [$persona1, $persona2] ;




 // estrarre le chiavi:
 $chiavi= array_keys($persone);
 print_r($chiavi);


 // ma come possiamo usare gli array di array ?
 // ci sono delle regole:
 // regola: KISS : Keep It Simple, Stupid!
 // quindi vediamo i diversi casi:
 // un array è un insieme di elementi 'uniformi' tra di loro
 // dove metto i giorni della settimana ?
 // in un array semplice
 $weekdays=['lunedì', 'martedì', 'mercoledì', 'giovedì', 'venerdì', 'sabato','domenica'];
// se però mi serve sia la forma estesa che breve, cioè: lunedì ma anche LUN, come faccio:
//prima soluzione:
$short_weekdays= ['LUN', 'MAR','MER','GIO', 'VEN','SAB', 'DOM' ];

//se devo stampare sceglierò su quale array agire...

// posso fare meglio. Inserisco entrambi gli array in un array associativo:
$wdays=[$weekdays,$short_weekdays];


 // se devo stampare martedì scrivo:
 echo $wdays[0][1]; // non mi pare molto comprensibile

 // uso degli array associativi:
 $wdays2= ['long'=>$weekdays, 'short'=>$short_weekdays];

 echo $wdays2['long']['1'];  // non tanto chiaro

 //forse meglio:
 $weekdays2=[
   ['short'=>'LUN', 'long'=>'lunedì'],
   ['short'=>'MAR', 'long'=>'martedì'],
   ['short'=>'MER', 'long'=>'meroledì'],
   ['short'=>'GIO', 'long'=>'giovedì'],
   ['short'=>'VEN', 'long'=>'venerdì'],
   ['short'=>'SAB', 'long'=>'sabato'],
   ['short'=>'DOM', 'long'=>'domenica'],
  ];

echo $weekdays2[0]['short'];


// come decidere quale organizzazione dare alla nostra struttura dati ?
// dipende da come dobbiamo poi accedere.
// la prima cosa da definire è la chiave. Quindi fissiamo questa dimensione, e facciamo dipendere tutte le altre da questa.
// provo a usare la stringa corta come chiave:

$weekdays3=['LUN'=>'lunedì', 'MAR'=>'martedì', 'MER'=>'mercoledì','GIO'=>'giovedì','VEN'=>'venerdì','SAB'=>'sabato','DOM'=>'domenica'];
 //questo presuppone che conosca la versione corta, e quindi stampi quella lunga

 echo $weekdays3['MAR'];

 // ma questo non va bene se immagino di avere come riferimento il numero del giorno della settimana.
 // allora potrei fare così:
 $weekdays_short=['LUN','MAR', 'MER', 'GIO','VEN','SAB','DOM'];

 //se devo stampre martedì quindi posso scrivere:
$weekdays3[$weekdays_short[1]];


// ma immaginiamo che devo anche gestire le traduzioni, per avere un sito multilingua. Come faccio ?
//in questo caso devo tradurre sia le chiavi, che rappresentano i giorni in formato corso, che i valori, che sono invece i gionri in formato esteso.
// posso fare allora:
$weekdays=[
  'en'=>['SUN'=> 'sunday','MON'=>'monday','TUE'=>'tuesday', 'THI'=>'thirsday','WED'=>'wednesday','FRI'=>'friday','SAT'=>'saturday' ] ,
  'it'=>['DOM'=> 'domenica','LUN'=>'lunedì',''=>'MAR',''=>'martedì','MER'=>'mercoledì','GIO'=>'giovedì','VEN'=>'venerdì', 'SAB'=>'saturday' ] ,
];


  //  e poi devo anche avere le chiavi in lingua:
  $weekdays_short=[
    'en'=>['SUN','MON','TUE','THI','WED','FRI','SAT'],
    'it'=>['DOM','LUN','MAR','MER','GIO','VEN','SAB'],

  ];
  $lang = 'it';
echo "<br>deve stampare lunedì:  ";
  echo $weekdays[$lang][$weekdays_short[$lang][1]];

// è ancora piuttosto criptico:
$week_key= $weekdays_short[$lang][1];
echo "<br/>forma corta: ";
echo $weekdays[$lang][$week_key];


// ma alla fine se volgio fare una cosa semplice per stampare i giorni della settimana,
// generando una agenda e consentendo all'utente di stampare la lingua che desidera, come faccio ?




















 ?>
