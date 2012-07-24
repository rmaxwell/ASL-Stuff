<h1>Bio</h1>

<div class="wrapper">
<?php echo form_open('admin/bio/save'); ?>

<?php
	
	$bio_title = array(
		'name'	=> 'bio_title',
		'id'	=> 'bio_title',
		'value' => $bio_info[0]{'bio_title'},
	);
	
	echo '<fieldset>';
	echo '<legend>'.form_label('Title', 'bio_title').'</legend>'.'<br>';
	echo form_input($bio_title);
	echo '</fieldset>';
	
	$bio_text = array(
		'name'	=> 'bio_text',
		'id'	=> 'bio_text',
		'value' => $bio_info[0]{'bio_text'},
	);

	echo '<fieldset>';
	echo '<legend>'.form_label("Stuff's Bio", 'bio_text').'</legend>'.'<br>';
	echo form_textarea($bio_text);
	echo '</fieldset>';
	
	$bio_button = array(
		'name'	=> 'bio_button',
		'id'	=> 'bio_button',
		'value' => $bio_info[0]{'bio_button'},
	);

	echo '<fieldset>';
	echo '<legend>'.form_label("Stuff's bio page button text", 'bio_button').'</legend>'.'<br>';
	echo form_input($bio_button);
	echo '</fieldset>';
	
	echo form_submit('submit', 'Save Changes');
	
	echo form_close();

?>
</div>