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
		<a href="<?php echo base_url();?>"><img id="logo" src="<?php echo base_url();?>img/logo/logo.png"></a>
		</div>
		<nav>
			<ul>
				<li><?=anchor('bio', "STUFF's Bio");?></li>
				<li><?=anchor('booking', 'Book STUFF!');?></li>
				<li><a href="<?=base_url();?>index.php/blog"><?php 
						for($i=0; $i<count($blog_info); $i++){
	  					  if($blog_info[$i]{"blog_visible"}==1){
	    					echo $blog_info[$i]{"blog_title"};
	  					  }
						};
				?></a></li>
				<li><?=anchor('school', "STUFF's School Show");?></li>
				<li><?=anchor('gallery', 'Photos');?></li>
				<li><?=anchor('videos', 'Videos');?></li>
				<li class="social">
					<a href="http://www.fullsail.edu" target="_blank"><img src="<?php echo base_url();?>img/poweredby2.png" alt=""></br></a>
				</li>
			</ul>	
		</nav>
		</div><!-- End Nav Wrap -->
	<div class="contentwrapper">
	<img class="headerImg" src="<?php echo base_url();?>img/header/stuffSchoolShowHeader.jpg">
	<div id="schoolShow">
		<div id="schoolShowContent">
			<?php echo $school_info[0]{'school_textarea'};?>
		</div>
		<img src="<?php echo base_url();?>img/stuffBasketball.png">
	</div><!-- End Stuff School Show -->
	</div><!-- End Content Wrapper -->
	</div><!-- End Main -->
	</div><!-- End Wrapper -->
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
		<div id="clearfix"></div>
	</div>
</body>
</html>