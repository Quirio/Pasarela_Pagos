<?php
	$html = "";
	$_SESSION['cesta']->totalPrice();
	foreach ($_SESSION['cesta']->Elementos as $Elemento) {
		$html .= '<tr>'.
					'<td>'. $Elemento['name'] .'</td>'.
					'<td>'. $Elemento['price'].'</td>'.
					'<td>'. $_SESSION['cesta']->Numero_Typo[$Elemento['id']].'</td>'.
					'<td>'. $Elemento['price'] * $_SESSION['cesta']->Numero_Typo[$Elemento['id']].'€</td>'.
				 '</tr>';
	}

	$html .= '<tr>'.
					'<td></td>'.
					'<td></td>'.
					'<td></td>'.
					'<td>'. $_SESSION['cesta']->TotalPrice.'€</td>'.
			 '</tr>';

	echo $html;
?>