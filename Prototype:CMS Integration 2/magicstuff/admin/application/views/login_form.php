<div id="login_form">

	<h1>Login</h1>
    <?php 
	
	$username = array('name'=> 'username',
					'id'	=> 'username',
					'value' => '',
					'placeholder' => 'Click to Type Username');
	$password = array('name'=> 'password',
					'id'	=> 'password',
					'value' => '',
					'placeholder' => 'Click to Type Password');
	
	echo form_open('login/validate_credentials');
	echo form_input($username);
	echo form_password($password);
	echo form_submit('submit', 'Login');
	echo form_close();
	?>

</div><!-- end login_form-->