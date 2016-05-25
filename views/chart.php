<!DOCTYPE html>
 
<html lang="es">
 
<head>
  <title>Tienda de prueba</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="views\css\index.css">
  <?php require '../static/globales.php'; ?>

</head>
<body>
	<div class="page-header ">
 		 <h1>Game Shop<small>  Tienda de prueba creada para la UNIR</small></h1>
    	 <a href="../index.php?volver=''" class="btn btn-primary" role="button">Volver a la tienda <span class="glyphicon glyphicon-share-alt"></span></a>
    	 <a href="../views/chart.php?reinicio=true" class="btn btn-primary" role="button">Vaciar la cesta<span class="glyphicon glyphicon-share-alt"></span></a>    	
    </div>
	</div>
	<section>
	    <h2>Carrito de compra</h2>	
	    <div class="table-responsive">                
		 	<table class="table">
		 		<thead>
				 	<tr>
			        	<th>Producto</th>
			        	<th>Precio</th>
			        	<th>Cantidad</th>
			        	<th>Precio Total</th>
		      		</tr>
	   			</thead>
	   			<tbody>	   			
		 			<?php require "tabla.php"; ?>
		 		</tbody>
		 		<imput 
		 	</table>			
		</div>	
 	</section>
 		<?php 
					$ClaveEncriptacion = "87401456";
					$MerchantID = "082108630"; //Id de un comercio de prueba
					$AcquirerBIN = "0000554002"; //Id de una caja de prueba
					$TerminalId = "00000003"; //Id de una terminal de prueba
					$Num_operacion = "001";
					$Importe = str_replace('.', '',"".$_SESSION['cesta']->TotalPrice);
					echo $Importe;
					$TipoMoneda = "978";
					$Exponente = "2";
					$Cadena = "SHA1";
					$URL_OK = "http://tiendaunir.eshost.com.ar/";
					$URL_NOK = "http://tiendaunir.eshost.com.ar/";
					echo $ClaveEncriptacion.$MerchantID.$AcquirerBIN.$TerminalId.$Num_operacion.$Importe.$TipoMoneda.$Exponente.$Cadena.$URL_OK.$URL_NOK;
					$firma = SHA1($ClaveEncriptacion.$MerchantID.$AcquirerBIN.$TerminalId.$Num_operacion.$Importe.$TipoMoneda.$Exponente.$Cadena.$URL_OK.$URL_NOK);

					echo '<FORM ACTION="http://tpv.ceca.es:8000/cgi-bin/tpv" METHOD="POST" ENCTYPE="application/xwww-form-urlencoded">'.
						 '<INPUT NAME="MerchantID"  VALUE=082108630>
						 <INPUT NAME="AcquirerBIN"  VALUE=0000554002>
						 <INPUT hidden="true" NAME="TerminalID" TYPE=hidden VALUE=00000003>
						 <INPUT NAME="URL_OK"  VALUE=http://tiendaunir.eshost.com.ar/>
						 <INPUT NAME="URL_NOK"  VALUE=http://tiendaunir.eshost.com.ar/>
						 <INPUT NAME="Firma"  VALUE='.$firma.'>
						 <INPUT NAME="Cifrado"  VALUE=SHA1>
						 <INPUT NAME="Num_operacion"  VALUE='.$Num_operacion.'>
						 <INPUT NAME="Importe"  VALUE='.$Importe.'>
						 <INPUT NAME="TipoMoneda"  VALUE=978>
						 <INPUT NAME="Exponente"  VALUE=2>
						 <INPUT NAME=”Pago_soportado”  VALUE=SSL>
						 <INPUT NAME=”Idioma”  VALUE=1>'.'<center><INPUT class="btn btn-primary" TYPE="submit" VALUE="Pagar Ahora"<span class="glyphicon glyphicon-share-alt"></span></center></FORM>';


				?>
    <footer>
    <?php
	    if(array_key_exists('reinicio', $_GET)){
    		session_destroy();
    		header( "Location: ../index.php?reinicio=true " );
	    }
	?>
	        Creado por Alejandro Hernández 
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
