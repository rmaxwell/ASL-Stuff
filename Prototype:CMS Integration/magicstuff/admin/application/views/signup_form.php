<div class="wrapper">
    <h1>Create an Account!</h1>
    <fieldset>
        <legend>Personal Information</legend>
        <?php 
            $singup_fname = array('name'=> 'first_name',
                                'id'	=> 'first_name',
                                'value' => set_value('first_name'),
                                'placeholder' => 'Enter First Name');
            $singup_lname = array('name'=> 'last_name',
                                'id'	=> 'last_name',
                                'value' => set_value('last_name'),
                                'placeholder' => 'Enter Last Name');
            $singup_email = array('name'=> 'email_address',
                                'id'	=> 'email_address',
                                'value' => set_value('email_address'),
                                'placeholder' => 'Enter Eamil Name');
            $singup_username = array('name'=> 'username',
                                'id'	=> 'username',
                                'value' => set_value('username'),
                                'placeholder' => 'Enter Username Name');
            $singup_password  = array('name'=> 'password',
                                'id'	=> 'password',
                                'value' => '',
                                'placeholder' => 'Enter New Password');
            $singup_password2  = array('name'=> 'password2',
                                'id'	=> 'password2',
                                'value' => '',
                                'placeholder' => 'Enter Confirm Password');

			echo '<div id="error">';			
			echo validation_errors('<p class="error">');		
			echo '</div>';	
			//echo form_open('login/validate_credentials');      
            echo form_open('login/create_member');
            
            echo form_input($singup_fname);
            echo form_input($singup_lname);
            echo form_input($singup_email);
        ?>
    </fieldset>
    
    <fieldset>
        <legend>Login Info</legend>
        <?php
            echo form_input($singup_username);
            echo form_password($singup_password);
            echo form_password($singup_password2);
            
            echo form_submit('submit', 'Create Acccount');
            echo anchor('/login', 'Cancel', 'class=cancellink');
        ?>
    </fieldset>
</div>