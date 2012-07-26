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
				<li><?=anchor('blog', '13 Before 13');?></li>
				<li><?=anchor('school', "STUFF's School Show");?></li>
				<li><?=anchor('gallery', 'Photos');?></li>
				<li><?=anchor('videos', 'Videos');?></li>
				<li class="social">
					<a href="http://www.fullsail.edu" target="_blank"><img src="<?php echo base_url();?>img/poweredby2.png" alt=""></br></a>
				</li>
			</ul>	
		</ul>
		</nav>	
		</div><! End Nav Wrap >
		<div class="contentwrapper">
		<img src="<?php echo base_url();?>img/header/13Before13Header.jpg" alt="">
		     <div id="small13">
            <p><span>On</span> any given day during the offseason, you can catch STUFF doing his typical offseason routine. An appearance here and there, planning videos, chasing dogs, and working on in-game skits.</p><br />
            <p><span>One</span> hot summer day in 2012 STUFF was reading his fan mail and a Magic fan wrote to STUFF telling him how she wanted to meet him and get an autograph.This request really got STUFF thinking... what did he want to do? Was there someone he wanted to meet? Was there something he wanted to accomplish?</p><br />
            <p><span>STUFF</span> started working on a list of things and it came out to 15 things he wanted to achieve. He took out the part about eating 30 wheels of cheese and ixnayed the thought of spinning plates. He then discovered that there was 13 things on his list. 13 things to accomplish before 2013.</p>
        </div>
			<ul id="nav13">
            	<li class="arrow"><a href="#">1</a></li>
                <li class="arrow"><a href="#">2</a></li>
                <li class="arrow"><a href="#">3</a></li>
                <li class="arrow"><a href="#">4</a></li>
                <li class="arrow"><a href="#">5</a></li>
                <li class="arrow"><a href="#">6</a></li>
                <li class="arrow"><a href="#">7</a></li>
                <li class="arrow"><a href="#">8</a></li>
                <li class="arrow"><a href="#">9</a></li>
                <li class="arrow"><a href="#">10</a></li>
                <li class="arrow"><a href="#">11</a></li>
                <li class="arrow"><a href="#">12</a></li>
                <li class="arrow"><a href="#">13</a></li>
            </ul>
			<div id="homecontent">
            	<div id="blog">
                	<div class="blogModule 1">
                    	<div class="blogPhoto"><img src="13images/1a.jpg" width="460px" height="280px" /></div>
                        <div class="blogTitle"><h3>Day 1: Dance off with LMFAO</h3></div>
                        <div class="blogContent">
                        	<p>Magna aliquam erat volutpat ut wisi enim ad minim veniam quis? Sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Legentis in iis qui, facit eorum claritatem Investigationes. Ea commodo consequat duis autem vel eum iriure dolor in hendrerit in vulputate velit. Eodem modo typi qui nunc nobis videntur parum clari fiant sollemnes in.</p><br /><p>Magna aliquam erat volutpat ut wisi enim ad minim veniam quis? Sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Legentis in iis qui, facit eorum claritatem Investigationes. Ea commodo consequat duis autem vel eum iriure dolor in hendrerit in vulputate velit. Eodem modo typi qui nunc nobis videntur parum clari fiant sollemnes in.</p>
                        </div>
                        <div class="smallGallery">
                        	<div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                            <div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                            <div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                            <div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                            <div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                            <div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                            <div class="thumbNail"><img src="13images/media.png" width="50px" height="50px" /></div>
                        </div>
                    </div>
                </div>
			</div><!- End Home Content ->
	</div><! End Content Wrapper ->
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
		<div id="clearfix"></div>
	</div>
	<!-  Note To Backend People
	The settings below maybe different from the settings on the bio page ->
</body>
</html>