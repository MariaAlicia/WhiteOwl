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
		<meta name="keywords" content="jewellery handmade shoes hand-painted white owl">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<script type="text/javascript" src="date_time.js"></script>
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5-els.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<iframe class="btn" border="0" allowtransparency="true" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&tumblelog=whiteowlnz&color_scheme=dark" scrolling="no" width="113" frameborder="0" height="25"></iframe>
		
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			
		<!-- begin container to centre layout in middle of page -->
		<div id="container">
			<!-- This holds everything -->
			<header>
				<h1>White Owl NZ</h1> 
				
			<SCRIPT language = "JavaScript">
					var usrcheck="WhiteOwl";
					var usrname=prompt ('Enter username',' ');
				
					var passcheck="dalek"; var password=prompt ('Enter Password',' ');
					//the prompt command sets the default answer to ' '

					if 
						(password==passcheck && usrname==usrcheck) ;
					else
					//redirects to new page if incorrect password, this can be localhost
						{window.location="http://www.google.co.nz";}
			</SCRIPT> 
			
			</header>
				<!-- navigation -->
			<nav>
				<a href="http://localhost/devtest/WhiteOwlV6/index.php"><button>Home Page</button></a>
				<a href="http://localhost/devtest/WhiteOwlV6/contact.php"><button>Contact Us</button></a>
			</nav> <!-- end navigation -->
			<!-- begin main column -->
			<article>
				<h3>Examples of hand-painted shoes</h3>
		
				<p>Below are some of the shoes we have made for clients. As you can see we have a range of skills and are capable of painting a variety of different images. We do this through our collective experiences including (but not limited to), working with watercolours, painting with acryllics, experimenting with glitter (and other mediums) etc... For more information about what we do or how we do it, please don't hesitate to contact us through Facebook :)  </p>
				
				<?php
				/*the directory/folder to open*/
					$dir_name = "images";
					$dir_thumb = "images-thumb";

				/*open up the directory*/
					$directory = @opendir ($dir_name);
					if(!$directory) {
					//There was no result
						echo "There is a problem with the website.";
						die ("I suggest you try again later.");
					}
					
					while ($file=readdir($directory)){
						$path_info = pathinfo($file);
						$extension = $path_info['extension'];
						if ($extension != 'jpg') {
							continue; //skip current iteration of loop from here
						}
						
						echo '<a href="images/'.$file.'" target="_blank"><figure><img src="'. $dir_thumb . '/' . $file. '"><figcaption>'.basename($file,".jpg").'</figcaption></figure></a>';
					
					}
				?>
			
			</article> <!-- end main column -->
				
			<!-- begin side column -->
			<div id="article2">
				<img src="assets/logo.jpg" alt="White Owl NZ logo">
				
				<h3>About White Owl</h3>
				<div class="fb-like" data-href="https://www.facebook.com/WhiteOwlNZ" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
				<br>
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