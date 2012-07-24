<?php if(isset($postData)){ ?>

<fieldset>
	<legend><h3>Content</h3></legend>
	<form action="updatePost/<?=$postData->post_id;?>" method="post" enctype="multipart/form-data">
		<p class="inputField">Event Title: <input type="text" name="event_title" value="<?=$postData->post_title;?>" /></p>

		<p class="inputField">Main Photo: <input type="file" name="userfile" /></p>
		<p>Photo Title: <input type="text" name="photo_title" value="<?=$postData->post_photo_title;?>"/></p>
		<p>Description: <textarea name="post_desc" rows="5" cols="50"><?=$postData->post_desc;?></textarea></p>
		<p class="inputField">Gallery Photo Upload: <input type="file" multiple="multiple" name="album[]" /></p>
		<button type="submit">Save Data</button>
	</form>
</fieldset>

<fieldset class="preview">
	<legend><h3>Preview</h3></legend>
	<h2><?=$postData->post_title;?></h2>
	<div><img src="<?=$postData->post_photo_path;?>" alt='<?=$postData->post_photo_title;?>' /></div>
	<p><?=$postData->post_desc;?></p>
</fieldset>

<?php }else{ ?>

<form action="<?=$blog_id?>/addPost" method="post" enctype="multipart/form-data">

	<fieldset>
		<legend><h3>Add New Post</h3></legend>
				
		<p class="inputField">Event Title: <input type="text" value="" name="event_title"/></p>
		<p class="inputField">Upload Photo:<input type="file" name="userfile" /></p>
		<p>Photo Title:<input type="text" name="photo_title" value=""/></p>
		<p>Description:<textarea name="post_desc" rows="5" cols="50"></textarea></p>
		<p class="inputField">Gallery Photo Upload: <input type="file" multiple="multiple" name="album[]" /></p>
		<button type="submit">Add Post</button>
	</fieldset>
	
	
</form>

<?php } ?>