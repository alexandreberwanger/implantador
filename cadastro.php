
<!doctype html>
<html lang="pt-br">
	<head>
		<title> Implantador </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Alexandre Berwanger">
		<meta name="description" content="Página Inicial">
		<!--LINK CSS-->
		<link rel="stylesheet" type="text/css" href="../css/style-css.css">
		<!--LINK CDN BOOTSTRAP-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
    <body>
        <div class="container-fluid">
        </div>
        <div class="container">
        <div class="container-principal-produtos">
         <h4 class="page-header">CADASTRO DE CATEGORIA</h4>
         <hr>
            <form action="../cadastro.php" method="GET" enctype="multipart/form-data" name="f_cadCat">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Nome da Categoria:</label>
                  <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="cadastraCat" placeholder="Digite o nome da Categoria" required/>
                </div>      
                  <div class="form-group col-md-2">
                    <label>Categoria Pai:</label>
                    <select  name="c_categoria_pai" class="form-control form-control-sm col-md-10 col-sm-10" placeholder="Selecione a Categoria Pai">
                      <option value="">Padrão</option>
                   </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                                <!--Realizando Upload de Imagem-->
                            <label class="control-label">Imagem</label>
                            <input class="form-control" type="file" name="img">
                  </div> 
              </div>
              <div class="row">
                <div class="form-group col-md-8">
                  <label>Descrição da Categoria:</label>
                  <textarea cols="4" rows="2" class="form-control col-md-8" name="c_desc" placeholder="Digite alguma descrição para a categoria"></textarea> 
                </div>
              </div>
              <input type="submit" class="btn btn-primary" name="btn_enviar" value="Cadastrar">
            </form>
          </div>
       </div><!--Fechando container bootstrap-->     
  </body>
  <?php
include 'ModelCategoria.php';
$criaCategoria = new Categoria();

$vcat = $_GET["cadastraCat"]; 
$criaCategoria->getApi();
$criaCategoria->getNumLoja();

$criaCategoria->setNomeCategoria($vcat);
$criaCategoria->setListaCategoria($vcat);
$criaCategoria->getListaCategoria();
?>
</html>
