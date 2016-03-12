<!DOCTYPE html>
<html>
	<head>
		<title> SPEEA Shop</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="assets/store_style.css">
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="store_items">
		<?php
      	if($this->session->userdata('is_logged_in') === TRUE)
        	{
        		echo "<h2><u>Hi, <b>" . $this->session->userdata('first_name') . "</b>! Welcome to the SPEEA store!</u></h2>";
        	}
        else
        	{
        		echo "<h2><u>Welcome to the SPEEA store!</u></h2>";
        	}
       ?>
			<div class="shirt jacket">
				<img src="http://www.speea.org/Web%20graphics/photos_store/Blk_Jacket.png" class="clothing" alt="Jacket">
				<p>Lightweight Jacket Navy Blue and Tan ($45)</p>
				<form method = "post" action = "Stores/kaufen">
       				<input type = "hidden" name = "id" value = "2">
       				<input type = "hidden" name = "product_name" value = "Lightweight Jacket Navy Blue and Tan">
       				<input type = "hidden" name = "price" value = "45">
       				<input class = "btn btn-primary" type = "submit" value = "Buy Now!">
      			</form>
			</div>
			<div class="shirt">
				<img src="http://www.speea.org/Web%20graphics/photos_store/Blue_POLO.png" class="clothing" alt="Polo">
				<p>Polo shirts (Mens) Royal Blue ($25)</p>
				<form method = "post" action = "Stores/kaufen">
       				<input type = "hidden" name = "id" value = "6">
       				<input type = "hidden" name = "product_name" value = "Polo Shirt (Men's) Royal Blue">
       				<input type = "hidden" name = "price" value = "25">
       				<input class = "btn btn-primary" type = "submit" value = "Buy Now!">
      			</form>
			</div>
			<div class="shirt">
				<img src="http://www.speea.org/Web%20graphics/photos_store/Denim_shirt.png" class="clothing" alt="Shirt">
				<p>Dark Blue Denim Shirt ($35)</p>
				<form method = "post" action = "Stores/kaufen">
       				<input type = "hidden" name = "id" value = "3">
       				<input type = "hidden" name = "product_name" value = "Dark Blue Denim Shirt">
       				<input type = "hidden" name = "price" value = "35">
       				<input class = "btn btn-primary" type = "submit" value = "Buy Now!">
      			</form>
			</div>
			<div class="shirt">
				<img src="http://www.speea.org/Web%20graphics/photos_store/gray-sweat.png" class="clothing" alt="Sweatshirt">
				<p>Red Sweat Shirt($35)</p>
				<form method = "post" action = "Stores/kaufen">
       				<input type = "hidden" name = "id" value = "4">
       				<input type = "hidden" name = "product_name" value = "Red Sweat Shirt">
       				<input type = "hidden" name = "price" value = "35">
       				<input class = "btn btn-primary" type = "submit" value = "Buy Now!">
      			</form>
			</div>
			<div class="shirt">
				<img src="http://www.speea.org/Web%20graphics/photos_store/tshirts.png" class="clothing" alt="Multiple Shirts">
				<p>Blue, White, and Black Cotton Shirts (Multicolor 3-Pack) ($40)</p>
				<form method = "post" action = "Stores/kaufen">
       				<input type = "hidden" name = "id" value = "5">
       				<input type = "hidden" name = "product_name" value = "Blue, White and Black Cotton Shirts (Multicolor 3-Pack)">
       				<input type = "hidden" name = "price" value = "40">
       				<input class = "btn btn-primary" type = "submit" value = "Buy Now!">
      			</form>
			</div>
		</div>

		<!--TEMPORARY ONLY. This form will allow us to add items to the products database at will. It shouldn't be kept for the final version.-->

		<div id = "form-group">
			<form role = "form" method = "post" action = "Stores/new_product">
			<fieldset>
				<legend><b>FOR DEV USE ONLY. REMOVE FROM THE SITE UPON COMPLETION</b></legend>

				<label>Product Name</label>
				<input type = "text" name = "product_name">

				<label>Price (NUMBERS AND DECIMALS ONLY)</label>
				<input type = "text" name = "price">

				<label>Description</label>
				<input type = "text" name = "description">
				<input type = "submit" value = "Add An Item">
			</fieldset>
		</form>
	</div>
	</body>
</html>