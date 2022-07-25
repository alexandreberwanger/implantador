<?php

class Produto {

    public $numLoja;
    public $api;
    public $cadastraProduto;
    public $nomeProduto;
    public $nomeSku;
    public $nomeCategoria;
    public $itemCategoria;
    public $idCategoria;
    
    
    public function getNumLoja()
    {
        return $this->numLoja;
    }

    public function setNumLoja($numLoja)
    {
        $this->numLoja = $numLoja;

        return $this;
    }

    public function getApi()
    {
        return $this->api;
    }

    public function setApi($api)
    {
        $this->api = $api;

        return $this;
    }
 
    public function getCadastraProduto()
    {
        return $this->cadastraProduto;
    }

    public function setCadastraProduto()
    {

        //echo "<br>";
        //die ('parou');
        //echo $this->getNumLoja();
       // echo "<br>";
        //echo $this->getApi();
        //echo "<br>";
        //die("aaadada");

       $ch = curl_init();
       curl_setopt_array($ch, [
           CURLOPT_URL => 'https://'.$this->getNumLoja().'.simplo7.net/ws/wsprodutos.json',
           CURLOPT_HTTPHEADER => array(
               'Content-Type: application/json; charset=UTF-8',
               'appKey: '.$this->getApi()
           ),
           CURLOPT_RETURNTRANSFER => true,
           CURLOPT_ENCODING => '',
           CURLOPT_MAXREDIRS => 10,
           CURLOPT_TIMEOUT => 0,
           CURLOPT_FOLLOWLOCATION => true,
           CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
           CURLOPT_POST => 1,
           CURLOPT_POSTFIELDS =>'{
            "Wsproduto":{
               "nome":"'.$this->getNomeProduto().'",
               "descricao":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus vitae turpis vehicula luctus. Vivamus consequat molestie risus quis lobortis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent sit amet lectus eget erat pretium dignissim. Vestibulum sed lectus ac dui pellentesque cursus in pulvinar mauris. Sed vitae blandit risus. Cras rutrum neque non congue tempus. Nulla eu nisi purus. Nam vitae eleifend arcu, at porttitor leo. Proin feugiat accumsan lorem, eu imperdiet felis consequat sed. Vivamus tincidunt dui sit amet ipsum congue fermentum.",
               "descricao_resumida": "Phasellus faucibus sapien eget diam volutpat rhoncus. Aliquam tincidunt tellus sit amet dui interdum, in sollicitudin tellus tincidunt. Cras sit amet lorem ac erat sollicitudin malesuada ac vel erat.",
               "disponivel":1,
               "vitrine":0,
               "lancamento":0,
               "lancamento_data_fim":"",
               "sku":"'.$this->getNomeSku().'",
               "marca_id": null
            },
             "WsprodutoEstoque":[
                {
                   "sku":"100042",
                   "ean": "1234567890123",
                   "quantidade":"5",
                   "valor_venda":"39.90",
                   "promocao":false,
                   "valor_promocao":"0.00",
                   "promocao_data_inicio":"",
                   "promocao_data_fim":"",
                   "altura":"0.10",
                   "largura":"0.28",
                   "comprimento":"0.18",
                   "peso_liquido":"0.25",
                   "combinacao1_id":null,
                   "combinacao_atributo1_id":null,
                   "combinacao2_id":null,
                   "combinacao_atributo2_id":null,
                   "combinacao3_id":null,
                   "combinacao_atributo3_id":null
                }
             ],
            "WsprodutoCategoria":[
               {
                  "categoria_id": "180",
                  "principal":1
               }
            ]
         }',
           CURLOPT_CUSTOMREQUEST => "POST",
       ]);
 
       json_decode(curl_exec($ch));
      //echo "<pre>";
      //print_r($result) ;
      //echo "</pre>";
      //die ('dsadsa');

      //if(!empty($this->getNomeCategoria())){
        #transformando o conteúdo em um JSON
        //json_decode(curl_exec($ch));
           // echo "<br>";
           // echo "Categorias Cadastradas";
           // echo "<br>";
           // header ('Location: http://localhost/api/ListaCat.php');
        //}

        return $this;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;

        return $this;
    }

    public function getNomeSku()
    {

        return $this->nomeSku;
    }

    public function setNomeSku($nomeSku)
    {

        if(empty($nomeSku)){

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            $nomeSku = '';
            for ($i = 0; $i < 7; $i++) {
                $nomeSku .= strtoupper($characters[rand(0, strlen($characters))]);
            }

        }

        $this->nomeSku = $nomeSku;

        return $this;
    }

    public function setNomeCategoria($id)
    {
        /*
       echo "<br>";
       echo $this->getNumLoja();
      echo "<br>";
       echo $this->getApi();
     echo "<br>";
       die("dada");
       */
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
       
       if(empty($listaCategoria->result[$id])){
 
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
                     "nome": "Categoria",
                     "descricao": ""
                 }
             }',
             CURLOPT_CUSTOMREQUEST => "POST",
         ]);
   
         $listaCategoria = json_decode(curl_exec($ch));
 

       }

       $idvalor = $listaCategoria->result[$id]->Wscategoria->id;
       
       
       //echo "<pre>";
       
       //die('das');

       //$val = $listaCategoria->result[$id]->Wscategoria->id;
       print_r($idvalor);
       die ('dsa');
      
       //print_r ($listaCategoria->result[$id]->Wscategoria);
       //die('paro');
         
       //echo $listaCategoria2;
      // die('dentro');
 
       /*
       foreach ($listaCategoria->result as $categoriaLista){
         echo "<pre>";
         print_r($categoriaLista->Wscategoria->nome);
         echo "</pre>";
         print_r($categoriaLista->Wscategoria->id);
         echo "</pre>";
       }*/
 
       //header('Location: http://localhost/api/controller.php');
       //print_r($listaCategoria->result[$id]);
       //die ('dsadsa');
 
       $idvalor = $this->setIdCategoria($idvalor);


       
    }

    public function getNomeCategoria()
    {
        return $this->nomeCategoria;
    }
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @return  self
     */ 
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }
}
