<h3>Add Product</h3>

<?php

//var_dump($product[1]);
echo '<form class="form" action="" method="post" enctype="multipart/form-data">';

	echo '<label> Name: 
		<input type="text" name="name" >
	</label>';
	
	echo '<label> Price: 
		<input type="text" name="price" >
	</label>';
	
	echo '<label> Description: 
		<textarea name="description" id="" cols="30" rows="10"></textarea>
	</label>';
	
	echo '<label> Products picture:
		<input type="file" name="file" id="file"> 		
	</label>';

	echo '<input type="submit" value="Add">';

echo '</form>';




?>