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
					<a href=<?php echo base_url();?>><img id="logo" src="<?php echo base_url();?>img/logo/logo.png"></a>
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
			</div><! End Nav Wrap >
			<div id="contentwrapper">
			<ul class="roundabout-holder">
			   	<? for ($i=0; $i<count($videos); $i++){ ?>
					<li class="roundabout-moveable-item">
					<?php 
						$ltReplace= str_replace('&lt;' ,'<' ,$videos[$i]['video_embed']);
						$gtReplace= str_replace('&gt;' ,'>' , $ltReplace);
						echo $gtReplace;
					?>
					</li>
				<? } ?> 
			</ul>
			
			<div id="videoControl">
			    <a href="#" class="prev"></a>
			    <a href="#" class="next"></a>
			</div>
			</div><! End Content Wrapper ->
		</div><! End Main ->
	</div><! End Wrapper ->
	<div id="clearfix"></div>
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="<?php echo base_url();?>js/jquery.roundabout.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/video.js"></script>
</body>
</html>