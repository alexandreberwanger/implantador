<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$numero_loja = filter_input(INPUT_POST, 'numero_loja');
$chave_api = filter_input(INPUT_POST, 'chave_api');

if($id && $numero_loja && $chave_api){
    $sql = $pdo->prepare("UPDATE acesso SET numero_loja = :numero_loja, chave_api = :chave_api where id = :id");
    $sql->bindValue(':numero_loja', $numero_loja);
    $sql->bindValue(':chave_api', $chave_api);
    $sql->bindValue(':id', $id);

    $sql->execute();

    header("Location: controller.php");
    exit;
} else {
    //die('PAROUU');
    header("Location: controller.php");
}