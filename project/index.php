<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">

		<div class="header products_page">
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
				<div class="head_text">
					<h3>Our Products Range</h3>
				</div>
			</div>
		</div>
		
		<div class="section_3">
			<div class="main">
				<div class="featured_new">
					<a href="#">
						<h2 class="action">All</h2>
					</a>
					<a href="#">
						<h2>Home</h2>
					</a>
					<a href="#">
						<h2>Office</h2>
					</a>
					<a href="#">
						<h2>Furniture</h2>
					</a>
					<a href="#">
						<h2>Modern</h2>
					</a>
					<a href="#">
						<h2>Classic</h2>
					</a>
				</div>

				<div class="products clear">

                <?php
                    while($res = mysqli_fetch_assoc($query_img)){
                        echo '<div class="product_img">';
                            echo '<a href="detail_product.php"><img src="' . $res['path'] . '" alt="product" id=""></a>';
                            echo '<div class="preference">';
                                echo '<a href="detail_product.php" class="button"></a>';
                                echo '<h3>Fishnet Chair</h3>';
                                echo '<p>Seat and backwith upholstery made of cold cure foam</p>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>

				</div>

				<div class="still">
					<a href="#">
						<img src="img/still.png" alt="still">
					</a>
				</div>
				
			</div>
		</div>


		<div class="section_2">
			<div class="main_exclusive">
				<div class="one">
					<div class="head_text">
						<h4>TRENDING</h4>
						<h3>Fishnet Chair</h3>
						<p>Seat and back with upholstery made og&nbsp;cold cure foam. Steel frame available in&nbsp;matt</p>
						<a href="#" class="button">ORDER US</a>
					</div>
				</div>
				<div class="two">
					<div class="head_text">
						<h4>TRENDING</h4>
						<h3>Fishnet Chair</h3>
						<p>Seat and back with upholstery made og&nbsp;cold cure foam. Steel frame available in&nbsp;matt</p>
						<a href="#" class="button">ORDER US</a>
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