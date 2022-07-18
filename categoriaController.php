<?php
require_once 'CategoriaClass.php';
require 'config.php';


        $usuario = [];
        $id = filter_input(INPUT_GET, 'id');
        $categoria = new Categoria();
        
        if($id){
            $sql = $pdo->prepare("SELECT * FROM acesso WHERE id = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();
        
        
            if($sql->rowCount() > 0) {
                $loja = $sql->fetch(PDO::FETCH_ASSOC);
                $categoria->setNumLoja($loja['numero_loja']);
                $categoria->setApi($loja['chave_api']);
                ?>

                <form name="f_cadCat" id="f_cadCat" method="GET" action="categoriaModel.php">
        
                <label>V. beta</label><br/>
                <br/>
                <br/>
                <br/>
                <label>Numero da loja: </label>
                <input type="number" name="loja" id="loja" value="<?=$loja['numero_loja']?>" size="15"  maxlength="30"/>
                <label>Chave da API: </label>
                <input type="text" name="api" id="api" value="<?=$loja['chave_api'];?>"  size="60"  maxlength="60"/><br/><br/>
                <label>NOME DA CATEGORIA 1: </label>
                <input type="text" name="cadastraCat1" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 2: </label>
                <input type="text" name="cadastraCat2" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 3: </label>
                <input type="text" name="cadastraCat3" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 4: </label>
                <input type="text" name="cadastraCat4" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 5: </label>
                <input type="text" name="cadastraCat5" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 6: </label>
                <input type="text" name="cadastraCat6" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 7: </label>
                <input type="text" name="cadastraCat7" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 8: </label>
                <input type="text" name="cadastraCat8" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 9: </label>
                <input type="text" name="cadastraCat9" size="15"  maxlength="30"/><br/><br/>
                <label>NOME DA CATEGORIA 10: </label>
                <input type="text" name="cadastraCat10" size="15"  maxlength="30"/><br/><br/>
                <input type="submit" id="submit" value="Cadastrar"/>
                <input type="reset" value="Limpar"/>
                <br/>
                <br/>
                <br/>
                <label> - Cadastra apenas categorias principais;</label><br/>
                <label> - Pode cadastrar menos do que 5 categorias por vez;</label><br/>
                <label> - Se retornar a esta tela inicial quer dizer que deu certo;</label><br/>
                <?php

                //die('tem');

            } else {
                die('n tem');
                header("Location: http://implantador.x10.mx/index.php");
                exit;
            } 
            } else {
                //die('adsadasd');
                header("Location: http://implantador.x10.mx/index.php");
            }
