<?php 
	require "..\static\sql\config.php";
	$sql = "SELECT * FROM `Elementos`";
	$result = mysql_query($sql);
	$html = "";

	while ($row = mysql_fetch_assoc($result)) {
		$html << "<section>".
					"<h2>" . $row['name']."</h2>".
					"<h3>" . $row['price'] ."</h3>".
					'<img src="'. $row['url_img'] .'" alt="'. $row['name'] .'" height="42" width="42">'.
				  "</section>";	
	}

?>