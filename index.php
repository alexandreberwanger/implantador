<?php



use Symfony\Component\Console\Input\Input;
//if (!isset($_SESSION)){
  //  session_start();
require_once 'Categoria.php';
$criaCategoria = new Categoria();

$vloja = $_GET["loja"];
$vapi = $_GET["api"];
$vcat = $_GET["cadastraCat"]; 

$criaCategoria->setNumLoja($vloja);
$criaCategoria->setApi($vapi);
/*
$criaCategoria->setNomeCategoria($vcat);
$criaCategoria->setListaCategoria($vcat);
$criaCategoria->getListaCategoria();

*/
//$criaCategoria->getFormCategoria();


/*
echo "<br>";
echo $criaCategoria->getNumLoja();
echo "<br>";
echo $criaCategoria->getApi();
echo "<br>";
echo $criaCategoria->getNomeCategoria();
//die('PAROOOOU');
*/



echo "<br>Fim do Index<br>";
//echo $numCat->getListaCategoria();
//$numCat->setListaCategoria($vnumeroCateg);

//}



#die("TESTE");

