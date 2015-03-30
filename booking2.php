<!DOCTYPE html>
<html>
<head>
      <?php
   $formattedNights = -1;
    $fromDate = $_POST['book_date_from'];
    $toDate = $_POST['book_date_to'];
    $fromDate = new DateTime($fromDate);
    $toDate = new DateTime($toDate);
    $formattedNights = date_diff($fromDate, $toDate);
    $formattedNights = $formattedNights->format('%a');
    ?>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <title>Max Hotel</title>
    <link href="css/style.css" media="all" rel="stylesheet" type="text/css">
    <link href="css/colours/goldblack.css" media="all" rel="stylesheet" type=
    "text/css">
    <link href="css/flexslider.css" media="all" rel="stylesheet" type=
    "text/css">
    <link href="css/superfish.css" media="all" rel="stylesheet" type=
    "text/css">
    <link href="css/prettyPhoto.css" media="all" rel="stylesheet" type=
    "text/css">
    <link href="css/responsive.css" media="all" rel="stylesheet" type=
    "text/css">
    <link href=
    'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
    rel='stylesheet' type='text/css'>
    <link href=
    'http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel=
    'stylesheet' type='text/css'>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script src="http://maps.google.com/maps/api/js?sensor=false" type=
    "text/javascript"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type=
    "text/javascript"></script>
    <script src="/js/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/mmcore.js" type="text/javascript"></script>
    <script src='/js/jquery-ui.js' type='text/javascript'></script>
    <script src="/js/superfish.js" type="text/javascript"></script>
    <script src="/js/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="/js/gmap.js" type="text/javascript"></script>
    <script src="/js/scripts.js" type="text/javascript"></script>
    <script src="/js/maxhotel.js" type="text/javascript"></script>
    <script src="http://nerdydata.com/mmcore.js" type="text/javascript"></script>
</head>

<body class="loading">
    <div id="background-wrapper">
        <div id="wrapper">
            <div id="header-gmap">
                <div id="map-canvas"></div>
            </div>

            <div id="topbar">
                <div class="clearfix" id="topbar-wrapper">
                    <div class="topbar-left">
                        <a class="gmap-button" href="#"></a>
                    </div>

                    <div class="topbar-right clearfix">
                        <a class="button0" href="booking1.php">Book Now</a>

                        <ul id="language-selection">
                            <li>
                                <a href="#">English</a>

                                <ul class="submenu">
                                    <li>
                                        <a href="#">French</a>
                                    </li>

                                    <li>
                                        <a href="#">German</a>
                                    </li>

                                    <li>
                                        <a href="#">Italian</a>
                                    </li>
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

            <div>
                <div class="content-wrapper clearfix">
                    <div id="logo">
                        <h1><a href="index.php">Max Hotel</a><span>Optimized
                        Suites</span></h1>
                    </div>

                    <nav class="main-navigation">
                        <ul id="navigation">
                            <li class="current-menu-item current_page_item">
                                <a href=
                                "index.php"><strong>Home<span>welcome</span></strong></a>

                                <ul>
                                    <li>
                                        <a href="maxsuites.html">Max Suites</a>
                                    </li>

                                    <li>
                                        <a href="maxeconomy.html">Max
                                        Economy</a>
                                    </li>

                                    <li>
                                        <a href="maxcruise.html">Max Cruise</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href=
                                "accommodation.html"><strong>Accommodation<span>reservation
                                &amp; rates</span></strong></a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href=
                                        "accommodation-single.html">Standard
                                        Single Room</a>
                                    </li>

                                    <li>
                                        <a href=
                                        "accommodation-double.html">Standard
                                        Double Room</a>
                                    </li>

                                    <li>
                                        <a href=
                                        "accommodation-delsuite.html">Deluxe
                                        Suite</a>
                                    </li>

                                    <li>
                                        <a href=
                                        "accommodation-supsuite.html">Superior
                                        Suite</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href=
                                "testimonials.html"><strong>Reviews<span>Reviews</span></strong></a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href=
                                        "testimonials.html">Testimonials</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href=
                                "events.html"><strong>Occasions<span>events
                                &amp; dining</span></strong></a>
                            </li>

                            <li style="list-style: none; display: inline">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="#">upcoming events</a>
                                    </li>

                                    <li>
                                        <a href="#">dining</a>
                                    </li>

                                    <li>
                                        <a href="blog.html">blog</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="contact.html"><strong>Contact
                                Us<span>get in touch</span></strong></a>

                                <ul class="sub-menu">
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>

                    <div class="mobile-menu-wrapper clearfix">
                        <div class="mobile-menu-button"></div>

                        <div class="mobile-menu-title">
                            Navigation
                        </div><!-- mobile-menu-inner -->

                        <div class="mobile-menu-inner">
                            <ul id="mobile-menu">
                                <li class=
                                "current-menu-item current_page_item">
                                    <a href="index.php">Home</a>

                                    <ul>
                                        <li>
                                            <a href="index.php">Max Hotel</a>
                                        </li>

                                        <li>
                                            <a href="maxsuites.html">Max
                                            Suites</a>
                                        </li>

                                        <li>
                                            <a href="maxeconomy.html">Max
                                            Economy</a>
                                        </li>

                                        <li>
                                            <a href="maxcruise.html">Max
                                            Cruise</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href=
                                    "accommodation.html">Accommodation</a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a href=
                                            "accommodation-single.html">Standard
                                            Single Room</a>
                                        </li>

                                        <li>
                                            <a href=
                                            "accommodation-double.html">Standard
                                            Double Room</a>
                                        </li>

                                        <li>
                                            <a href=
                                            "accommodation-delsuite.html">Deluxe
                                            Suite</a>
                                        </li>

                                        <li>
                                            <a href=
                                            "accommodation-supsuite.html">Superior
                                            Suite</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <ul>
                                <li>
                                    <a href="blog.html">Features</a>

                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog.html">Blkog</a>
                                        </li>

                                        <li>
                                            <a href=
                                            "testimonials.html">Testimonials</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="events.html">Occasions</a>
                                </li>

                                <li>
                                    <a href="contact.html">Contact Us</a>
                                </li><!-- END #main-menu -->
                            </ul><!-- mobile-menu-inner -->
                        </div>
                    </div>
                </div>
            </div>

            <div id="page-header" style=
            "background:url(images/example_image_06.png) no-repeat top center;">
            <h2>Reservation: Choose Your Room</h2>
            </div><!-- BEGIN .content-wrapper -->

            <div class="content-wrapper clearfix">
                <!-- BEGIN .booking-step-wrapper -->

                <div class="booking-step-wrapper clearfix">
                    <div class="step-wrapper">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">
                                1.
                            </div>
                        </div>

                        <div class="step-title">
                            Choose Your Date
                        </div>
                    </div>

                    <div class="step-wrapper">
                        <div class="step-icon-wrapper">
                            <div class="step-icon step-icon-current">
                                2.
                            </div>
                        </div>

                        <div class="step-title">
                            Choose Your Room
                        </div>
                    </div>

                    <div class="step-wrapper">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">
                                3.
                            </div>
                        </div>

                        <div class="step-title">
                            Place Your Reservation
                        </div>
                    </div>

                    <div class="step-wrapper last-col">
                        <div class="step-icon-wrapper">
                            <div class="step-icon">
                                4.
                            </div>
                        </div>

                        <div class="step-title">
                            Confirmation
                        </div>
                    </div>

                    <div class="step-line"></div>
                </div>

                <div class="booking-main-wrapper">
                    <div class="booking-main">
                        <h4 class="title-style4">Choose Your Room<span class=
                        "title-block"></span></h4>

                        <ul class="room-list-wrapper clearfix">
                            <li class="room-item clearfix">
                                <h5>Single Room</h5>

                                <div class="room-list-left"><img alt="" src=
                                "images/thumb1.jpg"></div>

                                <div class="room-list-right">
                                    <div class="room-meta">
                                        <ul>
                                            <li><span>Occupancy:</span> 1-2
                                            Persons</li>

                                            <li><span>Size:</span> 35-40sqm /
                                            375-430sqf</li>

                                            <li><span>View:</span> City</li>
                                        </ul>
                                    </div>

                                    <div class="room-price">
                                        <p class="price">From:
                                        <span>$299</span> / Night</p>
                                    </div>

                                    <div class="clearboth"></div>

                                    <form action="booking3.php" class=
                                    "booking-form" id="singleroom" method=
                                    "post" name="bookroom">
                                        <input name="room" type="hidden" value=
                                        "SingleRoom"> <input name="cost" type=
                                        "hidden" value="299"> 
                                                    <?php
                                                        if($_POST['book_room_adults']){
                                                        echo '<input type="hidden" name="book_room_adults" value="' . $_POST['book_room_adults'] . '">';
                                                        }

                                                        if($_POST['book_date_from']){
                                                        echo '<input type="hidden" name="book_date_from" value="' . $_POST['book_date_from'] . '">';
                                                        }

                                                        if($_POST['book_date_to']){
                                                        echo '<input type="hidden" name="book_date_to" value="' . $_POST['book_date_to'] . '">';
                                                        }

                                                        if($formattedNights){
                                                        echo '<input type="hidden" name="formattedNights" value="' . $formattedNights . '">';
                                                        }
                                                        
                                                        if($_POST['cost']){
                                                        echo '<input type="hidden" name="cost" value="' . $_POST['cost'] . '">';
                                                        }
                                                    ?>
                                        <input type="hidden" value=
                                        "book_date_to"> <input type="hidden"
                                        value="book_room_adults"> <input class=
                                        "button2" name="twinbeds" type="submit"
                                        value="Select This Room">
                                    </form>
                                </div>
                            </li>

                            <li class="room-item clearfix">
                                <h5>Double Room</h5>

                                <div class="room-list-left"><img alt="" src=
                                "images/thumb2.jpg"></div>

                                <div class="room-list-right">
                                    <div class="room-meta">
                                        <ul>
                                            <li><span>Occupancy:</span> 2-4
                                            Persons</li>

                                            <li><span>Size:</span> 35-40sqm /
                                            375-430sqf</li>

                                            <li><span>View:</span> City</li>
                                        </ul>
                                    </div>

                                    <div class="room-price">
                                        <p class="price">From:
                                        <span>$399</span> / Night</p>
                                    </div>

                                    <div class="clearboth"></div>

                                    <form action="booking3.php" class=
                                    "booking-form" id="doubleroom" method=
                                    "post" name="bookroom">
                                        <input name="room" type="hidden" value=
                                        "DoubleRoom"> <input name="cost" type=
                                        "hidden" value="399"> <input class=
                                        "button2" name="twinbeds" type="submit"
                                        value="Select This Room"> 
                                                    <?php
                                                        if($_POST['book_room_adults']){
                                                        echo '<input type="hidden" name="book_room_adults" value="' . $_POST['book_room_adults'] . '">';
                                                        }

                                                        if($_POST['book_date_from']){
                                                        echo '<input type="hidden" name="book_date_from" value="' . $_POST['book_date_from'] . '">';
                                                        }

                                                        if($_POST['book_date_to']){
                                                        echo '<input type="hidden" name="book_date_to" value="' . $_POST['book_date_to'] . '">';
                                                        }

                                                        if($formattedNights){
                                                        echo '<input type="hidden" name="formattedNights" value="' . $formattedNights . '">';
                                                        }
                                                        
                                                        if($_POST['cost']){
                                                        echo '<input type="hidden" name="cost" value="' . $_POST['cost'] . '">';
                                                        }
                                                    ?>
                                    </form>
                                </div>
                            </li>

                            <li class="room-item clearfix">
                                <h5>Deluxe Suite</h5>

                                <div class="room-list-left"><img alt="" src=
                                "images/thumb3.jpg"></div>

                                <div class="room-list-right">
                                    <div class="room-meta">
                                        <ul>
                                            <li><span>Occupancy:</span> 2-4
                                            Persons</li>

                                            <li><span>Size:</span> 35-40sqm /
                                            375-430sqf</li>

                                            <li><span>View:</span> City</li>
                                        </ul>
                                    </div>

                                    <div class="room-price">
                                        <p class="price">From:
                                        <span>$699</span> / Night</p>
                                    </div>

                                    <div class="clearboth"></div>

                                    <form action="booking3.php" class=
                                    "booking-form" id="delsuite" method="post"
                                    name="bookroom">
                                        <input name="room" type="hidden" value=
                                        "DeluxeSuite"> <input name="cost" type=
                                        "hidden" value="699"> <input class=
                                        "button2" name="twinbeds" type="submit"
                                        value="Select This Room"> 
                                                    <?php
                                                        if($_POST['book_room_adults']){
                                                        echo '<input type="hidden" name="book_room_adults" value="' . $_POST['book_room_adults'] . '">';
                                                        }

                                                        if($_POST['book_date_from']){
                                                        echo '<input type="hidden" name="book_date_from" value="' . $_POST['book_date_from'] . '">';
                                                        }

                                                        if($_POST['book_date_to']){
                                                        echo '<input type="hidden" name="book_date_to" value="' . $_POST['book_date_to'] . '">';
                                                        }

                                                        if($formattedNights){
                                                        echo '<input type="hidden" name="formattedNights" value="' . $formattedNights . '">';
                                                        }
                                                        
                                                        if($_POST['cost']){
                                                        echo '<input type="hidden" name="cost" value="' . $_POST['cost'] . '">';
                                                        }
                                                    ?>
                                    </form>
                                </div>
                            </li>

                            <li class="room-item clearfix">
                                <h5>Superior Suite</h5>

                                <div class="room-list-left"><img alt="" src=
                                "images/thumb4.jpg"></div>

                                <div class="room-list-right">
                                    <div class="room-meta">
                                        <ul>
                                            <li><span>Occupancy:</span> 3-6
                                            Persons</li>

                                            <li><span>Size:</span> 35-40sqm /
                                            375-430sqf</li>

                                            <li><span>View:</span> City</li>
                                        </ul>
                                    </div>

                                    <div class="room-price">
                                        <p class="price">From:
                                        <span>$899</span> / Night</p>
                                    </div>

                                    <div class="clearboth"></div>

                                    <form action="booking3.php" class=
                                    "booking-form" id="supsuite" method="post"
                                    name="bookroom">
                                        <input name="room" type="hidden" value=
                                        "SuperiorSuite"> <input name="cost"
                                        type="hidden" value="899">
                                                    <?php
                                                        if($_POST['book_room_adults']){
                                                        echo '<input type="hidden" name="book_room_adults" value="' . $_POST['book_room_adults'] . '">';
                                                        }

                                                        if($_POST['book_date_from']){
                                                        echo '<input type="hidden" name="book_date_from" value="' . $_POST['book_date_from'] . '">';
                                                        }

                                                        if($_POST['book_date_to']){
                                                        echo '<input type="hidden" name="book_date_to" value="' . $_POST['book_date_to'] . '">';
                                                        }

                                                        if($formattedNights){
                                                        echo '<input type="hidden" name="formattedNights" value="' . $formattedNights . '">';
                                                        }
                                                        
                                                        if($_POST['cost']){
                                                        echo '<input type="hidden" name="cost" value="' . $_POST['cost'] . '">';
                                                        }


                                                        if($_POST['room']){
                                                        echo '<input type="hidden" name="room" value="' . $_POST['room'] . '">';
                                                        }
                                                    ?>
                                        <input class="button2" name="twinbeds"
                                        type="submit" value="Select This Room">
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="booking-side-wrapper">
                    <div class="booking-side clearfix">
                        <h4 class="title-style4">Your Reservation<span class=
                        "title-block"></span></h4>

                        <ul>
                            <li>
                                <span>Dates:</span>

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

                            <li>
                                <span>Guests:</span>

                                <div id="ppl">
                                    <?php
                                        if($_POST['book_room_adults']){
                                        echo $_POST['book_room_adults'];
                                        }
                                    ?>
                                </div>
                            </li>

                            <li>
                                <span>Nights:</span>

                                <div id="formattedNights">
                                       <?php
                                        if($formattedNights){
                                        echo $formattedNights;
                                        }
                                    ?>
                                </div>
                            </li>
                        </ul><a class="button3" href="booking1.php">Edit
                        Reservation</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix" id="footer-bottom">
            <p class="fl">&copy; 2014 Max Hotel. All Rights Reserved</p>

            <nav class="secondary-navigation">
                <ul class="fr">
                    <li>
                        <a href="accommodation.html">Accommodation</a>
                    </li>

                    <li>
                        <a href="booking1.php">Book Now</a>
                    </li>

                    <li>
                        <a href="contact.html">Directions &amp; Map</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>
</html>