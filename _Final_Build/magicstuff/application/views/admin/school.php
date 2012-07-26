<h1>Update Stuff' School Show Info</h1>
<div class="wrapper">

<?php
	$school_textarea = array('name'=> 'school_textarea',
								'id'	=> 'school_textarea',
								'value' => $school_data[0]{'school_textarea'},
								'placeholder' => 'Click to type infomation');

	$school_email = array(	'name'	=> 'school_email',
								'id'	=> 'school_email',
								'value' => $school_data[0]{'school_email'},
								'placeholder' => 'Click to type email');			
	
	$school_phone = array(	'name'	=> 'school_phone',
							'id'	=> 'school_phone',
							'value' => $school_data[0]{'school_phone'},
							'placeholder' => 'Click to type in phone number');
	
	echo form_open('admin/school/save');
	echo '<fieldset>';
	echo '<legend>Booking Info:</legend>'.form_textarea($school_textarea);
	echo '</fieldset>';
	echo form_submit('submit', 'Save Changes');
	echo form_close();
?>
</div><!-- end login_form-->
