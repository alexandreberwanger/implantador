<?php
require_once 'ProdutoClass.php';
require 'config.php';
$produto = new Produto();

//die('veio');
        $usuario = [];
        $id = filter_input(INPUT_GET, 'id');
        $loja = $_GET["loja"];
        $api = $_GET["api"];
        $nomeProduto = $_GET["nomeProduto"];
        $nomeSku = $_GET["nomeSku"];
        $nomeCategoria = $_GET["nomeCategoria"];

        $nomeProduto2 = $_GET["nomeProduto2"];
        $nomeSku2 = $_GET["nomeSku2"];
        $nomeCategoria2 = $_GET["nomeCategoria2"];

        $nomeProduto3 = $_GET["nomeProduto3"];
        $nomeSku3 = $_GET["nomeSku3"];
        $nomeCategoria3 = $_GET["nomeCategoria3"];

        $nomeProduto4 = $_GET["nomeProduto4"];
        $nomeSku4 = $_GET["nomeSku4"];
        $nomeCategoria4 = $_GET["nomeCategoria4"];

        $nomeProduto5 = $_GET["nomeProduto5"];
        $nomeSku5 = $_GET["nomeSku5"];
        $nomeCategoria5 = $_GET["nomeCategoria5"];

        $nomeProduto6 = $_GET["nomeProduto6"];
        $nomeSku6 = $_GET["nomeSku6"];
        $nomeCategoria6 = $_GET["nomeCategoria6"];

        $nomeProduto7 = $_GET["nomeProduto7"];
        $nomeSku7 = $_GET["nomeSku7"];
        $nomeCategoria7 = $_GET["nomeCategoria7"];

        $nomeProduto8 = $_GET["nomeProduto8"];
        $nomeSku8 = $_GET["nomeSku8"];
        $nomeCategoria8 = $_GET["nomeCategoria8"];

        $nomeProduto9 = $_GET["nomeProduto9"];
        $nomeSku9 = $_GET["nomeSku9"];
        $nomeCategoria9 = $_GET["nomeCategoria9"];

        $nomeProduto10 = $_GET["nomeProduto10"];
        $nomeSku10 = $_GET["nomeSku10"];
        $nomeCategoria10 = $_GET["nomeCategoria10"];
 
        if(!empty($nomeProduto)){
        $produto->setNumLoja($loja);
        $produto->setApi($api);
        $produto->setNomeProduto($nomeProduto);
        $produto->setNomeSku($nomeSku);
        $produto->setCadastraProduto($produto);
        
        }

        if(!empty($nomeProduto2)){
        $produto->setNomeProduto($nomeProduto2);
        $produto->setNomeSku($nomeSku2);
        $produto->setCadastraProduto($produto2);
        //$produto->setNomeCategoria($nomeCategoria2);
        }

        if(!empty($nomeProduto3)){
        $produto->setNomeProduto($nomeProduto3);
        $produto->setNomeSku($nomeSku3);
        $produto->setCadastraProduto($produto3);
        //$produto->setNomeCategoria($nomeCategoria3);
        }

        if(!empty($nomeProduto4)){
        $produto->setNomeProduto($nomeProduto4);
        $produto->setNomeSku($nomeSku4);
        $produto->setCadastraProduto($produto4);
        //$produto->setNomeCategoria($nomeCategoria4);
        }
        

        if(!empty($nomeProduto5)){
        $produto->setNomeProduto($nomeProduto5);
        $produto->setNomeSku($nomeSku5);
        $produto->setCadastraProduto($produto5);
        //$produto->setNomeCategoria($nomeCategoria5);
        }


        if(!empty($nomeProduto6)){
        $produto->setNomeProduto($nomeProduto6);
        $produto->setNomeSku($nomeSku6);
        $produto->setCadastraProduto($produto6);
        //$produto->setNomeCategoria($nomeCategoria6);
        }


        if(!empty($nomeProduto7)){
        $produto->setNomeProduto($nomeProduto7);
        $produto->setNomeSku($nomeSku7);
        $produto->setCadastraProduto($produto7);
        //$produto->setNomeCategoria($nomeCategoria7);
        }


        if(!empty($nomeProduto8)){
        $produto->setNomeProduto($nomeProduto8);
        $produto->setNomeSku($nomeSku8);
        $produto->setCadastraProduto($produto8);
        //$produto->setNomeCategoria($nomeCategoria8);
        }

        if(!empty($nomeProduto9)){
        $produto->setNomeProduto($nomeProduto9);
        $produto->setNomeSku($nomeSku9);
        $produto->setCadastraProduto($produto9);
        $produto->setNomeCategoria($nomeCategoria9);
        }

        if(!empty($nomeProduto10)){
        $produto->setNomeProduto($nomeProduto10);
        $produto->setNomeSku($nomeSku10);
        $produto->setCadastraProduto($produto10);
        //$produto->setNomeCategoria($nomeCategoria10);
        //$produto->getNomeCategoria();
        }

        header("Location: controller.php");