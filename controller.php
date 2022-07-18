<?php

require 'config.php';


$lista = [];
//$sql = $pdo->query("SELECT * FROM acesso where numero_loja = 1");
//Sugestão de melhoria - Criar tabela de usuário //
$sql = $pdo->prepare("SELECT * FROM acesso ORDER BY acesso.id DESC LIMIT 1");
//$sql->bindValue(':id', $id);
$sql->execute();

if($sql->rowCount() > 0){
    $lista= $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>


<table border="1">
    <tr>
        <th>ID</th>
        <th>Número da Loja</th>
        <th>Chave de API</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $loja): ?>
        <tr>
        <td><?=$loja['id'];?></td>
        <td><?=$loja['numero_loja'];?></td>
        <td><?=$loja['chave_api'];?></td>
        <td>
            <a href="editar.php?id=<?=$loja['id'];?>">| TROCAR DE LOJA |</a>
            <a href="deletar.php?id=<?=$loja['id'];?>">| SAIR |</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>
<br>
<a href="http://implantador.x10.mx/categoriaController.php?id=<?=$loja['id'];?>">
<button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">
Cadastrar Categorias</button></a>
<br>
<br>
<a href="categoriaController.php?id=<?=$loja['id'];?>">
<button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">
Cadastrar Sub-Categorias (AINDA NÂO FUNCIONA)</button></a>
<br>
<br>
<a href="categoriaController.php?id=<?=$loja['id'];?>">
<button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">
Cadastrar Variações (AINDA NÂO FUNCIONA)</button></a>
<br>
<br>
<a href="categoriaController.php?id=<?=$loja['id'];?>">
<button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">
Cadastrar Atributos (AINDA NÂO FUNCIONA)</button></a>
<br>
<br>
<a href="categoriaController.php?id=<?=$loja['id'];?>">
<button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">
Cadastrar Produtos (AINDA NÂO FUNCIONA)</button></a>
<br>