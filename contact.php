<!doctype html>
<html lang="en" dir="ltr">
	<head> 	<!-- meta data -->
		<meta charset="UTF-8">
		<title>White Owl NZ</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="This website is about the jewellery business White Owl NZ" />
		<meta name="author" content="Maria Ahkit" />
		<meta name="copyright" content="Copyright 2014 Maria Ahkit" />
		<meta name="robots" content= "noindex, nofollow" />
		<meta name="keywords" content="contact white owl">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<!-- begin container to centre layout in middle of page -->
		<div id="container">
			<!-- This holds everything -->
			<header>
				<h1>White Owl NZ</h1>
			</header>
				<!-- navigation -->
			<nav>
				<a href="http://localhost/devtest/WhiteOwlV6/index.php"><button>Home Page</button></a>
				<a href="http://localhost/devtest/WhiteOwlV6/contact.php"><button>Contact Us</button></a>
				
			</nav> <!-- end navigation -->
			<!-- begin main column -->
			<article>
				<h1>Contact Us</h1>
				<form method="post" action="contact.php">
					<p>
						<label for="name">Name</label>
						<input type="text" id="name" name="name" />
					</p>
					
					<p>
						<label for="email">Email</label>
						<input type="text" id="email" name="email" />
					</p>
					
					<p>
						<label for="message">Message</label>
						<textarea id="message" name="message" rows="6" cols="30"></textarea>
					</p>
					
					<p>
						<input type="submit" name="send" value="Send message" />
					</p>
				</form>
				
				
				<?php

				// Test if the form has been submitted
				if(isset($_POST['send'])) {
					// Prepare the email
					$to = 'mariaahkit.student@gmail.com';
					$subject = 'Message sent from website';
					$message = $_POST['message'];
					// Send it
					$sent = mail($to, $subject, $message);
					if($sent) {
						echo 'Your message has been sent';
					} else {
						echo 'Sorry, your message could not send.';
					}
				}

				?>
			</article> <!-- end main column -->
				
			<!-- begin side column -->
			<div id="article2">
				<img src="assets/logo.jpg" alt="White Owl NZ logo">
			
				<h3>About White Owl</h3>
				<p>White Owl NZ is a small business located in Wellington, New Zealand. It was founded in 2013 by two teenage girls who wanted to make a little extra money by doing something that they love.</p>

				<p>There is a range of both imported and handmade jewellery on offer as well as handpainted shoes. They are also open to hearing any custom orders/requests that you have and work hard to produce something that you will love.</p> 
			</div> <!-- end side column -->
			
			<!-- begin footer -->
			<footer>
				<p id="ftext">Copyright &copy; White Owl NZ 2013 <br>
					<span id="date_time"></span>
					<script type="text/javascript">window.onload = date_time('date_time');</script>
				</p>
			</footer><!-- end footer -->

		</div><!-- end container -->
	</body>
</html>