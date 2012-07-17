<h1><?=$heading?></h1>

<fieldset>
    <legend>Add a new Photo Album</legend>
    <form class="add_albums" method="post" action="gallery/add" enctype="multipart/form-data" />
    	<input type="text" name="newAlbum" size="20" placeholder="Enter Album Name"/>
		<input type="submit" value="Add" />
	</form>
</fieldset>

<div class="gallery"></div>