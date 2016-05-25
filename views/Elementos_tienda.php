<?php 
	require $_SERVER["DOCUMENT_ROOT"].'/static/sql/config.php';
	$sql = 'SELECT * FROM elementos';
	$result = mysql_query($sql);

	$html = "";

	while ($row = mysql_fetch_assoc($result)) {
		$html .= '<div class="row">'.
  						'<div class="col-sm-6 col-md-4">'.
    						'<div class="thumbnail">'.
      							'<img class="img-thumbnail" src="'. $row['url_img'] .'" alt="'. $row['name'].'height="242" width="200">'.
      							'<center><div class="caption">'.
        							'<h3 class="panel-heading">' . $row['name'].'</h3>'.
        							'<h2>' . $row['price'] .'€</h2>'.
        							'<p><a href="index.php?id='.$row['id'].'&name='.$row['name'].'&price='.$row['price'].'"  class="btn btn-primary" role="button">Añadir a carrito</a></p>'.  
        					    '</div></center>'.
        					'</div>'.
        				'</div>'.
        			'</div>' ; 
   	}

	echo $html;	
?>