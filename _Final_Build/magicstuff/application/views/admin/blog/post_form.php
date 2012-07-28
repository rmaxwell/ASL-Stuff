<?php if(isset($postData)){ 

	$pid = $postData->post_id;
	$post_title = $postData->post_title;
	$post_path = $postData->post_photo_path;
	$post_photo_title = stripslashes($postData->post_photo_title);
	$post_desc = $postData->post_desc;
	
	?>

	<form action="updatePost/<?=$pid;?>" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend><h3>Current Post: <?=$post_title;?></h3></legend>
			<ul>
				<li>Event Title: <input type="text" name="event_title" value="<?=$post_title;?>" /></li>
				<li>Description: <textarea name="post_desc"><?=$post_desc;?></textarea></li>
				<li><input type="submit" value="Save" /></li>
			</ul>
			
		</fieldset>
	</form>

	<fieldset>
		<legend><h3>Content for Post</h3></legend>
		<ul>
		
		
<?php for($i = 0; $i < 7; $i++){ 
	

/*
	$slots { 
		[0]=> array(8) { 
			["post_slot_id"]=> string(1) "1" 
			["post_id"]=> string(2) "95" 
			["image_thumb"]=> NULL 
			["image_main"]=> NULL 
			["video_link"]=> string(130) "<iframe width="420" height="315" src="http://www.youtube.com/embed/OSYtQy9EqTA" frameborder="0" allowfullscreen></iframe>" 
			["content_is"]=> string(5) "photo" 
			["position"]=> string(1) "1" 
			["last_updated"]=> string(19) "2012-07-26 22:55:57" 
		} 
		[1]=> array(8) { 
			["post_slot_id"]=> string(1) "2" 
			["post_id"]=> string(2) "95" 
			["image_thumb"]=> NULL 
			["image_main"]=> NULL 
			["video_link"]=> string(130) "<iframe width="420" height="315" src="http://www.youtube.com/embed/OSYtQy9EqTA" frameborder="0" allowfullscreen></iframe>" 
			["content_is"]=> string(5) "photo" 
			["position"]=> string(1) "2" 
			["last_updated"]=> string(19) "2012-07-26 23:10:09" 
		} 
	} 
*/

// Setup up variables for Slot to number CONDITIONAL
		$sum = $i + 1;
		$position = '';
		if(isset($slots[0]['position'])) $position = $slots[0]['position'];
				
// takes the string and replaces HTML ENTITIES with CODE BRACKETS before implementing into HTML
		$videoLink = '';
		if(isset($slots[0]['video_link'])) {
			$videoLink = $slots[0]['video_link'];
			$videoLink = str_replace('&lt;', '<', $videoLink);
			$videoLink = str_replace('&gt;', '>', $videoLink);
		};
		
		
	
	if($sum == $position){ ?> 
	
		<li><h3>Slot <?=$sum;?> - <?php if($sum == 1){ ?><span style="color: blue;">Active Slot</span><?php } ?></h3>
		
			<form id='set<?=$sum;?>' action="updateSlot" method="post" enctype="multipart/form-data">

				<fieldset>
					<legend>Preview</legend>
					<div><?php if(isset($slots[0]['video_link'])) echo $videoLink;?></div>
					<p><img src='<? if($slots[0]['image_thumb']) echo $slots[0]['image_main'];?>'/></p>
				</fieldset>
				
				<div class='postType'><span><input type="radio" name="content" <?php if($slots[0]['content_is'] == 'photo') echo 'checked=""';?> value="photo" />Photo</span>
				<span><input type="radio" name="content" <?php if($slots[0]['content_is'] == 'video') echo 'checked=""';?> value="video" />Video</span></div>
				
				<div id="photo<?=$sum;?>">							
					Photo: <input type="file" name="userfile" accept="image/*" />
				</div>
				<div id="video<?=$sum;?>">Embedded Video: <input type="text" name="emb_tag" value='<?php if(isset($slots[0]['video_link'])) echo $videoLink;?>' placeholder="Embbed tag goes here" /></div>
				
				<input type="hidden" name="post_id" value="<?=$pid;?>" />
				<input type="hidden" name="position" value="<?=$sum;?>" />
				<input type="hidden" name='slot_id' value="<?=$slots[0]['post_slot_id'];?>" />
				<input type="submit" value="Save" />
				
			</form>
			
			<form action="deleteSlot" method="post">
				<input type="hidden" name="post_id" value="<?=$pid;?>" />
				<input type="hidden" name='slot_id' value="<?=$slots[0]['post_slot_id'];?>" />
				<div><input style="background-color: #dd000f;" type="submit" value="Delete" /></div>
			</form>
			<hr />
			<br />
		</li>
		
<? 

// Once the array information is used, get rid of it.	
	array_splice($slots, 0, 1);
	
	}else{ ?>	
	
		<li><h3>Slot <?=$sum;?></h3>
			<form id='set<?=$sum;?>' action="saveSlot" method="post" enctype="multipart/form-data">
				
				<div class='postType'><span><input type="radio" name="content" checked="checked" value="photo" />Photo</span>
				<span><input type="radio" name="content" value="video"/>Video</span></div>
				
				<div id="photo<?=$sum;?>">							
					Photo: <input type="file" name="userfile" accept="image/*" />
				</div>
				<div id="video<?=$sum;?>">Embedded Video: <input type="text" name="emb_tag" value="" placeholder="Embbed tag goes here" /></div>
				
				<input type="hidden" name="post_id" value="<?=$pid;?>" />
				<input type="hidden" name="position" value="<?=$sum;?>" />
				<input type="submit" value="Save" />
				
			</form>
			
			<form action="deleteSlot" method="post">
				<input type="hidden" name="post_id" value="<?=$pid;?>" />
				<input type="hidden" name="position" value="<?=$sum;?>" />
				<div><input style="background-color: #dd000f;" type="submit" value="Delete" /></div>
			</form>
			
		<!-- Just a little bit of trickery -->	
		<?php if($sum <= 6){?>	
			<hr />
			<br />
		<? } ?>	
			
		</li>
		
	<? } ?>
<? } ?>
	</ul>
		
	</fieldset>

<!-- If there is no data, then show only the Add Post view -->
<?php }else{ ?>

<form action="<?=$blog_id?>/addPost" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend><h3>Add New Post</h3></legend>
		<ul>
			<li>Event Title: <input type="text" value="" name="event_title"/></li>
			<li>Description: <textarea name="post_desc"></textarea></li>
			<li><input type="submit" value="Save" /></li>
		</ul>
		
	</fieldset>
</form>



<?php } ?>


