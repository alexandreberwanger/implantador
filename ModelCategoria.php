<?php
use Categoria as GlobalCategoria;

class Categoria {
  
    public $numeroCategoria;
    public $formCategoria;
    public $cadastraCategoria;
    public $listaCategoria;
    public $editaCategoria;
    public $nomeCategoria;

    public function getNomeCategoria(){
        return $this->nomeCategoria;
    }

    public function setNomeCategoria($nomeCategoria){
        $this->nomeCategoria = $nomeCategoria;
    }

    public function setFormCategoria($formCategoria){    
        $this->formCategoria = $formCategoria;

        //header ('Location: http://localhost/api/index.php');
    }

    public function getNumeroCategoria(){
        return $this->numeroCategoria;
    }

    public function getNumLoja(){
        $arquivo =  "codLoja.ini";
        $fp = fopen($arquivo, "r");
        $iniCodLoja = fread($fp, filesize($arquivo));
        fclose($fp);
        return $this->numLoja = $iniCodloja;
    }

    public function getApi(){
        $arquivo = "apikey.ini";
        $fp = fopen($arquivo, "r");
        $iniApiKey = fread($fp, filesize($arquivo));
        fclose($fp);
        return $this->api = $iniApiKey;
    }

    public function setNumeroCategoria($numeroCategoria){
        $this->numeroCategoria = $numeroCategoria;
    }

    public function getCadastraCategoria(){
        return $this->cadastraCategoria;
    }

    public function setCadastraCategoria($cadastraCategoria){
        $this->cadastraCategoria = $cadastraCategoria;
    }

    public function getListaCategoria(){   
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
      return $this->listaCategoria;
        
    }

    public function setListaCategoria($listaCategoria){
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
            echo "<br>";
            echo "<br>";
        $this->listaCategoria = $listaCategoria;
    }
}