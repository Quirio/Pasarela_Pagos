<!DOCTYPE html>
 
<html lang="es">
 
<head>
  <title>Tienda de prueba</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="views\css\index.css">

  <?php require 'static\globales.php'; ?>
</head>
 
<body>
    <div class="page-header ">
 		 <h1>Game Shop<small>  Tienda de prueba creada para la UNIR</small></h1>
     <a href="views\chart.php"  class="btn btn-primary" role="button">Carrito <span class="glyphicon glyphicon-shopping-cart"></span></a>
     <?php  ?>
	  </div>
    <div class="row" id="Elementos">      
      <?php require 'views\Elementos_tienda.php'; ?>
    </div>
    <footer>
        Creado por Alejandro Hernández 
    </footer>

    <?php 
    	if($_GET){
    		$_SESSION['cesta']->addElemento($arrayName = array('id' => $_GET['id'], 'name'=> $_GET['name'], 'price' => $_GET['price']));
    	}    	
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>