<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPEEA Payment</title>
</head>
<body>
<div class="container">
<?php
require_once('.../stripe-php-3.5.0/init.php');

$stripe = array(
  "secret_key"      => "sk_test_sUrPWHSkXrWi2QeBe5hPId4Q",
  "publishable_key" => "pk_test_pnMw9UtL7Le4dtTohWqMzdlo"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

if($_POST) {
} else {
	echo "Welcome, buy some SPEEA Gear!";
}

?>
</div>
</body>
</html>