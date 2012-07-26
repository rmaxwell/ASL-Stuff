<div class="gallery">
	<?php if(isset($images) && count($images) == 0){ ?>
	<fieldset>
	    <legend><h2><?=$album[0]['album_title']?></h2></legend>
	   		<legend>Upload Images</legend>
	   	<div class="tooltip">
			<p>Hold <span>Shift</span> to select multiple files consecutively.</p>
			<p>Hold <span>Cmd</span> or <span>Ctrl</span> to select multiple files non-consecutively.</p>
		</div>
		<form class="booking_img" method="post" action="<?=base_url();?>index.php/admin/gallery/upload/<?=$album[0]['album_id']?>" enctype="multipart/form-data" />
	    	<input type="file" name="userfile[]" size="20" multiple="multiple"/>
	    	<input type="hidden" name="album_name" value="<?=$album[0]['album_title']?>"/>
			<input type="submit" value="upload" />
		</form>
		
	</fieldset>
		
	<?php }else{ ?>
	<fieldset>
	    <legend><h2 class="album_heading"><?=$album[0]['album_title']?></h2></legend>
	    	<div class="tooltip">
				<p>Use the arrows or click on a picture to view</p>
			</div>
			<div class="edit_img">
	    		<div>
	    			<a href="#" class="prev"></a>
	    		</div>
	    			<img src="" class="edit_image" />
	    		<div>
	    			<a href="#" class="next"></a>
	    		</div>
		    	<form class="gallery_info" method="post" action="<?=base_url()?>index.php/admin/gallery/update_image/<?=$album[0]['album_id']?>/" />
			    	<input id="image_title" type="text" name="image_title" size="20" placeholder="Enter Image Title" value=""/>
			    	<a href="<?=base_url();?>index.php/admin/gallery/delete_image/<?=$album[0]['album_id']?>/" class="delete_image" >Delete Image</a>
					<input type="submit" value="Save Changes" />
				</form>
				
			</div>
	   		<div class="images">
	   		<?php for ($i=0; $i<count($images); $i++){ 
	   			  $id = $images[$i]['photo_id']; ?>
	   			<a href="<?=base_url().$images[$i]['photo_path'];?>" image-Index="<?=$images[$i]['photo_id'];?>" alt="<?=$images[$i]['photo_title'];?>" >
	   				<img src="<?=base_url().$images[$i]['photo_tn'];?>" style="width: 50px; height: 72px" >
	   			</a>
	   		<?php } ?>
	   		</div>
	   		<fieldset>
	   			<legend>Upload More Images</legend>
				<div class="tooltip">
					<p>Hold <span>Shift</span> to select multiple files consecutively.</p>
					<p>Hold <span>Cmd</span> or <span>Ctrl</span> to select multiple files non-consecutively.</p>
				</div>
				<form class="booking_img" method="post" action="<?=base_url();?>index.php/admin/gallery/upload/<?=$album[0]['album_id']?>" enctype="multipart/form-data" />
			    	<input type="file" name="userfile[]" size="20" multiple="multiple"/>
			    	<input type="hidden" name="album_name" value="<?=$album[0]['album_title']?>"/>
					<input type="submit" value="upload" />
				</form>
				
			</fieldset>
	</fieldset>
	<?php } ?>
</div>
<script type="text/javascript" src="<?=base_url()?>js/admin/gallery.js"></script>