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
    	<legend>Module 1</legend>
    	<?php echo '<h3>Twitter Handle</h3>';
    		echo form_open('home/upload_content');
    		echo '<p>@username: '.form_input().'</p>';
    		echo form_submit('submit', 'Save Content');
    	?>
    </fieldset>
    <fieldset>
    	<legend>Module 2</legend>
    	<?php echo '<h3>Blog</h3>';
    		echo '<p>Most recent blog post</p>';
    	?>
    </fieldset>
    <fieldset>
    	<legend>Module 3</legend>
    	<?php echo '<h3>Media </h3>';
    		echo '<p>Either most recent media or selected content</p>';
    	?>    	
    </fieldset>
</body>
