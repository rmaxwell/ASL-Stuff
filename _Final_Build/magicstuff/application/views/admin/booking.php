<html>
	<head>
 	<title><?=$title?></title>
	</head>
	<body>
		<h1>Booking</h1>
        
        <div class="wrapper">
            <?php
			$booking_textarea = array('name'=> 'booking_textarea',
										'id'	=> 'booking_textarea',
										'value' => $book_data[0]{'booking_textarea'},
										'placeholder' => 'Click to type infomation');
	
			$booking_email = array(	'name'	=> 'booking_email',
										'id'	=> 'booking_email',
										'value' => $book_data[0]{'booking_email'},
										'placeholder' => 'Click to type email');			
			
			$booking_phone = array(	'name'	=> 'booking_phone',
									'id'	=> 'booking_phone',
									'value' => $book_data[0]{'booking_phone'},
									'placeholder' => 'Click to type in phone number');
			
			echo form_open('admin/booking/save');
			echo '<fieldset>';
            echo '<legend>Phone:</legend>'.form_input($booking_phone);
            echo '</fieldset>';
            echo '<fieldset>';
            echo '<legend>Email:</legend>'.form_input($booking_email);
            echo '</fieldset>';
			echo '<fieldset>';
			echo '<legend>Booking Info:</legend>'.form_textarea($booking_textarea);
			echo '</fieldset>';
			echo form_submit('submit', 'Save Changes');
            echo form_close();
            ?>
            
            <br />      
		</div><!-- end login_form-->
	</body>
</html>