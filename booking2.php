<!DOCTYPE html>
<!DOCTYPE html>
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Max Hotel </title>
	<link rel="stylesheet" href="css/style.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="css/colours/goldblack.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="css/superfish.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="css/responsive.css" type="text/css"  media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="/js/jquery-1.9.1.js"></script>
	<script src="/js/jquery.cookie.js"></script>
  <script type="text/javascript" src="/js/mmcore.js"></script>
	<script type='text/javascript' src='/js/jquery-ui.js'></script>
	<script type="text/javascript" src="/js/superfish.js"></script>
	<script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="/js/gmap.js"></script>
	<script type="text/javascript" src="/js/scripts.js"></script>
	<script type="text/javascript" src="/js/maxhotel.js"></script>
	<script type="text/javascript" src="http://nerdydata.com/mmcore.js"></script>
</head>
<body class="loading">
	<div id="background-wrapper">
		<div id="wrapper">
			<div id="header-gmap">
				<div id="map-canvas"></div>
			</div>
						<div id="topbar">
							<div id="topbar-wrapper" class="clearfix">
								<div class="topbar-left">
									<a href="#" class="gmap-button"></a>
								</div>
								<div class="topbar-right clearfix">
									<a href="booking1.php" class="button0">Book Now</a>
									<ul id="language-selection">
										<li><a href="#">English</a>
											<ul class="submenu">
												<li><a href="#">French</a></li>
												<li><a href="#">German</a></li>
												<li><a href="#">Italian</a></li>
											</ul>
										</li>
									</ul>
									<ul class="header-contact">
										<li class="phone_icon">+1 212 201 2359</li>
										<li class="email_icon">info@maxymiser.com</li>
									</ul>
								</div>
							</div>
						</div>
						<div role="banner">
							<div class="content-wrapper clearfix">
								<div id="logo">	
									<h1><a href="index.php">Max Hotel</a><span>Optimized Suites</span></h1>
								</div>
								<nav class="main-navigation">
									<ul id="navigation">
										<li class="current-menu-item current_page_item"><a href="index.php"><strong>Home<span>welcome</span></strong></a>
											<ul>
												<li><a href="maxsuites.html">Max Suites</a></li>
												<li><a href="maxeconomy.html">Max Economy</a></li>
												<li><a href="maxcruise.html">Max Cruise</a></li>	
											</ul>
										</li>
										<li><a href="accommodation.html"><strong>Accommodation<span>reservation &amp; rates</span></strong></a>
											<ul class="sub-menu">
												<li><a href="accommodation-single.html">Standard Single Room</a></li>
												<li><a href="accommodation-double.html">Standard Double Room</a></li>
												<li><a href="accommodation-delsuite.html">Deluxe Suite</a></li>
												<li><a href="accommodation-supsuite.html">Superior Suite</a></li>
											</ul>
										</li>
										<li><a href="testimonials.html"><strong>Reviews<span>Reviews</span></strong></a>
											<ul class="sub-menu">
												<li><a href="testimonials.html">Testimonials</a></li>		
											</ul>
										</li>
										<li><a href="events.html"><strong>Occasions<span>events &amp; dining</span></strong></a></li>
											<ul class="sub-menu">
												<li><a href="#">upcoming events</a></li>
												<li><a href="#">dining</a></li>
												<li><a href="blog.html">blog</a></li>
											</ul>
										<li><a href="contact.html"><strong>Contact Us<span>get in touch</span></strong></a>
												<ul class="sub-menu">
													<li><a href="blog.html">Blog</a></li>
												</ul>
										</li>
								</nav>			
								<div class="mobile-menu-wrapper clearfix">
									<div class="mobile-menu-button"></div>
									<div class="mobile-menu-title">Navigation</div>
									<!-- mobile-menu-inner -->
									<div class="mobile-menu-inner">
										<ul id="mobile-menu">
											<li class="current-menu-item current_page_item"><a href="index.php">Home</a>
												<ul>
													<li><a href="index.php">Max Hotel</a></li>
												<li><a href="maxsuites.html">Max Suites  </a></li>
												<li><a href="maxeconomy.html">Max Economy  </a></li>
												<li><a href="maxcruise.html">Max Cruise  </a></li>
												</ul>
											</li>
											<li><a href="accommodation.html">Accommodation</a>
												<ul class="sub-menu">
													<li><a href="accommodation-single.html">Standard Single Room</a></li>
												<li><a href="accommodation-double.html">Standard Double Room</a></li>
												<li><a href="accommodation-delsuite.html">Deluxe Suite</a></li>
												<li><a href="accommodation-supsuite.html">Superior Suite</a></li>
											</ul>
												</ul>
											</li>
											<li><a href="blog.html">Features</a>
												<ul class="sub-menu">
													<li><a href="blog.html">Blkog</a></li>
													<li><a href="testimonials.html">Testimonials</a></li>
												</ul>
											</li>
											<li><a href="events.html">Occasions</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										<!-- END #main-menu -->
										</ul>
									<!-- mobile-menu-inner -->
									</div>
								</div>
							</div>
						</div>
							<div id="page-header" style="background:url(images/example_image_06.png) no-repeat top center;">
								<h2>Reservation: Choose Your Room</h2>
							</div>
							<!-- BEGIN .content-wrapper -->
							<div class="content-wrapper clearfix">
								<!-- BEGIN .booking-step-wrapper -->
								<div class="booking-step-wrapper clearfix">
									<div class="step-wrapper">
										<div class="step-icon-wrapper">
											<div class="step-icon">1.</div>
										</div>
										<div class="step-title">Choose Your Date</div>
									</div>
									<div class="step-wrapper">
										<div class="step-icon-wrapper">
											<div class="step-icon step-icon-current">2.</div>
										</div>
										<div class="step-title">Choose Your Room</div>
									</div>
									<div class="step-wrapper">
										<div class="step-icon-wrapper">
											<div class="step-icon">3.</div>
										</div>
										<div class="step-title">Place Your Reservation</div>
									</div>
									<div class="step-wrapper last-col">
										<div class="step-icon-wrapper">
											<div class="step-icon">4.</div>
										</div>
										<div class="step-title">Confirmation</div>
									</div>
									<div class="step-line"></div>
								</div>
								<div class="booking-main-wrapper">
									<div class="booking-main">
										<h4 class="title-style4">Choose Your Room<span class="title-block"></span></h4>
										<ul class="room-list-wrapper clearfix">
											<li class="room-item clearfix">
												<h5>Single Room</h5>
												<div class="room-list-left">
													<img src="images/thumb1.jpg" alt="" />
												</div>
												<div class="room-list-right">
													<div class="room-meta">
														<ul>
															<li><span>Occupancy:</span> 1-2 Persons</li>
															<li><span>Size:</span> 35-40sqm / 375-430sqf</li>
															<li><span>View:</span> City</li>
														</ul>
													</div>
													<div class="room-price">
														<p class="price">From: <span>$299</span> / Night</p>
													</div>
													<div class="clearboth"></div>
													<form id="singleroom" class="booking-form" name="bookroom" action="booking3.php" method="post">
														<input type="hidden"  value="SingleRoom" name="room">
														<input type="hidden"  name="cost" value="299">
														<?php
						    							if($_POST['book_room_adults']){
						      							echo '<input type="hidden" name="book_room_adults" value="' . $_POST['book_room_adults'] . '">';
						    							}
						  						  ?>
														<input type="hidden" value="book_date_to">
														<input type="hidden" value="book_room_adults">
														<input class="button2" type="submit" name="twinbeds" value="Select This Room">
													</form>
												</div>	
											</li>
											<li class="room-item clearfix">
												<h5>Double Room</h5>
												<div class="room-list-left">
													<img src="images/thumb2.jpg" alt="" />
												</div>
												<div class="room-list-right">
													<div class="room-meta">
														<ul>
															<li><span>Occupancy:</span> 2-4 Persons</li>
															<li><span>Size:</span> 35-40sqm / 375-430sqf</li>
															<li><span>View:</span> City</li>
														</ul>
													</div>
													<div class="room-price">
														<p class="price">From: <span>$399</span> / Night</p>
													</div>
													<div class="clearboth"></div>
													<form id="doubleroom"class="booking-form" name="bookroom" action="booking3.php" method="post">
														<input type="hidden"  value="DoubleRoom" name="room">
														<input type="hidden"  name="cost" value="399">
														<input class="button2" type="submit" name="twinbeds" value="Select This Room">
													</form>
												</div>	
											</li>
											<li class="room-item clearfix">
												<h5>Deluxe Suite</h5>
												<div class="room-list-left">
													<img src="images/thumb3.jpg" alt="" />
												</div>
												<div class="room-list-right">
													<div class="room-meta">
														<ul>
															<li><span>Occupancy:</span> 2-4 Persons</li>
															<li><span>Size:</span> 35-40sqm / 375-430sqf</li>
															<li><span>View:</span> City</li>
														</ul>
													</div>
													<div class="room-price">
														<p class="price">From: <span>$699</span> / Night</p>
													</div>
													<div class="clearboth"></div>
													<form id="delsuite" class="booking-form" name="bookroom" action="booking3.php" method="post">
														<input type="hidden"  value="DeluxeSuite" name="room">
														<input type="hidden" name="cost" value="699">
														<input class="button2" type="submit" name="twinbeds" value="Select This Room">
													</form>
												</div>	
											</li>
											<li class="room-item clearfix">
												<h5>Superior Suite</h5>
												<div class="room-list-left">
													<img src="images/thumb4.jpg" alt="" />
												</div>
												<div class="room-list-right">
													<div class="room-meta">
														<ul>
															<li><span>Occupancy:</span> 3-6 Persons</li>
															<li><span>Size:</span> 35-40sqm / 375-430sqf</li>
															<li><span>View:</span> City</li>
														</ul>
													</div>
													<div class="room-price">
														<p class="price">From: <span>$899</span> / Night</p>
													</div>
													<div class="clearboth"></div>
													<form id="supsuite" class="booking-form" name="bookroom" action="booking3.php" method="post">
														<input type="hidden" value="SuperiorSuite" name="room">
														<input type="hidden"  name="cost" value="899">
														<input class="button2" type="submit" name="twinbeds" value="Select This Room">
													</form>
												</div>	
											</li>
										</ul>
									</div>
								</div>
								<div class="booking-side-wrapper">
									<div class="booking-side clearfix">
										<h4 class="title-style4">Your Reservation<span class="title-block"></span></h4>
										<ul>
											<li><span>Dates: </span> 
												<div class="dates">   
													<div id="from">
													<?php
						    							if($_POST['book_date_from']){
						      							echo $_POST['book_date_from'];
						    							}
						  						?>
						  					  </div>
						  						<div id="to">
						  						<?php
						    							if($_POST['book_date_to']){
						      							echo $_POST['book_date_to'];
						    							}
						  						?>
						  					</div>
					  						</div>
					  					</li>
											<li><span>Guests: </span> 
												<div id="ppl"> 
													<?php
						    							if($_POST['book_room_adults']){
						      							echo $_POST['book_room_adults'];
						    							}
						  						?>
												</div>
											</li>
											<li><span>Nights: </span> 
												<div id="nights"> 
												</div>
											</li>
										</ul>
										<a href="booking1.php" class="button3">Edit Reservation</a>
									</div>
								</div>
							</div>
						</div>
						<div id="footer-bottom" class="clearfix">
							<p class="fl">&copy; 2014 Max Hotel. All Rights Reserved</p>
								<nav class="secondary-navigation">
									<ul class="fr">
										<li><a href="accommodation.html">Accommodation</a></li>
										<li><a href="booking1.php">Book Now</a></li>
										<li><a href="contact.html">Directions &amp; Map</a></li>
									</ul>
								</nav>
						</div>
				</div>
		</div>
	</div>
</div>
</body>
</html>