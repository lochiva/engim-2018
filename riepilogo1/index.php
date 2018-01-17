<?php



$pages = [
	['name'=>'commenti'],
	['name'=>'variabili'],
	['name'=>'array'],
	['name'=>'dichiarazioni'],
	['name'=>'static'],
	['name'=>'dichiarazioni'],
	['name'=>'if'],
	['name'=>'for'],
	['name'=>'while'],
	['name'=>'foreach'],
	['name'=>'function'],
	['name'=>'namespace'],


];
// controlla che esistano i file
 //&& file_exists("pagine/" . $p . ".php")

echo "<h1>Menu</h1>";
echo "<ul>";
foreach($pages as $page){
	echo "<li><a href=\"?p=".$page['name']."\">".$page['name']."</a></li>";
}
echo "</ul>";

// leggo il parametro passato dall'utente nell'url
$p= '';
if (!empty($_GET['p'])){
	$p = trim($_GET['p']);
}

// verifico che il paramentro passato esista tra le pagine e che esista anche il file
if (in_array(['name'=>$p],$pages) ){
	echo "<h1>$p</h1>";


	echo "<h2>esecuzione</h2>";
	include "pagine/" . $p . ".php";
	echo "<h2>codice sorgente</h2>";
	echo highlight_string(file_get_contents("pagine/" . $p . ".php"));

}





include "footer.php";
