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
	
	$bio_text1 = array(
		'name'	=> 'bio_text1',
		'id'	=> 'bio_text1',
		'value' => $bio_info[0]{'bio_text1'},
	);
	
	$bio_text2 = array(
		'name'	=> 'bio_text2',
		'id'	=> 'bio_text2',
		'value' => $bio_info[0]{'bio_text2'},
	);
	
	$bio_flavor = array(
		'name'	=> 'bio_flavor',
		'id'	=> 'bio_flavor',
		'value' => $bio_info[0]{'bio_flavor'},
	);
	

	echo '<fieldset>';
	echo '<legend>'.form_label("Stuff's Bio", 'bio_text').'</legend>'.'<br>';
	echo '<h2>Text Block 1</h2>';
	echo form_textarea($bio_text1).'<br>';
	echo '<h2>Text Block 2</h2>';
	echo form_textarea($bio_text2).'<br>';
	echo '<h2>Flavor Text</h2>';
	echo form_textarea($bio_flavor).'<br>';
	echo '</fieldset>';
	
	$bio_button = array(
		'name'	=> 'bio_button',
		'id'	=> 'bio_button',
		'value' => $bio_info[0]{'bio_button'},
	);
	
	echo form_submit('submit', 'Save Changes');
	
	echo form_close();

?>
</div>