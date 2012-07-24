<div id="login_form">

	<h1>Login</h1>
    <?php 
	
	$username = array('name'=> 'username',
					'id'	=> 'username',
					'value' => '',
					'placeholder' => 'Enter Username');
	$password = array('name'=> 'password',
					'id'	=> 'password',
					'value' => '',
					'placeholder' => 'Enter Password');
	
	//echo '<div id="error">';			
	//echo validation_errors('<p class="error">');		
	//echo '</div>';
	
	echo form_open('admin/login/validate_credentials');
	echo form_input($username);
	echo form_error('username');
	echo form_password($password);
	echo form_error('password');
	echo form_submit('submit', 'Login');
	echo form_close();
	?>

</div><!-- end login_form-->