<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>
        
		<div class="wrapper">
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
				
		echo '<fieldset>';
		echo '<legend>Title</legend>';
		echo form_input($bio_title);
		echo '</fieldset>';
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
		
		echo '<fieldset>';
		echo '<legend>Article</legend>';
		echo form_textarea($bio_text);
		echo '</fieldset>';
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
				
		echo '<fieldset>';
		echo '<legend>Short Text for Button</legend>';
		echo form_input($bio_button);
		echo '</fieldset>';
		//End of //Form Input Button

		echo form_submit('submit', 'Save Changes');
		echo form_close();
		?>
        </div><!--[END]#wrapper-->
	</body>
</html>