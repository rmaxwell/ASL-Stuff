<h1>Videos</h1>

<?php if(isset($videos) && count($videos) == 0){  ?>

<fieldset>
	<legend>Add New Videos</legend>
	<form class="videos" method="post" action="<?=base_url();?>index.php/admin/videos/add" enctype="multipart/form-data" />
    	<input type="text" name="video_title" size="20" placeholder="Video Title" />
    	<input type="text" name="video_embed" size="20" placeholder="Paste Embed Code Here"/>
		<input type="submit" value="Add" style="float: none;"/>
	</form>
	<div class="tooltip">
		<p>Enter the embed link with a title</p>
		<p>example: http://www.youtube.com/embed/samplevideo</p>
	</div>
</fieldset>

<? }else{ ?>

<fieldset>
	<legend>Add New Videos</legend>
	<div class="tooltip">
		<p>Enter the embed link with a title</p>
		<p>example: <code>http://www.youtube.com/embed/samplevideo</code></p>
	</div>
	<form class="videos" method="post" action="<?=base_url();?>index.php/admin/videos/add" enctype="multipart/form-data" />
    	<input type="text" name="video_title" size="20" placeholder="Video Title" />
    	<input type="text" name="video_embed" size="20"  placeholder="Paste Embed Code Here">
		<input type="submit" value="Add" style="float: none;"/>
	</form>
	
</fieldset>
	
<fieldset>
	<legend>Current Videos</legend>
	<?php foreach ($videos as $vid){ ?>
	<h2 class="video_list"><?=$vid['video_title']?></h2><a href="<?=base_url();?>index.php/admin/videos/delete_video/<?=$vid['video_id']?>"> Delete</a>
	<?php } ?>
</fieldset>	
	
<?php } ?>