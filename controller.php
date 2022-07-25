<?php

require 'config.php';
//$categoria = new Categoria();


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
<a href="categoriaModel.php?id=<?=$loja['id'];?>">
<button>
Cadastrar Categorias</button></a>
<br>
<br>
<a href="subCategoriaModel.php?id=<?=$loja['id'];?>">
<button>
Cadastrar Sub-Categorias</button></a>
<br>
<br>
<a href="subCategoriaModel.php?id=<?=$loja['id'];?>">
<button>
Cadastrar Variações (AINDA NÂO FUNCIONA)</button></a>
<br>
<br>
<a href="categoriaController.php?id=<?=$loja['id'];?>">
<button>
Cadastrar Atributos (AINDA NÂO FUNCIONA)</button></a>
<br>
<br>
<a href="produtoModel.php?id=<?=$loja['id'];?>">
<button>
Cadastrar Produtos (FICA SEM CATEGORIA AINDA)</button></a>
<br>