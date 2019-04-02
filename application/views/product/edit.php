<h3>Edit Product</h3>

<?php

//var_dump($product[1]);
echo '<form class="form" action="" method="post" enctype="multipart/form-data">';

	echo '<label> Name: 
		<input type="text" name="name" value="'.$product[0]['name'].'">
	</label>';
	
	echo '<label> Price: 
		<input type="text" name="price" value="'.$product[0]['price'].'">
	</label>';
	
	echo '<label> Description: 
		<textarea name="description" id="" cols="30" rows="10">'.$product[0]['description'].'</textarea>
	</label>';
	
	echo '<label> Products picture:
		<input type="file" name="file" id="file"> <span>Now selected: </span>'.$product[0]['pic_name'].'
		<div class="mini_pic"><img src="../../img/'.$product[0]['pic_name'].'" alt=""></div>
	</label>';

	echo '<input type="submit" value="Update">';

echo '</form>';




?>