<?php
require_once 'CategoriaClass.php';
require 'config.php';
$categoria = new Categoria();

//die('veio');
        $usuario = [];
        $id = filter_input(INPUT_GET, 'id');
        $loja = $_GET["loja"];
        $api = $_GET["api"];
        $vcat1 = $_GET["cadastraCat1"];
        $idCategoria1 = $_GET["idCat1"];

        $vcat2 = $_GET["cadastraCat2"];
        $idCategoria2 = $_GET["idCat2"];

        $vcat3 = $_GET["cadastraCat3"];
        $idCategoria4 = $_GET["idCat3"];

        $vcat4 = $_GET["cadastraCat4"];
        $idCategoria = $_GET["idCat4"];

        $vcat5 = $_GET["cadastraCat5"];
        $idCategoria5 = $_GET["idCat5"];

        $vcat6 = $_GET["cadastraCat6"];
        $idCategoria6 = $_GET["idCat6"];

        $vcat7 = $_GET["cadastraCat7"];
        $idCategoria7 = $_GET["idCat7"];

        $vcat8 = $_GET["cadastraCat8"];
        $idCategoria8 = $_GET["idCat8"];

        $vcat9 = $_GET["cadastraCat9"];
        $idCategoria9 = $_GET["idCat9"];

        $vcat10 = $_GET["cadastraCat10"];
        $idCategoria10 = $_GET["idCat10"];

        $categoria->setNumLoja($loja);
        $categoria->setApi($api);
        $categoria->setNomeCategoria($vcat1);
        $categoria->setCategoriaId($idCategoria1);
        $categoria->setSubCategoria($vcat1);

        $categoria->setNomeCategoria($vcat2);
        $categoria->setCategoriaId($idCategoria2);
        $categoria->setSubCategoria($vcat2);

        $categoria->setNomeCategoria($vcat3);
        $categoria->setCategoriaId($idCategoria3);
        $categoria->setSubCategoria($vcat3);

        $categoria->setNomeCategoria($vcat4);
        $categoria->setCategoriaId($idCategoria4);
        $categoria->setSubCategoria($vcat4);

        $categoria->setNomeCategoria($vcat5);
        $categoria->setCategoriaId($idCategoria5);
        $categoria->setSubCategoria($vcat5);

        $categoria->setNomeCategoria($vcat6);
        $categoria->setCategoriaId($idCategoria6);
        $categoria->setSubCategoria($vcat6);

        $categoria->setNomeCategoria($vcat7);
        $categoria->setCategoriaId($idCategoria7);
        $categoria->setSubCategoria($vcat7);

        $categoria->setNomeCategoria($vcat8);
        $categoria->setCategoriaId($idCategoria8);
        $categoria->setSubCategoria($vcat8);

        $categoria->setNomeCategoria($vcat9);
        $categoria->setCategoriaId($idCategoria9);
        $categoria->setSubCategoria($vcat9);

        $categoria->setNomeCategoria($vcat10);
        $categoria->setCategoriaId($idCategoria10);
        $categoria->setSubCategoria($vcat10);

        header("Location: controller.php");