<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/custom.css" rel="stylesheet">
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
      <?php
        if($this->session->userdata('is_logged_in') === TRUE)
          {
          echo 
            "<div class = 'cheshire'><form action = '/sessions/destroy' method = 'post'>
            <input type = 'submit' value = 'Log out'>
            </form></div>"; 
          }
          
        if($this->session->userdata('product_name') !== FALSE)
          {
          echo 
            "<div class = 'cheshire'><form action = 'buy' method = 'post'>
            <input type = 'submit' value = 'Shopping Cart'>
            </form></div>"; 
          }
       ?>
   <!--navigation does here-->  
    <div id="mi_sub_header">
    <img src="assets/speea_smlogo.png">    
    </div>
    <div class="navbar-inner">  
      <div class="container">  
      <ul class="nav navbar-nav">
        <li><a href="home" class="white">Home</a></li>
        <li><a href="contact" class="white">Contact Us</a></li>
        <li><a href="shop" class="white">Store</a></li>
        <li><a href="join" class="white">Join Your Union </a></li>
        <li><a href="login" class="white">Login</a></li>
      </ul>
      </div>
    </div>
	</body>
</html>