<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>STUFF The Magic Mascot</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>css/nivo-slider.css" type="text/css" media="screen" />
	
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>js/jquery.nivo.slider.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
</head>

<body id="home"> 
	<div id="wrapper">
		<div id="main">
		<div id="navwrap">
		<div id="logowrap">
		<a href="home.html"><img id="logo" src="<?php echo base_url();?>img/logo.png"></a>
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
			    	<img src="<?php echo base_url();?>img/poweredby2.png" alt=""></br>
			    </li>
			</ul>		
		</nav>
		</div><!-- End Nav Wrap -->
	<div class="contentwrapper">
	<img class="headerImg" src="<?php echo base_url();?>img/header/stuff_school.jpg">
	<div id="schoolShow">
		<div id="schoolShowContent">
			<p><span class="threee">STUFF</span> travels the Central Florida area spreading the excitement of the Orlando Magic brand to elementary schools through his school show, "<span class="threee">STUFF's THREEE Point Play.</span>" That's not a typo!  We spell THREEE with three E's because the show focus on the three E's to becoming a better student...<br><br><span id="threee">Eat Right, Exercise and Education.</span><br><br>
	<span class="threee">STUFF</span> spreads the message through a 45 minute performance and interactive DVD.  Students get to play a healthy food guessing game with Magic players, get to stand up and dance with <span class="threee">STUFF</span> and also get to read a book titled "<span class="threee">STUFF's Game Day.</span>" "<span class="threee">STUFF's THREEE Point Play</span>"" is filled with Magic, excitement, entertainment, knowledgeable information and fun!</p><br>
			<p>
			To see more about "<span class="threee">STUFF's THREEE Point Play</span>" watch the video or view the photo gallery.
			</p><br>
			<p>
			If you are a school administrator, principal or teacher and would like to have "<span class="threee">STUFF's THREE Point Play</span> "come to your school call <span class="threee">407-916-2671</span> or email <span class="threee">stuff@orlandomagic.com</span>.
			</p>
		</div>
		<img src="<?php echo base_url();?>img/stuffBasketball.png">
	</div><!-- End Stuff School Show -->
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
			<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="<?php echo base_url();?>img/f.png"></a></li>
			<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="<?php echo base_url();?>img/t.png"></a></li>
		</ul>
		<div id="clearfix"></div>
	</div>
</body>
</html>