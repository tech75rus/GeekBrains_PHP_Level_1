<?php
require_once 'connect.php';
print_r($res['name']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detail_product</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		<div class="header head_detail_product">
			<div class="main">
				<a href="#"><img class="logo" src="img/logo.png" alt=""></a>
				<nav>
					<ul>
						<li><a href="#">home</a></li>
						<li><a href="index.php">product</a></li>
						<li><a href="#">history</a></li>
						<li><a href="detail_product.php">showroom</a></li>
						<li><a href="#">contact</a></li>
						<li><a href="#"><img src="img/search.png" alt="search"></a></li>
					</ul>
				</nav>
				
			</div>
		</div>


		<div class="detail_product">
			<div class="nav">
				<div class="main">
					<ul>               
						<li><a href="#">ALL</a></li>
						<li><a href="#">HOME</a></li>
						<li><a href="#">OFFICE</a></li>
						<li><a href="#">FURNITURE</a></li>
						<li><a href="#">MODERN</a></li>
						<li><a href="#">CLASSIC</a></li>
					</ul>
				</div>
			</div>
			<div class="main">
				<div class="slide_product">
					<div>
						<img src="img/slider1.jpg" alt="slider">
					</div>
					<div class="min_img">
						<div><img src="img/controll.jpg" alt=""></div>
						<div><img src="img/controll11.jpg" alt=""></div>
						<div><img src="img/controll2.jpg" alt=""></div>
					</div>
				</div>
				<div class="description_product">
					<h3>Fishnet Chair</h3>
					<h4>HOT DEAL</h4>
					<p class="price">$&nbsp;<span>36.7</span>/sq</p>
					<a href="#" class="button">ORDER US</a>
					<p>he majesty of Mountains - Ugmonk style.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
					<p>et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
					
				</div>
			</div>
		</div>
		<div class="clear"></div>
		

		<div class="section_3">
			<div class="main">
				<h2>Trending Products</h2>
				<a href="#">
					<h3>EXPLORE ALL</h3>	
				</a>

				<div class="products clear">
					<div class="product_img">
						<a href="detail_product.php"><img src="img/product-11.jpg" alt="product"></a>
						<div class="preference">
							<a href="detail_product.php" class="button"></a>
							<h3>Fishnet Chair</h3>
							<p>Seat and backwith upholstery made of cold cure foam</p>
						</div>
					</div>
					<div class="product_img">
						<a href="detail_product.php"><img src="img/product-21.jpg" alt="product"></a>
						<div class="preference">
							<a href="detail_product.php" class="button"></a>
							<h3>Fishnet Chair</h3>
							<p>Seat and backwith upholstery made of cold cure foam</p>
						</div>
					</div>
					<div class="product_img">
						<a href="detail_product.php"><img src="img/product-31.jpg" alt="product"></a>
						<div class="preference">
							<a href="detail_product.php" class="button"></a>
							<h3>Fishnet Chair</h3>
							<p>Seat and backwith upholstery made of cold cure foam</p>
						</div>
					</div>
					
					
				</div>
				
			</div>
		</div>
	

		<div class="invisible_footer">
		
		</div>	
		
	</div>
	<div class="footer">
		<div class="main">
			<div class="information">

				<div class="contact_us block_footer">
					<h3>CONTACT US</h3>
					<p>132A Bridge Road Richmond VIC Australia.</p>
					<p>Talk to us on 1300 132 info@interior.com</p>
				</div>

				<div class="useful_information block_footer">
					<h3>USEFUL INFORMATION</h3>
					<ul>
						<li><a href="#">Sales terms</a></li>
						<li><a href="#">Customer care</a></li>
						<li><a href="#">Delivery</a></li>
					</ul>
					<ul>
						<li><a href="#">Architect accounts</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">Exchanges & returns</a></li>
					</ul>
				</div>
				<div class="stay_email block_footer">
					<h3>LET'S STAY IN TOUCH</h3>
					<p>Suscribe to know about our latest news, products and special offers just for suscribers.</p>
					<form>
						<input type="email" placeholder="your email address">
						<input type="submit" value="">
					</form>
				</div>
			</div>
			<div class="clear"></div>
			<div class="copyright">
				<p>&copy;&nbsp;Copyright&nbsp;&mdash; INTERIOR 2016. All Rights Reserved.</p>
					
				<div class="social clear">
					<a href="#"><i class="fab fa-facebook-square"></i></a>
					<a href="#"><i class="fab fa-pinterest-square"></i></a>
					<a href="#"><i class="fab fa-google-plus-square"></i></a>
					<a href="#"><i class="fab fa-twitter-square"></i></a>
				</div>
				<p>Terms &amp;&nbsp;Conditions&nbsp;/ Privacy policy &amp;&nbsp;Cookies</p>
			</div>
		</div>
	</div>
	
</body>
</html>