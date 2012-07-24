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
          count: 3
        });
      });
</script>

</head>

<body id="home"> 
	<div id="wrapper">
		<div id="main">
		<div id="navwrap">
		<div id="logowrap">
			<img id="logo" src="<?php echo base_url();?>img/logo.png">
		</div>
		<nav>
			<ul>
				<li><?=anchor('bio', "STUFF's Bio");?></li>
				<li><?=anchor('gallery', 'Photos');?></li>
				<li><?=anchor('videos', 'Videos');?></li>
				<li><?=anchor('booking', 'Booking');?></li>
				<li><?=anchor('blog', 'Blog');?></li>
				<li><?=anchor('school', "STUFF's School Show");?></li>
				<li class="social">
					<img src="img/poweredby2.png" alt=""></br>
				</li>
			</ul>
		</nav>
		</div><!-- End Nav Wrap -->
		<div class="contentwrapper">
		 <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
	            <img src="img/CTA/cta1.jpg" data-thumb="img/CTA/cta1.jpg" alt="" />
	            <a href="bio.html"><img src="img/CTA/cta2.jpg" data-thumb="img/CTA/cta2.jpg" alt="" /></a>
	            <a href="bookStuff.html"><img src="img/CTA/cta3.png" data-thumb="img/CTA/cta3.png" alt="" /></a>
	            <a href="schoolshow.html"><img src="img/CTA/cta4.jpg" data-thumb="img/CTA/cta4.jpg" alt="" /></a>
	            <a href="http://www.facebook.com/pages/Stuff-the-Orlando-Magic-Dragon/196501417034259"><img src="img/CTA/cta5.png" data-thumb="img/CTA/cta5.png" alt="" /></a>    
	            <a href="13by13.html"><img src="img/CTA/cta6.jpg" data-thumb="img/CTA/cta6.jpg" alt="" /></a>  
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
            </div>
        </div>
			<p id="tagline">LOCK UP YOUR PETS. HIDE YOUR TOYS. ITS TIME TO MAKE SOME NOISE!</p>
			<div id="homecontent">
			<div id="columncontent">
				<div class="column" id="col1">
					<h2>STUFF Tweets!</h2>
					<div class="tweet"></div>	
 					<h3><a href="https://twitter.com/STUFF_mascot" id="followstuff" class="twitter-follow-button" data-show-count="false">Follow @STUFF_mascot</a></h3>
				</div>
				<div class="column" id="col2">
					<h2>13 Before 13</h2>
					<table id="progressList">
					  <tr>
					    <td class="progressNumber">1</td>
					    <td class="progressTask"><a href="#">LMFAO Dance Off</a></td>
					    <td class="progressDate">03/23/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">2</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">3</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">4</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">5</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">6</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">7</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">8</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">9</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">10</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">11</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">12</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					  <tr>
					    <td class="progressNumber">13</td>
					    <td class="progressTask"><a href="#">TBA</a></td>
					    <td class="progressDate">01/01/2012</td>
					  </tr>
					</table>
				</div>
				<div class="column" id="col3">
					<h2>Latest Photos</h2>
					
					<img src="img/photo.jpg" alt="">
					<img src="img/photo2.jpg" alt="">
					
				</div>
			</div><!-- End Column Content -->
			</div><!-- End Home Content -->
	</div><!-- End Content Wrapper -->
	</div><!-- End Main -->
	</div><!-- End Wrapper -->
	<div id="footwrap">
		<ul>
			<li id="footerlogo"><img src="<?php echo base_url();?>/img/logo.png"></li>
			<li><?=anchor('bio', 'Bio');?></li>
			<li><?=anchor('gallery', 'Photos');?></li>
			<li><?=anchor('videos', 'Videos');?></li>
			<li><?=anchor('booking', 'Booking');?></li>
			<li><?=anchor('blog', 'Blog');?></li>
			<li><?=anchor('school', "STUFF's School Show");?></li>
			<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="img/f.png"></a></li>
			<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="img/t.png"></a></li>
		</ul>
		<div id="clearfix"></div>
	</div>
	<!--  Note To Backend People
	The settings below maybe different from the settings on the bio page -->
	<script type="text/javascript">
    $(window).load(function() {
   		 $('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed: 1000, // Slide transition speed
        pauseTime: 8000, // How long each slide will show
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: false, // 1,2,3... navigation
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