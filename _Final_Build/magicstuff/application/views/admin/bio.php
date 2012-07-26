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
	echo '<legend>'.form_label('Title', 'bio_title').'</legend><br>';
	echo '<div class="tooltip">
				<p>This allows the user to change the title in the Navigation Bar</p></div>';
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
	echo '<div class="tooltip">
			<h3>We highly recommend not changing the content on this page. The design will likely break.</h3>
			<p>If you paste from Microsoft Word please click the "Paste From Word" button</p>
			</div>';
	echo '<legend>'.form_label("Stuff's Bio", 'bio_text').'</legend>'.'<br>';
	echo '<h2>Text Block 1</h2>
				<div class="tooltip">
				<p>This will load next to the <span>First</span> picture.</p>
				<p>This box will accept Approx <span>700 characters</span>.</p>
				</div>';
	echo form_textarea($bio_text1).'<br>';
	
	echo '<h2>Text Block 2</h2>
				<div class="tooltip">
				<p>This will load next to the <span>Second</span> picture</p>
				<p>This box will accept Approx <span>700 characters</span>.</p>
				</div>';
	echo form_textarea($bio_text2).'<br>';
	
	echo '<h2>Flavor Text</h2>
				<div class="tooltip">
				<p>This will appear in the <span>gray box</span> on the page</p>
				<p>Accepts approximately <span>100</span> characters</p>
				</div>';
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