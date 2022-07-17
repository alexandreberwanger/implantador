<?php



use Symfony\Component\Console\Input\Input;
//if (!isset($_SESSION)){
  //  session_start();
require_once 'Categoria.php';
$criaCategoria = new Categoria();

$vloja = $_GET["loja"];
$vapi = $_GET["api"];
$vcat1 = $_GET["cadastraCat1"];
$vcat2 = $_GET["cadastraCat2"]; 
$vcat3 = $_GET["cadastraCat3"]; 
$vcat4 = $_GET["cadastraCat4"]; 
$vcat5 = $_GET["cadastraCat5"]; 


$criaCategoria->setNumLoja($vloja);
$criaCategoria->setApi($vapi);
$criaCategoria->setNomeCategoria($vcat1);
$criaCategoria->setListaCategoria($vcat1);
$criaCategoria->setNomeCategoria($vcat2);
$criaCategoria->setListaCategoria($vcat2);
$criaCategoria->setNomeCategoria($vcat3);
$criaCategoria->setListaCategoria($vcat3);
$criaCategoria->setNomeCategoria($vcat4);
$criaCategoria->setListaCategoria($vcat4);
$criaCategoria->setNomeCategoria($vcat5);
$criaCategoria->setListaCategoria($vcat5);
$criaCategoria->getListaCategoria();
header ('Location: http://implantador.x10.mx/index.html');

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

