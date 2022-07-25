<?php

require 'config.php';

$usuario = [];
$id = filter_input(INPUT_POST, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM acesso WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    if($sql->rowCount() > 0) {
        $loja = $sql->fetch(PDO::FETCH_ASSOC);
        //die('tem');
    } else {
       // die('n tem');
        header("Location: index.php");
        exit;
    } 
    } else {
        header("Location: index.php");
    }