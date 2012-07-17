<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>STUFF The Magic Mascot</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
<script type='text/javascript'>
            jQuery(function($){
        $(".tweet").tweet({
          join_text: "auto",
          username: "STUFF_mascot",
          avatar_size: 0,
          count: 5
        });
      });
</script>

</head>

<body id="home"> 
	<div id="wrapper">
		<div id="main">
		<div id="navwrap">
		<div id="logowrap">
		<a href="home.html"><img id="logo" src="img/logo2.png"></a>
		</div>
		<nav>
			<ul>
				<li><a href="bio.html">STUFF'S Bio</a></li>
				<li><a href="#">Photos</a></li>
				<li><a href="#">Videos</a></li>
				<li><a href="#">Book STUFF!</a></li>
				<li><a href="#">13 Before 13</a></li>
				<li><a href="#">STUFF'S School Show</a></li>
				<li class="social"><a href="#"><img class="social" src="img/f.png"></a></li>
				<li class="social"><a href="#"><img class="social" src="img/t.png"></a></li>
				</ul>
		</nav>
		</div><! End Nav Wrap >
		<div id="contentwrapper">
		 <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider bioslider">
                <img src="img/b1.png" height="603" width="960" data-thumb="img/bioMainwithText.png" alt="" />
                <img src="img/b2.png" height="603" width="960" data-thumb="img/bioMain2.png" alt="" data-transition="slideInRight" />
                <img src="img/b3.png" height="603" width="960" data-thumb="img/bioMain3.png" alt=""/>
            </div>
        </div>
	</div><! End Content Wrapper ->
	</div><! End Main ->
	</div><! End Wrapper ->
	<div id="footwrap">
		<ul>
			<li id="footerlogo"><img src="img/logo2.png"></li>
			<li><a href="#">STUFF'S Bio</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">Videos</a></li>
			<li><a href="#">Book STUFF!</a></li>
			<li><a href="#">13 Before 13</a></li>
			<li><a href="#">STUFF'S School Show</a></li>
			<li class="social"><a href="#"><img class="social" src="img/f.png"></a></li>
			<li class="social"><a href="#"><img class="social" src="img/t.png"></a></li>
		</ul>
	</div>
	<script type="text/javascript">
	$(window).load(function() {
   		 $('#slider').nivoSlider({
        //effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed: 1000, // Slide transition speed
        pauseTime: 10000, // How long each slide will show
        directionNav: true, // Next & Prev navigation
        directionNavHide: false, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: false, // Stop animation while hovering
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        randomStart: false // Start on a random slide
	   	 });
	    });
</script>
</body>
</html>