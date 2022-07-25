<?php
require_once 'ProdutoClass.php';
require_once 'CategoriaClass.php';
require 'config.php';


        $usuario = [];
        $id = filter_input(INPUT_GET, 'id');
        $produto = new Produto();
        $categoria = new Categoria();

        if($id){
            $sql = $pdo->prepare("SELECT * FROM acesso WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
        
            //$posicao = 10;

            //$produto->getNomeCategoria($posicao);
            if($sql->rowCount() > 0) {
                $loja = $sql->fetch(PDO::FETCH_ASSOC);
                $produto->setNumLoja($loja['numero_loja']);
                $produto->setApi($loja['chave_api']);

                //echo "<pre>";
                //$produto->getNomeCategoria($posicao);
                //echo $produto->getIdCategoria();
                //die('da');
                //$produto->setCadastraProduto($produto);
                //$categoria->getListaCategoria();
                  //die('tem');


                ?>

                <form name="f_cadCat" id="f_cadCat" method="GET" action="produtoController.php">
        
                <label>V. beta</label><br/>
                <br/>
                <br/>
                <br/>
                <label>Numero da loja: </label>
                <input type="number" name="loja" id="loja" value="<?=$loja['numero_loja']?>" size="15"  maxlength="30"/>
                <label>Chave da API: </label>
                <input type="text" name="api" id="api" value="<?=$loja['chave_api'];?>"  size="60"  maxlength="60"/><br/><br/>
                <label>Produto 1</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 2</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto2" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku2" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria2" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 3</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto3" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku3" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria3" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 4</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto4" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku4" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria4" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 5</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto5" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku5" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria5" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 6</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto6" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku6" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria6" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 7</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto7" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku7" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria7" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 8</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto8" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku8" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria8" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 9</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto9" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku9" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria9" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <label>Produto 10</label>
                <br/>
                <br/>
                <label>NOME: </label>
                <input type="text" name="nomeProduto10" size="15"  maxlength="30"/><br/><br/>
                <label>SKU: </label>
                <input type="text" name="nomeSku10" size="15"  maxlength="30"/><label>- Se deixar em branco ele irá gerar um SKU automaticamente</label><br/><br/>
                <label>CATEGORIA: </label>
                <input type="text" name="nomeCategoria10" size="15"  maxlength="30"/><br/><br/><br/><br/>
                <input type="submit" id="submit" value="Cadastrar"/>
                <input type="reset" value="Limpar"/>
                <br/>

                <label> - -------</label><br/>
                <label> - -------</label><br/>
                <label> - -------</label><br/>
                <?php
                //echo $produto->setItemCategoria($produto);
                //die('tem');


                //header("Location: controller.php");
                //echo "<br>";
                //echo $loja['numero_loja'];
                //echo "<br>";
                //echo $loja['chave_api'];
                //echo "<br>";
                //die('tem');

            } else {
                //die('n tem');
                header("Location: index.php");
                exit;
            } 
            } else {
                //die('adsadasd');
                header("Location: index.php");
            }