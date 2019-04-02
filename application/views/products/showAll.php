<p>page list of products</p>

<?php 
//debug($vars['products']);

$products = $vars['products'];
echo '<div class="prod_table">';

foreach($products as $prod){
	echo '<div class="prod_wrap">';		
		echo '<div class="prod_name">'.$prod['name'].'</div>';
		echo '<div class="prod_price">Price: '.$prod['price'].'$</div>';
		echo '<div class="prod_desc">Description: '.$prod['description'].'</div>';
		echo '<a href="">Edit</a>';
	echo '</div>';
}

echo '</div>';

?>