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
        
            $posicao = 8;

            if($sql->rowCount() > 0) {
                $loja = $sql->fetch(PDO::FETCH_ASSOC);
                $categoria->setNumLoja($loja['numero_loja']);
                $categoria->setApi($loja['chave_api']);
                //$categoria->getListaCategoria($posicao=1);
                //echo "<br>";
                //$categoria->getListaCategoria($posicao);
                //$categoria->setCategoriaId($posicao);
                
                //echo $categoria->getListaCategoria($posicao);
                   //echo "N ACHOU";
                
               // echo "<br>";
                //die('Parou');
?>

<form name="f_cadCat" id="f_cadCat" method="GET" action="subCategoriaController.php">
        

                <label>Numero da loja: </label>
                <input type="number" name="loja" id="loja" value="<?=$loja['numero_loja']?>" size="15"  maxlength="30"/>
                <label>Chave da API: </label>
                <input type="text" name="api" id="api" value="<?=$loja['chave_api'];?>"  size="60"  maxlength="60"/><br/><br/>

                <label><b>  - ROLE A TELA PARA BAIXO e Verifique o ID da categoria Mãe na lista e insira no campo ID da Sub-Categoria</b> </label><br/>

                <label>NOME DA CATEGORIA 1: </label>
                <input type="text" name="cadastraCat1" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat1" size="15"  maxlength="30"/><br/><br/>
           
                <label>NOME DA CATEGORIA 2: </label>
                <input type="text" name="cadastraCat2" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat2" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 3: </label>
                <input type="text" name="cadastraCat3" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat3" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 4: </label>
                <input type="text" name="cadastraCat4" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat4" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 5: </label>
                <input type="text" name="cadastraCat5" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat5" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 6: </label>
                <input type="text" name="cadastraCat6" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat6" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 7: </label>
                <input type="text" name="cadastraCat7" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat7" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 8: </label>
                <input type="text" name="cadastraCat8" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat8" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 9: </label>
                <input type="text" name="cadastraCat9" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat9" size="15"  maxlength="30"/><br/><br/>

                <label>NOME DA CATEGORIA 10: </label>
                <input type="text" name="cadastraCat10" size="15"  maxlength="30"/><label> ID da Categoria Mãe: </label> <input type="number" name="idCat10" size="15"  maxlength="30"/><br/><br/>

                <input type="submit" id="submit" value="Cadastrar"/>
                <input type="reset" value="Limpar"/>
                <br>
                <br>

                <?php
                
                $categoria->getListaCategoria();
                  //die('tem');

                } else {
                   // die('n tem');
                    header("Location: index.php");
                    exit;
                } 
                } else {
                    //die('adsadasd');
                    header("Location: index.php");
                }