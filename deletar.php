<?php

require 'config.php';

$loja = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM acesso WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    //if($sql->rowCount() > 0) {
        $loja = $sql->fetch(PDO::FETCH_ASSOC);
        //die('tem');
   // } else {
       // die('n tem');
        header("Location: http://implantador.x10.mx/index.php");
        exit;
   // } 
  //  } else {
   //     header("Location: index.php");
   }

?>