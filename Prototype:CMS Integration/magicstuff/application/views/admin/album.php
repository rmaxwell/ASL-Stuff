<div class="gallery">
<fieldset>
    <legend><?=$album?></legend>
    
   <?php if(isset($path))
   { ?>
   		<div class="images">
   		<?php 
   			for ($i=0; $i<count($pathtn); $i++){
   		?>
   				<img src=".<?=$pathtn[$i]?>" style="width: 50px; height: 72px">
   		<?php	}
	   		//var_dump($path);
   		?></div>
   		<legend>Upload Images</legend>
	   		<form class="booking_img" method="post" action="upload" enctype="multipart/form-data" />
	    	<input type="file" name="userfile[]" size="20" multiple="multiple"/>
	    	<input type="hidden" name="album_name" value="<?=$album?>"/>
			<input type="submit" value="upload" />
			</form>
   <?php }else{ ?>
    <legend>Upload Images</legend>
    <form class="booking_img" method="post" action="upload" enctype="multipart/form-data" />
    	<input type="file" name="userfile[]" size="20" multiple="multiple"/>
    	<input type="hidden" name="album_name" value="<?=$album?>"/>
		<input type="submit" value="upload" />
	</form>
	<?php }?>
</fieldset>
</div>

