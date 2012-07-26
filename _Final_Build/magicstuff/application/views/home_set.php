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
			<img id="logo" src="<?php echo base_url();?>img/logo/logo.png">
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
		 <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
            	<?php foreach($slider_images as $si){
	            echo html_entity_decode($si['path']); } ?> 
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
					<h2><?php 
						for($i=0; $i<count($blog_info); $i++){
	  					  if($blog_info[$i]{"blog_visible"}==1){
	    					echo $blog_info[$i]{"blog_title"};
	  					  }
						};
						?>
					</h2>
					<table id="progressList">
					  <?php for ($i=0; $i<count($post_data); $i++){?>
					  <tr>
					    <td class="progressNumber">1</td>
					    <td class="progressTask"><a href="<?=base_url();?>index.php/blog">
					    		<?php
					    			$trunk = $post_data[$i]{"post_title"}
					    			;?>
					    			
					    			<a href="<?=base_url();?>index.php/blog"><?php echo $trunk ?></a><!--20 Characters-->
					    </td>
					    <td class="progressDate"><?php echo $post_data[$i]{"date_updated"};?></td>
					  </tr>
					  <?php }?>
					</table>
				</div>
				<div class="column" id="col3" style="padding-bottom: 52px;">
					<h2>Latest Photos</h2>
					<?php foreach($new_images as $ni){ ?>
						<a href="<?=base_url()?>gallery">
							<img src="<?=$ni['photo_path'];?>" alt="" style="width:280px">
						</a>
					<?php } ?>
					
				</div>
			</div><!-- End Column Content -->
			</div><!-- End Home Content -->
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