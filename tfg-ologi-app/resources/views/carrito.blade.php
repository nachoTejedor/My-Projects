<!DOCTYPE html>
<html>
<head>
	<title>Shop-Online</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript" src="jquery-3.2.1.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/carrito.css">
	<link rel="stylesheet" type="text/css" href="./scss/homepageStyles.css">
</head>
<body>
	
	<button onclick="topFunction()" id="myBtn" title="Go to top" width="35px" height="35px" align="right">⇑</button>
	
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded" id="nav-main">
	  		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<a class="navbar-brand" href="#" style="padding-left: 12vw; font-size: 30px;">Carrito Ologi </a>
	  		<div class="collapse navbar-collapse" id="navbarNav" style="padding-left: 33vw;" >
	    		<ul class="navbar-nav nav-ul">
	      			<li class="nav-item" >
	        			<a class="nav-link" href="/">Products <span class="sr-only"></span></a>
	      			</li> 
			      <li class="nav-item">
			        	<a class="nav-link" href="#cartmain">Cart</a>
			      </li>
			      <li class="nav-item">
			      	  <a class="nav-link" href="#about">About</a>
			      </li>
	    		</ul>
	  		</div>
		</nav>
	<div class="container-fluid" id="maincontainer">
		<div align="center" id="row1" class="row">
			<div class="col-md-4" style="padding-bottom: 15px;">
				<img src="images/pixel-2.png">
				<div id="pro-info">
					<p class="product-name">Google Pixel</p><p class="product-price">45000</p>
					<button class="btn btn-secondary" id="btn1">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/iphone-7.png">
				<div id="pro-info">
					<p class="product-name">Iphone 7</p><p class="product-price">60000</p>
					<button class="btn btn-secondary" id="btn2">Buy Now</button>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/macbook-pro.png">
				<div id="pro-info">
					<p class="product-name">MacBook Pro</p>
					<p class="product-price">30€</p>
					<button class="btn btn-secondary" id="btn3">Buy Now</button>
				</div>
			</div>
			</div>
        </div>
    </div>  

<div id="cartmain" class="container-fluid">
	<div class="container" id="cart">
		<div class="row">
			<div class="col-md-12" id="cart-heading" align="center">
				Shopping Cart
			</div>
		</div>
		<hr>
		<div class="row" id="table-row">
			<table class="table table-striped" id="item-table">
			  <thead>
			    <tr>
			      <th>Item Id</th>
			      <th>Product Name</th>
			      <th>Price</th>
			      <th>Quantity</th>
			      <th>Total</th>
			    </tr>
			  </thead>
			  <tbody id="item-table-body">

			  </tbody>
			</table>

		</div>
			<div class="row" align="center">
				<div class="col-md-12">
					<div>Grand Total : <label id="totalLabel">0</label>
				</div>
			</div>
		</div>
		<hr>

	</div>
</div>
<div id="about" class="container-fluid">	<!-- This div should contain Information about your company -->
	
	<div class="row" id="about-row">
		<div class="col-md-12" align="center">
		Copyright | Shop-Online
		</div>
	</div>

</div>
<script src="js/carrito.js"></script>
<script src="js/script.js"></script>
</body>
</html>