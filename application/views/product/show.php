<h3>Product</h3>

<?php 
echo '<div class="prod_wrap">';

echo '<div class="left_part">';
	echo '<div class="prod_name"';
		echo '<h3>'.$product[0]['name'].'</h3>';
	echo '</div>';

	echo '<div class="pic_wrap">';
		echo '<img src="../../img/'.$product[0]['pic_name'].'" alt="">';
	echo '</div>';

	echo '<div class="prod_price">Price: <span>'.$product[0]['price'].'</span></div>';

	echo '<div class="prod_desc">Description: <span>'.$product[0]['description'].'</span></div>';


	echo '</div>';
	/**/
	echo '<div class="right_part"><table>';
		echo '<tr><th>Attr-name</th><th>Attr-value</th><th>Attr-code</th></tr>';
		foreach($product[1] as $attr){
			echo '<tr>';
				echo '<td>'.$attr['name'].'</td>';
			
				echo '<td>'.$attr['value'].'</td>';
			
				echo '<td>'.$attr['code'].'</td>';
							
			echo '</tr>';			
		}
		//var_dump($product);
	echo '</table></div>';

echo '</div>';

echo '<div class="navigation">';

$url = parse_url($_SERVER['REQUEST_URI']);
//var_dump($url);
$part = explode('/', $url['path']);

$num = array_pop($part);

$part = implode('/', $part);
if($num > 1){
	$prev = $num-1;
	echo '<a href="'.$part.'/'.$prev.'">prev</a>';
}
//
$countProd = 10;
if($num < $countProd){
	$next = $num+1;
	echo '<a href="'.$part.'/'.$next.'">next</a>';
}



echo '</div>';

?>
