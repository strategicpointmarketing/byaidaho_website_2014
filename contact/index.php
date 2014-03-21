<!DOCTYPE html>
<html>
<head>
	<!-- Global Meta -->
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/globalMeta.php'; ?>
	<!-- End Global Meta -->
	<title></title>
	<meta name="description" content="Contact idaho outdoor solutions">
	<meta name="keywords" content="contact idaho outdoor solutions, contact idaho outdoor, idaho outdoor contact">
</head>
<body>
	
	<header>
		
		<!-- Main Navigation -->
		<?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/mainNavigation.php'; ?>
		<!-- End Main Navigation -->

	</header>

	<main role="main">
		<section class="contact-idaho-outdoor-solutions">
			<div class="wrapper mtm">
				<h1 class="primary-heading underline-heading paragon-text mtn mbxs">Contact Us</h1>
				<div>					
					<div class="gd-row gt-row">
						<div class="gd-third gd-columns gt-third gt-columns">
							<div class="content-container">
								<h4 class="primer-text mtn">Idaho Outdoor Solutions</h4>
								<p>
								510 Airbase Rd<br>
								Mountain Home, ID 83647</p>
								<p><span itemprop="telephone">(208) 590-6523</span>
								</p>
							</div>
							<div class="content-container contact-form mvs">
								<form action="/contact/engine.php">
									<input type="text" name="Name" placeholder="Name" required>
									<input type="text" name="Email" placeholder="Email" required>
									<input type="text" name="Phone" placeholder="Phone">
									<select name="Interest">
										<option disabled="disabled" selected="selected" required>I am interested in...</option>
									  	<option value="Playsets">Playsets</option>
									  	<option value="Playsets">Sheds</option>
									  	<option value="Surfacing">Surfacing</option>
									  	<option value="Other">Other</option>
									</select>
									<input type="hidden" name="loadtime" value="<?php echo time(); ?>">
									<button name="name" value="value" type="submit" class="button primary rounded small gm-full">Contact Us</button>
									
								</form>
							</div>
						</div>
						<div class="gd-two-thirds gd-columns gt-two-thirds gt-columns">
							<div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2911.926295795007!2d-115.69776169999999!3d43.1270745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54ac2c4386f26079%3A0xdbc7176e75d36218!2s510+Airbase+Rd!5e0!3m2!1sen!2sus!4v1395088497705' width='600' height='350' frameborder='0' style='border:0'></iframe></div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</main>

	<footer>

		<!-- Footer -->
		<?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/footer.php'; ?>
		<!-- End Footer -->

	</footer>

	<!-- Loading Scripts -->
	<?php require $_SERVER['DOCUMENT_ROOT'] . '/views/partials/scripts.inc.php'; ?>
	<!-- End Loading Scripts -->

</body>
</html>