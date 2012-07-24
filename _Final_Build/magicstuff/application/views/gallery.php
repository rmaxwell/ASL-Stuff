<html>
    <head>
        <title>STUFF's Photo Gallery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Polaroid Photobar Gallery" />
        <meta name="keywords" content="polaroid, jquery, css3, rotation, image gallery"/>
		
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="../css/gallery.css" type="text/css" media="screen"/>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="../js/cufon-yui.js" type="text/javascript"></script>
		<script src="../js/Note_this_400.font.js" type="text/javascript"></script>
	</head>

    <body id="home"> 
	<div id="navwrap">
	<div id="logowrap">
		<a href="<?php echo base_url();?>"><img id="logo" src="<?php echo base_url();?>/img/logo.png"></a>
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
	</div>
	<div id="wrapper">
		<div id="void">
			<img src="<?php echo base_url();?>img/icons/stuff_dunk.png"/>
		</div>
		<h1 id="imageHeader"></h1>
		<div id="pp_gallery" class="pp_gallery">
			
			<div id="pp_loading" class="pp_loading"></div>
			<div id="pp_next" class="pp_next"></div>
			<div id="pp_prev" class="pp_prev"></div>
			<div id="pp_thumbContainer">
		
		<? for ($i=0; $i<count($albums); $i++){ ?>
				<div class="album">
				<? for ($ii=0; $ii<count($images_array[$i]); $ii++){ ?>
						<div class="content">
							<img src="<?php echo base_url().$images_array[$i][$ii]['photo_tn']?>" alt="<?php echo base_url().$images_array[$i][$ii]['photo_path'];?>" />
							<span><?=$images_array[$i][$ii]['photo_title']?></span>
						</div>
				<? } ?>	
					
					<div class="descr">
						<?=$albums[$i]['album_title'];?>
					</div>
				</div>
				
			<? } ?>
			
		
				<div id="pp_back" class="pp_back">Albums</div>
			</div>
		</div>
        <div>    
		</div>
		</div><! End Wrapper ->
	<div id="footwrap">
		<ul>
			<li id="footerlogo"><img src="<?php echo base_url();?>/img/logo.png"></li>
			<li><?=anchor('bio', 'Bio');?></li>
			<li><?=anchor('gallery', 'Photos');?></li>
			<li><?=anchor('videos', 'Videos');?></li>
			<li><?=anchor('booking', 'Booking');?></li>
			<li><?=anchor('blog', 'Blog');?></li>
			<li><?=anchor('school', "STUFF's School Show");?></li>
			<li class="social"><a href="http://www.facebook.com/stuffthemagicdragon"><img class="social" src="<?php echo base_url();?>/img/f.png"></a></li>
			<li class="social"><a href="https://twitter.com/STUFF_Mascot"><img class="social" src="<?php echo base_url();?>/img/t.png"></a></li>
		</ul>
		<div class="clearfix">
		</div>
	</div>

        <!-- The JavaScript -->
       <script src="../js/jquery.transform-0.8.0.min.js"></script>
       <script type="text/javascript" src="../js/gallery.js"></script>       
    </body>
</html>
