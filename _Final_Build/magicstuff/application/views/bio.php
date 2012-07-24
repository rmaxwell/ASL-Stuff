<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>STUFF The Magic Mascot</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>/themes/default/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/nivo-slider.css" type="text/css" media="screen" />
	
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.tweet.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.nivo.slider.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body id="home">
	<div id="wrapper">
		<div id="main">
		<div id="navwrap">
		<div id="logowrap">
		<a href="<?php echo base_url();?>"><img id="logo" src="<?php echo base_url();?>/img/logo.png"></a>
		</div>
		<nav>
			<ul>
				<li><?=anchor('bio', 'Bio');?></li>
				<li><?=anchor('gallery', 'Photos');?></li>
				<li><?=anchor('videos', 'Videos');?></li>
				<li><?=anchor('booking', 'Booking');?></li>
				<li><?=anchor('blog', 'Blog');?></li>
				<li><?=anchor('school', "STUFF's School Show");?></li>
				<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="<?php echo base_url();?>/img/f.png"></a></li>
				<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="<?php echo base_url();?>/img/t.png"></a></li>
			</ul>
		</nav>
		</div><! End Nav Wrap >
		<div id="contentwrapper">
		 <img src="<?php echo base_url();?>img/bio/bioHeader.png">
	<div id="stuffbio">
	
		<p id="bio1">
			<span class="big">	O</span>n October 27, 1998 a large egg was discovered in front of the Amway Arena. No one is sure what planet it came from or how it arrived in Orlando. Witnesses, however, report a giant explosion followed by a shower of deflated basketballs, Orlando Magic bumper stickers and puffs of green smoke. What emerged after that was a dragon with so much spirit, he just had to be the Magic’s Mascot. <span id="stuffspan">STUFF</span> is one of the most recognizable mascots in professional sports. <span id="stuffspan">STUFF</span> made his community debut at Church Street Station on Halloween night of 1988. He was an instant success and has since relished his role as the team “funny guy.” Full of energy and spark, he is guaranteed to bring a smile to the faces of fans both young and old.
		</p>
		<div id="bp1"><p>" What emerged after that was a dragon with so much spirit, he just had to be the Magic’s Mascot."</p></div>
		<!--
		<div class="clearfix"></div>
		
		<p id="bio2">
			<span id="stuffspan">STUFF</span> is one of the most recognizable mascots in professional sports. <span id="stuffspan">STUFF</span> made his community debut at Church Street Station on Halloween night of 1988. He was an instant success and has since relished his role as the team “funny guy.” Full of energy and spark, he is guaranteed to bring a smile to the faces of fans both young and old.
		</p>
		-->
		<img id="bp2" width="450" src="<?php echo base_url();?>img/bio/b2.png" alt="">
		<div class="clearfix"></div>
		<img id="bp3" width="450" src="<?php echo base_url();?>img/bio/b1.png" alt="">
		<p id="bio3">Though his job is to represent the Magic, <span id="stuffspan">STUFF</span> has gained his own fan-base along the way. His antics as a boisterous and persistent show-off are a hit with everyone. If you are lucky, you may even see the wild wackiness of <span id="stuffspan">STUFF’s</span> inflatable alter ego, Air <span id="stuffspan">STUFF</span> or perhaps you’ve has an opportunity to meet <span id="stuffspan">Mini STUFF</span>! <span id="stuffspan">STUFF</span> can be found at every home Magic game and most Magic-related activities, as well as civic and social events throughout Central Florida.</p>
		<img src="<?php echo base_url();?>img/bio/biobottom.png" alt="">
	</div><!-- End Stuff Bio -->
	</div><!-- End Content Wrapper -->
	</div><! End Main ->
	</div><! End Wrapper ->
	<div id="footwrap">
		<ul>
			<li><?=anchor('bio', 'Bio');?></li>
			<li><?=anchor('gallery', 'Photos');?></li>
			<li><?=anchor('videos', 'Videos');?></li>
			<li><?=anchor('booking', 'Booking');?></li>
			<li><?=anchor('blog', 'Blog');?></li>
			<li><?=anchor('school', "STUFF's School Show");?></li>
			<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="<?php echo base_url();?>/img/f.png"></a></li>
			<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="<?php echo base_url();?>/img/t.png"></a></li>
		</ul>
	</div>
</body>
</html>