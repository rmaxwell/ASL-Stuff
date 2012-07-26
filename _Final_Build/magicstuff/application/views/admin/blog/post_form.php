<?php if(isset($postData)){ 

	$pid = $postData->post_id;
	$post_title = $postData->post_title;
	$post_path = $postData->post_photo_path;
	$post_photo_title = stripslashes($postData->post_photo_title);
	$post_desc = stripslashes($postData->post_desc);
	
	

	
?>

<fieldset>
	<legend><h3>Content</h3></legend>
	<form action="updatePost/<?=$pid;?>" method="post" enctype="multipart/form-data">
		<p class="inputField">Event Title: <input type="text" name="event_title" value=<?=$post_title;?> /></p>

		<p class="inputField">Main Photo: <input type="file" name="userfile" /></p>
		<p>Photo Title: <input type="text" name="photo_title" value="<?=$post_photo_title;?>"/></p>
		<p>Description: <textarea name="post_desc"><?=$postData->post_desc;?></textarea></p>
		<p class="inputField">Gallery Photo Upload: <input type="file" multiple="multiple" name="album[]" accept="image/*" /></p>
		<button type="submit">Save Data</button>
	</form>
</fieldset>

<fieldset>
	<legend><h3>Thumbnails</h3></legend>
	<ul style='overflow: hidden;'>
		<?php
			foreach($thumbnails as $thumb){
				echo '<li style="float: left;"><a href="'.$thumb['image_path'].'"><img src="'.$thumb['thumbnail_path'].'" /></a>
				<span style="display: block;"><a href="deleteThumb/'.$thumb['thumbnail_id'].'/'.$pid.'">Delete</a></span></li>';
			}
		?>
	</ul>
</fieldset>

<fieldset class="preview">
	<legend><h3>Preview</h3></legend>
	<h2><?=$post_title;?></h2>
	<div><img src="<?=$post_path;?>" alt='<?=$post_photo_title;?>' /></div>
	<p><?=$post_desc;?></p>
</fieldset>

<?php }else{ ?>

<form action="<?=$blog_id?>/addPost" method="post" enctype="multipart/form-data">

	<fieldset>
		<legend><h3>Add New Post</h3></legend>
	<div id="blog">
	
		<p class="inputField">Event Title: <input type="text" value="" name="event_title"/></p>
		<p class="inputField">Upload Photo:<input type="file" name="userfile" /></p>
		<p>Photo Title:<input type="text" name="photo_title" value=""/></p>
		<p>Description:<textarea name="post_desc" rows="5" cols="50"></textarea></p>
		<p class="inputField">Gallery Photo Upload: <input type="file" multiple="multiple" name="album[]" /></p>
		<button type="submit">Add Post</button>
	</div>
	
	</fieldset>
</form>

<?php } ?>


