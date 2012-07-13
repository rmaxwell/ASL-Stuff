<body>
	<h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
	<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
    <p>This section represents the area that only logged in members can access.</p>
    <fieldset>
    	<legend>Upload a Cover Photo</legend>
    	<?php echo form_open('home/upload_photo'); 	?>
    	<input type="file" name="userfile" size="20" />
    	<input type="submit" value="upload" />
    </fieldset>
    <fieldset>
    	<legend>Change Main Content Block</legend>
    	<?php echo form_open('home/upload_content'); 	
    		echo form_textarea('cta', set_value('cta', 'Main Content'));
    		echo form_submit('submit', 'Save Content');
    	?>
    </fieldset>
    <fieldset>
    	<legend>Twitter API</legend>
    	<p>Ability to Change twitter user name</p>
    </fieldset>
    <fieldset>
    	<legend>Blog Listing</legend>
    	<p>Most recent blog post</p>
    </fieldset>
    <fieldset>
    	<legend>Media</legend>
    	<p>Either most recent media or selected content</p>
    </fieldset>
</body>
</html>	