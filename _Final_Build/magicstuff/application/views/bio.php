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
		<a href="<?php echo base_url();?>"><img id="logo" src="<?php echo base_url();?>/img/logo/logo.png"></a>
		</div>
		<nav>
			<ul>
				<li><?=anchor('bio', "STUFF's Bio");?></li>
				<li><?=anchor('booking', 'Book STUFF!');?></li>
				<li><?=anchor('blog', '13 Before 13');?></li>
				<li><?=anchor('school', "STUFF's School Show");?></li>
				<li><?=anchor('gallery', 'Photos');?></li>
				<li><?=anchor('videos', 'Videos');?></li>
				<li class="social">
					<a href="http://www.fullsail.edu" target="_blank"><img src="<?php echo base_url();?>img/poweredby2.png" alt=""></br></a>
				</li>
			</ul>
		</nav>
		</div><! End Nav Wrap >
		<div class="contentwrapper">
		 <img src="<?php echo base_url();?>img/header/bioHeader.jpg">
	<div id="stuffbio">
		<p id="bio1">
			<? echo $bio_info[0]{'bio_text1'};?>
		</p>
		<div id="bp1">
			<? echo $bio_info[0]{'bio_flavor'};?>
		</div>

		<img id="bp2" width="450" src="<?php echo base_url();?>img/bio/b2.png" alt="">
		<div class="clearfix"></div>
		<img id="bp3" width="450" src="<?php echo base_url();?>img/bio/b1.png" alt="">
		<p id="bio3">
			<? echo $bio_info[0]{'bio_text2'};?>
		</p>
		<img src="<?php echo base_url();?>img/bio/biobottom.png" alt="">
	</div><!-- End Stuff Bio -->
	</div><!-- End Content Wrapper -->
	</div><! End Main ->
	</div><! End Wrapper ->
	<div id="footwrap">
		<ul>
			<li id="footerlogo"><img src="<?php echo base_url();?>/img/logo/logo.png"></li>
			<li><?=anchor('bio', "STUFF's Bio");?></li>
			<li><?=anchor('booking', 'Book STUFF!');?></li>
			<li><?=anchor('blog', '13 Before 13');?></li>
			<li><?=anchor('school', "STUFF's School Show");?></li>
			<li><?=anchor('gallery', 'Photos');?></li>
			<li><?=anchor('videos', 'Videos');?></li>
			<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon" target="_blank"><img class="footsocial" src="<?php echo base_url();?>img/sprites/f.png"></a></li>
			<li class="social"><a href="https://twitter.com/STUFF_Mascot" target="_blank"><img class="footsocial" src="<?php echo base_url();?>img/sprites/t.png"></a></li>
		</ul>
	</div>
</body>
</html>