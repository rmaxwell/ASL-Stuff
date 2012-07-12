<h1>http://example.com/[controller-class]/[controller-method]/[arguments]</h1>

<? var_dump($posts);?>

<h1><?=anchor('blog', 'Go Back');?></h1>

<h1>13 in 13</h1>


<!-- this loads all the title of each blog entry -->
<fieldset>

<legend><h3>Current Blogs</h3></legend>

<?php
	foreach($posts as $post)
	{
		echo '<h2><a href="">'.$blogPiece['blog_title'].'</a></h2>';
	}
	
	echo "<button>Add New Blog</button>"
?>
	
</fieldset>



<form action="index/purple" method="post">

	<fieldset>
		<legend><h3>Content</h3></legend>
	
		<p class="inputField">Event Title: <input type="text" value="<?php echo $blogs[0]['blog_title']; ?>" name="event_title"/></p>

		<h2>Main Photo</h2>
		<p class="inputField"><input type="file" name="main_photo" /></p>
		<p>Title:<input type="text" value="<?php echo $blogs[0]['blog_photo_title']; ?>"/></p>
		<p>Caption:<textarea rows="5" cols="50"></textarea></p>
	</fieldset>

	<fieldset>
		<legend><h3>Thumbnails</h3></legend>
		<h3>Thumb1</h3>
		<p><input type="file" name=""/></p>
		<h3>Thumb1 Title</h3>
		<p><input type="text" name="" value="<?php  ?>"/></p>
	</fieldset>
	
	<button type="submit">Save Data</button>
</form>

<fieldset class="preview">
	<legend><h3>Preview</h3></legend>
	<h2>13 on 13</h2>
	<div><img src="" /></div>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p><a href="">View More</a></p>
</fieldset>