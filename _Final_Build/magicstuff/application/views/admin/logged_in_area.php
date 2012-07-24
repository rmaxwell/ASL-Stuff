<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>STUFF the Magic Mascot | Content Management System</title>
	<link rel="stylesheet" href="<?php echo base_url();?>admin/css/style.css" type="text/css" media="screen" />
</head>
<body>
	<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
    <fieldset>
    	<legend>Upload a Cover Photo</legend>
    	<?php echo form_open('home/upload_photo'); 	?>
    	<ul>
    		<li><input type="file" name="cta1" size="20" /></li>
    		<li><input type="file" name="cta2" size="20" /></li>
    		<li><input type="file" name="cta3" size="20" /></li>
    		<li><input type="file" name="cta4" size="20" /></li>
    		<li><input type="file" name="cta5" size="20" /></li>
    		<li><input type="submit" value="upload" /></li>
    	</ul>
    </fieldset>
    <fieldset>
    	<legend>Blog Listing</legend>
    	<p>Most recent blog post</p>
    </fieldset>
</body>
</html>	