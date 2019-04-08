<p>page list of products</p>

<?php 
//debug($vars['products']);

$products = $vars['products'];
echo '<div class="prod_table">';

foreach($products as $prod){
	echo '<div class="prod_wrap">';		
		echo '<div class="prod_name"><a href="http://'.$_SERVER['SERVER_NAME'].'/product/show/'.$prod['id'].'">'.$prod['name'].'</a></div>';
		echo '<div class="prod_price">Price: '.$prod['price'].'$</div>';
		echo '<div class="prod_desc">Description: '.$prod['description'].'</div>';
		echo '<a href="http://'.$_SERVER['SERVER_NAME'].'/product/edit/'.$prod['id'].'">Edit</a>';
	echo '</div>';
}

echo '</div>';

?>