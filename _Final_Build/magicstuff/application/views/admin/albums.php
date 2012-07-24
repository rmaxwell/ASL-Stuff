<h1><?=$heading?></h1>

<?php if(count($album_title) == 0){ ?>

<fieldset>
    <legend>Add a new Photo Album</legend>
    <div class="tooltip">
		<p>Please enter an Album Name to begin</p>
	</div>
	<form class="add_albums" method="post" action="gallery/add" enctype="multipart/form-data" />
    	<input type="text" name="newAlbum" size="20" placeholder="Enter Album Name"/>
		<input type="submit" value="Add" />
	</form>
	
</fieldset>	
	
<?php }else{ ?>

	<fieldset>
	    <legend>Add a new Photo Album</legend>
	   <div class="tooltip">
			<p>Please enter an Album Name to begin</p>
		</div>
		<form class="add_albums" method="post" action="gallery/add" enctype="multipart/form-data" />
	    	<input type="text" name="newAlbum" size="20" placeholder="Enter Album Name"/>
			<input type="submit" value="Add" />
		</form>
		
	</fieldset>
		
	<fieldset>
	    <legend>Current Albums</legend>
	   		<div class="tooltip">
				<p>Click on a Album Title to view Images in that Album</p>
			</div>
			<div class="albumlist">
	   		<?php for ($ii=0; $ii<count($album_title); $ii++){ ?>
	   		<h1 class="gallery_album"><a href="gallery/load_album/<?=$album_title[$ii]['album_id']?>"><?=$album_title[$ii]['album_title']?></a></h1>
	   		<a href="gallery/delete_album/<?=$album_title[$ii]['album_id'].'/'.$album_title[$ii]['album_title']?>" class="delete_album">Delete Album</a>
	   		<?php } ?></div>
	   		
	</fieldset>		

<?php } ?>
