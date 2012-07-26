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
<?php 
	/*for($i=0; $i<count($blog_info); $i++){
	    if($blog_info[$i]{"blog_visible"}==1){
	    	echo $blog_info[$i]{"blog_title"};
	    }
	};*/
?>
  <div id="main">
    <div id="navwrap">
      <div id="logowrap">
      	<a href=<?php echo base_url();?>><img id="logo" src="<?php echo base_url();?>img/logo/logo.png"></a> 
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
    </div>
    <! End Nav Wrap >
    <div class="contentwrapper"> <img src="<?php echo base_url();?>img/header/bookMeHeader.jpg" title="Book Stuff Today!" />
      <div id="bookingContent">
        <div id="bookStuffTxt">
     	   <?php echo $book_data[0]{"booking_textarea"}; ?>
        </div>
        <div id="stuffBigImg">
        	<img id="img1" src="<?php echo base_url();?>img/bookingslider/stuff_action-01.png" alt="Book Stuff Today!" title="Stuff the Dragon" />
            <img id="img2" src="<?php echo base_url();?>img/bookingslider/stuff_action-02.png" alt="Book Stuff Today!" title="Stuff the Dragon" />
            <img id="img3" src="<?php echo base_url();?>img/bookingslider/stuff_action-03.png" alt="Book Stuff Today!" title="Stuff the Dragon" />
            <img id="img4" src="<?php echo base_url();?>img/bookingslider/stuff_action-04.png" alt="Book Stuff Today!" title="Stuff the Dragon" />
            <img id="img5" src="<?php echo base_url();?>img/bookingslider/stuff_action-05.png" alt="Book Stuff Today!" title="Stuff the Dragon" />
        </div>
        <p id="contactInfo">To inquire about booking <span>STUFF</span> contact <span><?php echo $book_data[0]{"booking_email"}; ?></span> or call <span><?php echo $book_data[0]{"booking_phone"}; ?></span></p>
      </div>
    </div>
  </div>
  <!- End Home Content -> 
</div>
<! End Content Wrapper ->
</div>
<! End Main ->
</div>
<! End Wrapper ->
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
<script type="text/javascript">
    $(window).load(function() {
   		 $('#slider').nivoSlider({
        effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
        animSpeed: 1000, // Slide transition speed
        pauseTime: 6000, // How long each slide will show
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
    <script type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>
</body>
</html>