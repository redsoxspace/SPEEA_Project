<html>
<head>
	<head>
		<title>Checkout</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="assets/contactstyles.css" rel="stylesheet">
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
</head>
<body>
	<?php //require_once('./config.php'); ?>
		<h3 class = "locations">Ready To Check Out?</h3>

			<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="2">Your Shopping Cart</th>
				</tr>
			</thead>
				<tr>
					<td>
						<h5> <?php  echo $this->session->userdata('product_name'); ?></h5>
					</td>
					<td>
						<h5><?php  echo '$' . $this->session->userdata('price'); ?></h5>
					</td>
				</tr>
			</table>

	<form class = 'locations' action="charge.php" method="post">
	  		<script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
	          data-key="<?php echo $stripe['publishable_key']; ?>"
	          data-amount="5000" data-description="Buy our SPEEA Gear">
	        </script>
	 </form> 
</body>
</html>
