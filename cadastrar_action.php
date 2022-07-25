<?php

require 'config.php';

$numeroLoja = filter_input(INPUT_POST, 'loja');
$chaveApi = filter_input(INPUT_POST, 'api');

//echo $numeroLoja;
//echo "<br>";
//echo $chaveApi;
//die ('parou');

if($numeroLoja && $chaveApi){

    $sql = $pdo->prepare("SELECT * FROM acesso WHERE chave_api = :chave_api");
    $sql->bindValue(':chave_api', $chaveApi);
    $sql->execute();

    //if($sql->rowCount() === 0) {

        $sql = $pdo->prepare("INSERT INTO acesso (numero_loja, chave_api) VALUES (:numero_loja, :chave_api)");
        $sql->bindValue(':numero_loja', $numeroLoja);
        $sql->bindValue(':chave_api', $chaveApi);
        
        $sql->execute();
        header("Location: controller.php");
        
        exit;
       /* 
    } else {
        header("Location: cadastrar.php");
        exit;
    }*/

} else {
    //die('caiu');
    header("Location: index.php");
    exit;
}
