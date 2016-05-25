<?php
	require '../static/globales.php';
	$ClaveEncriptacion = "87401456";
	$MerchantID = "082108630"; //Id de un comercio de prueba
	$AcquirerBIN = "0000554002"; //Id de una caja de prueba
	$TerminalId = "00000003"; //Id de una terminal de prueba
	$Num_operacion = "001";
	$Importe = $_SESSION['cesta']->TotalPrice;
	$TipoMoneda = "978";
	$Exponente = "2";
	$Cadena = "SHA1";
	$URL_OK = "http://tiendaunir.eshost.com.ar/";
	$URL_NOK = "http://tiendaunir.eshost.com.ar/";

	$firma = SHA1($ClaveEncriptacion.$MerchantID.$AcquirerBIN.$TerminalId.$Num_operacion.$Importe.$TipoMoneda.$Exponente.$Cadena.$URL_OK.$URL_NOK);


	$html =     '<INPUT NAME="MerchantID" TYPE=hidden VALUE=”082108630”><INPUT NAME="AcquirerBIN" TYPE=hidden VALUE=”0000554002”><INPUT hidden="true" NAME="TerminalID" TYPE=hidden VALUE=”00000003”><INPUT NAME="URL_OK" TYPE=hidden VALUE=”http://tiendaunir.eshost.com.ar/”><INPUT NAME="URL_NOK" TYPE=hidden VALUE=”http://tiendaunir.eshost.com.ar/”><INPUT hidden="true" NAME="Firma" TYPE=hidden VALUE=”'.$firma.'”><INPUT NAME="Cifrado" TYPE=hidden VALUE=”SHA1”><INPUT NAME="Num_operacion" TYPE=hidden VALUE=”'.$Num_operacion.'”><INPUT hidden="true" NAME="Importe" TYPE=hidden VALUE=”'.$Importe.'”><INPUT NAME="TipoMoneda" TYPE=hidden VALUE=”978”><INPUT NAME="Exponente" TYPE=hidden VALUE=”2”><INPUT NAME=”Pago_soportado” TYPE=hidden VALUE=”SSL”><INPUT NAME=”Idioma” TYPE=hidden VALUE=”1”>';

				echo $html;
?>