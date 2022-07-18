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

      $listaCategoria = json_decode(curl_exec($ch));
      echo "<pre>";
      #print_r($listaCategoria->result);

      foreach ($listaCategoria->result as $categoriaLista){
        echo "<pre>";
        print_r($categoriaLista->Wscategoria->nome);
        echo "</pre>";
      }

      //header('Location: http://localhost/api/controller.php');
      
     // die ('dsadsa');


        return $this->listaCategoria;
        
    }

    public function setListaCategoria($listaCategoria){

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
                   "nome": "'.$this->getNomeCategoria().'",
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




        $this->listaCategoria = $listaCategoria;
    }



}