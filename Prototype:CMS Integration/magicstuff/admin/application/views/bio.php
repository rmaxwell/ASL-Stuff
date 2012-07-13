<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>
		
		<?php echo form_open('bio/save');
		
		//Form Input Title
		if(!empty($bio_info[0]{'bio_title'})){
			$bio_title = array(
				'name'	=> 'bio_title',
				'id'	=> 'bio_title',
				'value' => $bio_info[0]{'bio_title'},
				'placeholder' => 'Click to type infomation'
				);					
		}else{
			$bio_title = array(
				'name'	=> 'bio_title',
				'id'	=> 'bio_title',
				'value' => '',
				'placeholder' => 'Click to type infomation'
				);
		};
				
		echo form_label('Title', 'bio_title').'<br>';
		echo form_input($bio_title);
		echo '<p></p>';
		//End //Form Input Title

		//Form Input Text
		if(!empty($bio_info[0]{'bio_text'})){
			$bio_text = array(
				'name'	=> 'bio_text',
				'id'	=> 'bio_text',
				'value' => $bio_info[0]{'bio_text'},
				'placeholder' => 'Click to type infomation'
				);						
		}else{
			$bio_text = array(
				'name'	=> 'bio_text',
				'id'	=> 'bio_text',
				'value' => '',
				'placeholder' => 'Click to type infomation'
				);
		};
		
		echo form_label("Stuff's Bio", 'bio_text').'<br>';
		echo form_textarea($bio_text);
		echo '<br />';
		//END of //Form Input Text

		//Form Input Button
		if(!empty($bio_info[0]{'bio_button'})){
			$bio_button = array(
				'name'	=> 'bio_button',
				'id'	=> 'bio_button',
				'value' => $bio_info[0]{'bio_button'},
				'placeholder' => 'Click to type infomation'
				);						
		}else{
			$bio_button = array(
				'name'	=> 'bio_button',
				'id'	=> 'bio_button',
				'value' => '',
				'placeholder' => 'Click to type infomation'
				);
		};
				
		echo form_label("Stuff's bio page button text", 'bio_button').'<br>';
		echo form_input($bio_button);
		//End of //Form Input Button

		echo '<p></p>';

		echo form_submit('submit', 'Save Changes');
		echo form_close();
		?>
	</body>
</html>