<?php

require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("SELECT * FROM acesso WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();


    if($sql->rowCount() > 0) {
        $loja = $sql->fetch(PDO::FETCH_ASSOC);
        //die('tem');
    } else {
       // die('n tem');
        header("Location: http://implantador.x10.mx/index.php");
        exit;
    } 
    } else {
        header("Location: http://implantador.x10.mx/index.php");
    }

?>

<h1>Editar Usuário</h1>
<form method="POST" action="http://implantador.x10.mx/editar_action.php">
    <input type="hidden" name="id" value="<?=$loja['id'];?>"/>
    <label>
        Loja: <input type="number" name="numero_loja" value="<?=$loja['numero_loja'];?>"/>
    </label>
    <br><br>
    <label>
        Chave de API: <input type="text" name="chave_api" value="<?=$loja['chave_api'];?>"/>
    </label>
    <br><br>
    <input type="submit" value="Atualizar"/>
</form>
