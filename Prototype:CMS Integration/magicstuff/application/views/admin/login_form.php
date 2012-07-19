<div id="login_form">
	<h1>Login</h1>
    <?php
	$login_user = array ('name'=> 'username',
						'id'	=> 'username',
						'value' => set_value('username'),
						'placeholder' => 'Enter User Name');
	$login_pass = array ('name'=> 'password',
						'id'	=> 'password',
						'value' => '',
						'placeholder' => 'Enter Password');
	 
	//echo '<div id="error">';			
	//echo validation_errors('<p class="error">');		
	//echo '</div>';	
	echo form_open('admin/login/validate_credentials');
	echo form_error('username');
	echo form_input($login_user);
	echo form_error('password');
	echo form_password($login_pass);
	echo form_submit('submit', 'Login');
	echo form_close();
	?>
</div><!-- end login_form-->