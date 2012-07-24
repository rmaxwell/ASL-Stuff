<div id="wrapper">
<div id="signup_form">

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


            echo form_open('admin/login/create_member');
			echo form_error('first_name');
            echo form_input($singup_fname);
			echo form_error('last_name');
            echo form_input($singup_lname);
			echo form_error('email_address');
            echo form_input($singup_email);
        ?>
    </fieldset>
    
    <fieldset>
        <legend>Login Info</legend>
        <?php
			echo form_error('username');
            echo form_input($singup_username);
			echo form_error('password');
            echo form_password($singup_password);
            echo form_password($singup_password2);
            
            echo form_submit('admin/signup/create_member', 'Create Acccount');
            echo anchor('/admin/site', 'Cancel', 'class=cancellink');
        ?>
    </fieldset>
</div>
</div>