<?php 
session_start();

include("connection.php");
error_reporting(0);

$cust= $_SESSION['customer'];
?>

<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="kitchen.php">Kitchen</a></li>
				<li><a href="care.php">Personal Care</a></li>
				<li><a href="snacks.php">Snacks and Branded Foods</a></li>
				<li><a href="bake.php">Bakery, Eggs and Meat</a></li> 
				<li><a href="hold.php">Household</a></li> 
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-4 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="terms.php">Terms & Conditions</a></li>
				<li><a href="faqs.php">FAQs</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="offer.php">Online Shopping</a></li>						 
				 
			</ul>
		</div>
		<?php 
			if(isset($_SESSION['customer']))
			{
				
			?>
		<div class="col-md-4 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="order.php">My Orders</a></li>
				<li><a href="cust-logout.php">Logout</a></li>
				
			</ul>
		</div>
		<?php
			}

			else{
				?>
		<div class="col-md-4 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				
			</ul>
		</div>
		<?php
			}

			?>		
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.php">The Grocery Store<span>The Supermarket</span></a></h2>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			</div>
	</div>
</div>