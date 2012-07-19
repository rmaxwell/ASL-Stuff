<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>STUFF's Videos</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/video.css" />
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
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
									<li><?=anchor('bio', 'Bio');?></li>
									<li><?=anchor('gallery', 'Photos');?></li>
									<li><?=anchor('videos', 'Videos');?></li>
									<li><?=anchor('booking', 'Booking');?></li>
									<li><?=anchor('blog', 'Blog');?></li>
									<li><a href="#">STUFF'S School Show</a></li>
									<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="<?php echo base_url();?>img/f.png"></a></li>
									<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="<?php echo base_url();?>img/t.png"></a></li>
								</ul>
							</nav>
						</div><! End Nav Wrap >
			<div id="contentwrapper">
			<ul class="roundabout-holder">
			    <li class="roundabout-moveable-item roundabout-in-focus"><iframe width="420" height="315" src="http://www.youtube.com/embed/D46fb3s2j94" frameborder="0" allowfullscreen></iframe></li>
			    <li class="roundabout-moveable-item"><iframe width="420" height="315" src="http://www.youtube.com/embed/HFJRNQCHGjI" frameborder="0" allowfullscreen></iframe></li>
			    <li class="roundabout-moveable-item"><iframe width="560" height="315" src="http://www.youtube.com/embed/vc_UuwIpU98" frameborder="0" allowfullscreen></iframe></li>
			    <li class="roundabout-moveable-item"><iframe src="http://player.vimeo.com/video/24516286" width="420" height="315" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
			    <li class="roundabout-moveable-item"><iframe src="http://player.vimeo.com/video/13693690" width="420" height="315" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></li>
			</ul>
			<div id="videoControl">
			    <a href="#" class="prev"></a>
			    <a href="#" class="next"></a>
			</div>
			</div><! End Content Wrapper ->
		</div><! End Main ->
	</div><! End Wrapper ->
	<div id="footwrap">
		<ul>
			<li id="footerlogo"><img src="<?php echo base_url();?>img/logo.png"></li>
			<li><?=anchor('bio', 'Bio');?></li>
			<li><?=anchor('gallery', 'Photos');?></li>
			<li><?=anchor('videos', 'Videos');?></li>
			<li><?=anchor('booking', 'Booking');?></li>
			<li><?=anchor('blog', 'Blog');?></li>
			<li><a href="#">STUFF'S School Show</a></li>
			<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="<?php echo base_url();?>img/f.png"></a></li>
			<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="<?php echo base_url();?>img/t.png"></a></li>
		</ul>
	</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.roundabout.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/video.js"></script>
</body>
</html>