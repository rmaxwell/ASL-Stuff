<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>
		
		<?php echo form_open('bio/save'); ?>
		
		<?php
			
			$bio_title = array(
				'name'	=> 'bio_title',
				'id'	=> 'bio_title',
				'value' => $bio_info[0]{'bio_title'},
			);
			
			
			echo form_label('Title', 'bio_title').'<br>';
			echo form_input($bio_title);
			echo '<br />';
			
			$bio_text = array(
				'name'	=> 'bio_text',
				'id'	=> 'bio_text',
				'value' => $bio_info[0]{'bio_text'},
			);
		
			
			echo form_label("Stuff's Bio", 'bio_text').'<br>';
			echo form_textarea($bio_text);
			echo '<br />';
			
			$bio_button = array(
				'name'	=> 'bio_button',
				'id'	=> 'bio_button',
				'value' => $bio_info[0]{'bio_button'},
			);
		
			
			echo form_label("Stuff's bio page button text", 'bio_button').'<br>';
			echo form_input($bio_button);
			echo '<br />';
			
			echo form_submit('submit', 'Save Changes');
			
			echo form_close();
		
		?>
		
	</body>
</html>