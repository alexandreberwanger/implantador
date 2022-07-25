<?php

use Categoria as GlobalCategoria;
use Symfony\Component\Console\Input\Input;

//header ('Location: http://localhost/api/index.php');

class Categoria {
  
    public $cadastraCategoria;
    public $listaCategoria;
    public $numLoja;
    public $api;
    public $nomeCategoria;
    public $categoriaId;
    public $categoriaNome;
    public $subCategoria;
    public $categoriaUm;
    public $categoriaIdUm;

    public function getNomeCategoria(){
        return $this->nomeCategoria;
    }

    public function setNomeCategoria($nomeCategoria){
        $this->nomeCategoria = $nomeCategoria;
    }

    public function getNumLoja(){
        return $this->numLoja;
    }

    public function getApi(){
        return $this->api;
    }

    public function setNumLoja($numLoja){
        $this->numLoja = $numLoja;
    }

    public function setApi($api){
        $this->api = $api;
    }

    
    public function getListaCategoria(){
    
      // echo "<br>";
       // echo $this->getNumLoja();
      // echo "<br>";
       //echo $this->getApi();
     // echo "<br>";
       //die("dada");
       
      $ch = curl_init();
      curl_setopt_array($ch, [
          CURLOPT_URL => 'https://'.$this->getNumLoja().'.simplo7.net/ws/wscategorias.json',
          CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json; charset=UTF-8',
              'appKey: '.$this->getApi()
          ),
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_RETURNTRANSFER => 1,
          CURLOPT_CUSTOMREQUEST => "GET",
      ]);
      $listaCategoria = null;
      $listaCategoria = json_decode(curl_exec($ch));
      //echo "<pre>";
      

      //print_r ($listaCategoria->result[$id]->Wscategoria->id);
    
      //print_r ($listaCategoria->result[$id]->Wscategoria);
      //die('paro');
        
      //echo $listaCategoria = $listaCategoria->result[$this->getCategoriaId()]->Wscategoria->id;
      //die('dentro');

      echo " ID   | NOME (LISTA DE CATEGORIAS)";
      echo "<br>";
      echo "___________";
      
      foreach ($listaCategoria->result as $categoriaLista){
        echo "<pre>";
        print_r($categoriaLista->Wscategoria->id);
        echo " | ";

        if (empty($categoriaLista->Wscategoria->parent_id))
        {
        print_r($categoriaLista->Wscategoria->nome);
        echo "</pre>";}
         else {
            echo "__";
            print_r($categoriaLista->Wscategoria->nome);
            echo "</pre>";}
         }
        

     //$this->setCategoriaUm($listaCategoria->result[0]->Wscategoria->nome);
     //$this->setCategoriaIdUm($listaCategoria->result[0]->Wscategoria->id);

      //header('Location: http://localhost/api/controller.php');
      
     // die ('dsadsa');


        return $this->listaCategoria;
        
    }


    public function setListaCategoria($listaCategoria){

        $nomeCat = empty($nomeCat) ? $this->getNomeCategoria() : "Categoria";

        echo $this->getNomeCategoria();
        echo "<br>";
        //die ('parou');
        echo $this->getNumLoja();
        echo "<br>";
        echo $this->getApi();
        echo "<br>";
        #die("aaadada");

       $ch = curl_init();
       curl_setopt_array($ch, [
           CURLOPT_URL => 'https://'.$this->getNumLoja().'.simplo7.net/ws/wscategorias.json',
           CURLOPT_HTTPHEADER => array(
               'Content-Type: application/json; charset=UTF-8',
               'appKey: '.$this->getApi()
           ),
           CURLOPT_SSL_VERIFYPEER => 0,
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_POST => 1,
           CURLOPT_POSTFIELDS=>
           '{
               "Wscategoria": {
                   "parent_id": null,
                   "ativo": true,
                   "nome": "'.$nomeCat.'",
                   "descricao": ""
               }
           }',
           CURLOPT_CUSTOMREQUEST => "POST",
       ]);
 
       json_decode(curl_exec($ch));
       //echo "<pre>";
       //print_r($listaCategoria) ;
       //echo "</pre>";
      //die ('dsadsa');

      //if(!empty($this->getNomeCategoria())){
        #transformando o conteúdo em um JSON
        //json_decode(curl_exec($ch));
            echo "<br>";
           // echo "Categorias Cadastradas";
            echo "<br>";
           // header ('Location: http://localhost/api/ListaCat.php');
        //}


        curl_close($ch);

        $this->listaCategoria = $listaCategoria;
    }


    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    public function setCategoriaId($categoriaId)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    public function getSubCategoria()
    {
        return $this->subCategoria;
    }

    public function setSubCategoria($subCategoria)
    {

        $nomeCat = empty($nomeCat) ? $this->getNomeCategoria() : "Categoria";

        echo $this->getNomeCategoria();
        echo "<br>";
        //die ('parou');
        echo $this->getNumLoja();
        echo "<br>";
        echo $this->getApi();
        echo "<br>";
        echo $this->getCategoriaId();
        echo "<br>";
        //die("aaadada");

       $ch = curl_init();
       curl_setopt_array($ch, [
           CURLOPT_URL => 'https://'.$this->getNumLoja().'.simplo7.net/ws/wscategorias.json',
           CURLOPT_HTTPHEADER => array(
               'Content-Type: application/json; charset=UTF-8',
               'appKey: '.$this->getApi()
           ),
           CURLOPT_SSL_VERIFYPEER => 0,
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_POST => 1,
           CURLOPT_POSTFIELDS=>
           '{
               "Wscategoria": {
                   "parent_id": '.$this->getCategoriaId().',
                   "ativo": true,
                   "nome": "'.$nomeCat.'",
                   "descricao": ""
               }
           }',
           CURLOPT_CUSTOMREQUEST => "POST",
       ]);
 
       json_decode(curl_exec($ch));
       //echo "<pre>";
       //print_r($listaCategoria) ;
       //echo "</pre>";
      //die ('dsadsa');

      //if(!empty($this->getNomeCategoria())){
        #transformando o conteúdo em um JSON
        //json_decode(curl_exec($ch));
            echo "<br>";
           // echo "Categorias Cadastradas";
            echo "<br>";
           // header ('Location: http://localhost/api/ListaCat.php');
        //}


        curl_close($ch);

        $this->subCategoria = $subCategoria;

        return $this;
    }


    public function getCategoriaUm()
    {
        
        return $this->categoriaUm;
    }


    public function setCategoriaUm($categoriaUm)
    {   
        
        $this->categoriaUm = $categoriaUm;
        
        return $this;
    }

    public function getCategoriaIdUm()
    {
        return $this->categoriaIdUm;
    }

    public function setCategoriaIdUm($categoriaIdUm)
    {
        $this->categoriaIdUm = $categoriaIdUm;

        return $this;
    }
}