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
        $vcat2 = $_GET["cadastraCat2"]; 
        $vcat3 = $_GET["cadastraCat3"]; 
        $vcat4 = $_GET["cadastraCat4"]; 
        $vcat5 = $_GET["cadastraCat5"];
        $vcat6 = $_GET["cadastraCat6"]; 
        $vcat7 = $_GET["cadastraCat7"]; 
        $vcat8 = $_GET["cadastraCat8"]; 
        $vcat9 = $_GET["cadastraCat9"]; 
        $vcat10 = $_GET["cadastraCat10"];

        $categoria->setNumLoja($loja);
        $categoria->setApi($api);
        $categoria->setNomeCategoria($vcat1);
        $categoria->setListaCategoria($vcat1);
        $categoria->setNomeCategoria($vcat2);
        $categoria->setListaCategoria($vcat2);
        $categoria->setNomeCategoria($vcat3);
        $categoria->setListaCategoria($vcat3);
        $categoria->setNomeCategoria($vcat4);
        $categoria->setListaCategoria($vcat4);
        $categoria->setNomeCategoria($vcat5);
        $categoria->setListaCategoria($vcat5);
        $categoria->setNomeCategoria($vcat6);
        $categoria->setListaCategoria($vcat6);
        $categoria->setNomeCategoria($vcat7);
        $categoria->setListaCategoria($vcat7);
        $categoria->setNomeCategoria($vcat8);
        $categoria->setListaCategoria($vcat8);
        $categoria->setNomeCategoria($vcat9);
        $categoria->setListaCategoria($vcat9);
        $categoria->setNomeCategoria($vcat10);
        $categoria->setListaCategoria($vcat10);

        header("Location: controller.php");