<?php

//json_encode($_SERVER['REQUEST_METHOD']);
echo json_encode($_POST);

require_once 'Categoria.php';
$criaCategoria = new Categoria();

$t = $_POST["cadastraCat"];

//echo $t;
echo "<br>";
$criaCategoria->getListaCategoria();

echo $criaCategoria->getNumLoja();
echo "<br>";
echo $criaCategoria->getApi();
echo "<br>";
die('sdas');
$criaCategoria->setNomeCategoria($t);
$criaCategoria->setListaCategoria($t);

$criaCategoria->setNomeCategoria($vcat);
$criaCategoria->setListaCategoria($vcat);
$criaCategoria->getListaCategoria();
