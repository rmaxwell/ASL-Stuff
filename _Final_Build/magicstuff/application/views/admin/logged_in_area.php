<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>STUFF the Magic Mascot | Content Management System</title>
</head>
<body>

	<?php
		if($slider_images[0]['on_off'] == 1)
		{
			$path1 = base_url()."uploads/home/thumbs/tn_slider_image1.jpg";	
		}else{
			$path1 = base_url()."uploads/home/thumbs/no_image.jpg";
		};
		
		if($slider_images[1]{'on_off'} == 1)
		{
			$path2 = base_url()."uploads/home/thumbs/tn_slider_image2.jpg";	
		}else{
			$path2 = base_url()."uploads/home/thumbs/no_image.jpg";
		};
		
		if($slider_images[2]{'on_off'} == 1)
		{
			$path3 = base_url()."uploads/home/thumbs/tn_slider_image3.jpg";	
		}else{
			$path3 = base_url()."uploads/home/thumbs/no_image.jpg";
		};
		
		if($slider_images[3]{'on_off'} == 1)
		{
			$path4 = base_url()."uploads/home/thumbs/tn_slider_image4.jpg";	
		}else{
			$path4 = base_url()."uploads/home/thumbs/no_image.jpg";
		};
		
		if($slider_images[4]{'on_off'} == 1)
		{
			$path5 = base_url()."uploads/home/thumbs/tn_slider_image5.jpg";	
		}else{
			$path5 = base_url()."uploads/home/thumbs/no_image.jpg";
		};
	?>

	<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
	<h3>This Changes the front page slider</h3>
    <fieldset>
    	<div class="tooltip">
    		<p>The front page slider is limited to <span>5 pictures</span></p>
    		<span><p>Recommended Dimensions: 960px X 406px</p></span>
    	</div>
    	<legend>Edit Front Page Slider</legend>
    	    	<fieldset>
            <legend>Image One:</legend>
            <img src="<?=$path1?>" style="float: left; width: 236px; height: 100px; padding-right: 12px;">
            <form class="home_slider" method="post" action="site/upload/1" enctype="multipart/form-data" />
            	<fieldset class="slider"><legend>Slider Image Link</legend>
	        	<div style="margin-top: 5px; float: left;"><input type="radio" name="link" value="1" class="on1" />On <input type="radio" name="link" value="0" checked="checked" class="off1" />Off</div>
	        	<div class="slider_link slider_link1">
	        		<div class="slider_dd">
			        	<select class="slider_options slider_options1" name="page_all" >
			        		<option value="1">Select ...</option>
							<option value="0" name="page">External Link</option>
							<option value="index.php/gallery" name="page">Gallery</option>
							<option value="index.php/videos" name="page">Video</option>
							<option value="index.php/bio" name="page">Bio</option>
							<option value="index.php/blog" name="page">13 before 13</option>
							<option value="" name="page">Book Stuff</option>
							<option value="" name="page">School Show</option>
						</select>
	        		</div>
					<div class="url_space">
						<span class="url_input url_input1">
							<input type="text" name="url_path" value="http://" style="display: inline; padding: 7px; width: 395px; margin: 0; "/>
						</span>
					</div>
				</div>
	        	</fieldset>
	        	<input type="file" name="userfile" size="20" accept="image/*" />
	        	<input type="hidden" name="image_number" value="slider_image1.jpg" />
				<input type="submit" value="upload" class="button" style="margin-left: 20px;"/><br>
				<a href="<?=base_url();?>index.php/admin/site/turnoff_slider/1" class="remove_slider">Remove</a>
        	</form>
        	</fieldset>
        	
        	<fieldset>
            <legend>Image Two:</legend>
            <img src="<?=$path2;?>" style="float: left; width: 236px; height: 100px; padding-right: 12px;">
            <form class="home_slider" method="post" action="site/upload/2" enctype="multipart/form-data" />
            <fieldset class="slider"><legend>Slider Image Link</legend>
	        	<div style="margin-top: 5px; float: left;"><input type="radio" name="link" value="1" class="on2" />On <input type="radio" name="link" value="0" checked="checked" class="off2" />Off</div>
	        	<div class="slider_link slider_link2">
	        		<div class="slider_dd">
			        	<select class="slider_options slider_options2" name="page_all" >
			        		<option value="1">Select ...</option>
							<option value="0" name="page">External Link</option>
							<option value="index.php/gallery" name="page">Gallery</option>
							<option value="index.php/videos" name="page">Video</option>
							<option value="index.php/bio" name="page">Bio</option>
							<option value="index.php/blog" name="page">13 before 13</option>
							<option value="" name="page">Book Stuff</option>
							<option value="" name="page">School Show</option>
						</select>
	        		</div>
					<div class="url_space">
						<span class="url_input url_input2">
							<input type="text" name="url_path" value="http://" style="display: inline; padding: 7px; width: 395px; margin: 0; "/>
						</span>
					</div>
				</div>
	        	</fieldset>
	        	<input type="file" name="userfile" size="20" accept="image/*" />
				<input type="hidden" name="image_number" value="slider_image2.jpg" />
				<input type="submit" value="upload" class="button" style="margin-left: 20px;"/>
        	<a href="<?=base_url();?>index.php/admin/site/turnoff_slider/2" class="remove_slider">Remove</a>
        	</form>
        	</fieldset>
        	
        	<fieldset>
            <legend>Image Three:</legend>
            <img src="<?=$path3;?>" style="float: left; width: 236px; height: 100px; padding-right: 12px;">
            <form class="home_slider" method="post" action="site/upload/3" enctype="multipart/form-data" />
            <fieldset class="slider"><legend>Slider Image Link</legend>
	        	<div style="margin-top: 5px; float: left;"><input type="radio" name="link" value="1" class="on3" />On <input type="radio" name="link" value="0" checked="checked" class="off3" />Off</div>
	        	<div class="slider_link slider_link3">
	        		<div class="slider_dd">
			        	<select class="slider_options slider_options3" name="page_all" >
			        		<option value="1">Select ...</option>
							<option value="0" name="page">External Link</option>
							<option value="index.php/gallery" name="page">Gallery</option>
							<option value="index.php/videos" name="page">Video</option>
							<option value="index.php/bio" name="page">Bio</option>
							<option value="index.php/blog" name="page">13 before 13</option>
							<option value="" name="page">Book Stuff</option>
							<option value="" name="page">School Show</option>
						</select>
	        		</div>
					<div class="url_space">
						<span class="url_input url_input3">
							<input type="text" name="url_path" value="http://" style="display: inline; padding: 7px; width: 395px; margin: 0; "/>
						</span>
					</div>
				</div>	        	</fieldset>
	        	<input type="file" name="userfile" size="20" accept="image/*" />
				<input type="hidden" name="image_number" value="slider_image3.jpg" />
				<input type="submit" value="upload" class="button" style="margin-left: 20px;"/>
        	<a href="<?=base_url();?>index.php/admin/site/turnoff_slider/3" class="remove_slider">Remove</a>
        	</form>
        	</fieldset>
        	<fieldset>
        	
            <legend>Image Four:</legend>
            <img src="<?=$path4;?>" style="float: left; width: 236px; height: 100px; padding-right: 12px;">
            <form class="home_slider" method="post" action="site/upload/4" enctype="multipart/form-data" />
            <fieldset class="slider"><legend>Slider Image Link</legend>
	        	<div style="margin-top: 5px; float: left;"><input type="radio" name="link" value="1" class="on4" />On <input type="radio" name="link" value="0" checked="checked" class="off4" />Off</div>
	        	<div class="slider_link slider_link4">
	        		<div class="slider_dd">
			        	<select class="slider_options slider_options4" name="page_all" >
			        		<option value="1">Select ...</option>
							<option value="0" name="page">External Link</option>
							<option value="index.php/gallery" name="page">Gallery</option>
							<option value="index.php/videos" name="page">Video</option>
							<option value="index.php/bio" name="page">Bio</option>
							<option value="index.php/blog" name="page">13 before 13</option>
							<option value="" name="page">Book Stuff</option>
							<option value="" name="page">School Show</option>
						</select>
	        		</div>
					<div class="url_space">
						<span class="url_input url_input4">
							<input type="text" name="url_path" value="http://" style="display: inline; padding: 7px; width: 395px; margin: 0; "/>
						</span>
					</div>
				</div>
	        	</fieldset>
	        	<input type="file" name="userfile" size="20" accept="image/*" />
				<input type="hidden" name="image_number" value="slider_image4.jpg" />
				<input type="submit" value="upload" class="button" style="margin-left: 20px;"/>
        	<a href="<?=base_url();?>index.php/admin/site/turnoff_slider/4" class="remove_slider">Remove</a>
        	</form>
        	</fieldset>
        	
        	<fieldset>
            <legend>Image Five</legend>
            <img src="<?=$path5;?>" style="float: left; width: 236px; height: 100px; padding-right: 12px;">
            <form class="home_slider" method="post" action="site/upload/5" enctype="multipart/form-data" />
            <fieldset class="slider"><legend>Slider Image Link</legend>
	        	<div style="margin-top: 5px; float: left;"><input type="radio" name="link" value="1" class="on5" />On <input type="radio" name="link" value="0" checked="checked" class="off5" />Off</div>
	        	<div class="slider_link slider_link5">
	        		<div class="slider_dd">
			        	<select class="slider_options slider_options5" name="page_all" >
			        		<option value="1">Select ...</option>
							<option value="0" name="page">External Link</option>
							<option value="index.php/gallery" name="page">Gallery</option>
							<option value="index.php/videos" name="page">Video</option>
							<option value="index.php/bio" name="page">Bio</option>
							<option value="index.php/blog" name="page">13 before 13</option>
							<option value="" name="page">Book Stuff</option>
							<option value="" name="page">School Show</option>
						</select>
	        		</div>
					<div class="url_space">
						<span class="url_input url_input5">
							<input type="text" name="url_path" value="http://" style="display: inline; padding: 7px; width: 395px; margin: 0; "/>
						</span>
					</div>
				</div>
	        	</fieldset>
	        	<input type="file" name="userfile" size="20" accept="image/*" />
				<input type="hidden" name="image_number" value="slider_image5.jpg" />
				<input type="submit" value="upload" class="button" style="margin-left: 20px;"/>
        	<a href="<?=base_url();?>index.php/admin/site/turnoff_slider/5" class="remove_slider">Remove</a>
        	</form>
        	</fieldset>
    </fieldset>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>js/admin/site.js"></script></body>
</html>	