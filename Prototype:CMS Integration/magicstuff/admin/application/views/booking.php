<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>

        <h1>Booking</h1>
        
        <div id="booking_form">
            <?php //set value for database and css codes
			
			if(!empty($book_data[0]{'booking_textarea'})){
				$booking_textarea = array('name'=> 'booking_textarea',
							'id'	=> 'booking_textarea',
							'value' => $book_data[0]{'booking_textarea'},
							'placeholder' => 'Click to type infomation');
			}else{
				$booking_textarea = array('name'=> 'booking_textarea',
							'id'	=> 'booking_textarea',
							'value' => '',
							'placeholder' => 'Click to type infomation');
			};
			
			if(!empty($book_data[0]{'booking_email'})){
				$booking_email = array(	'name'	=> 'booking_email',
										'id'	=> 'booking_email',
										'value' => $book_data[0]{'booking_email'},
										'placeholder' => 'Click to type email');			
			}else{
				$booking_email = array(	'name'	=> 'booking_email',
									'id'	=> 'booking_email',
									'value' => '',
									'placeholder' => 'Click to type email');		
			};
			
			if(!empty($book_data[0]{'booking_phone'})){
				$booking_phone = array(	'name'	=> 'booking_phone',
									'id'	=> 'booking_phone',
									'value' => $book_data[0]{'booking_phone'},
									'placeholder' => 'Click to type in phone number');		
			}else{
				$booking_phone = array(	'name'	=> 'booking_phone',
									'id'	=> 'booking_phone',
									'value' => '',
									'placeholder' => 'Click to type in phone number');		
			};
			
			if(!empty($book_data[0]{'booking_image1'})){
				$booking_image1 = array('name'	=> 'booking_image1',
									'id'	=> 'booking_image1',
									'value' => $book_data[0]{'booking_image1'},
								'placeholder' => 'Click to upload image');		
			}else{
				$booking_image1 = array('name'	=> 'booking_image1',
									'id'	=> 'booking_image1',
									'value' => '',
								'placeholder' => 'Click to upload image');		
			};
			if(!empty($book_data[0]{'booking_image2'})){
				$booking_image2 = array('name'	=> 'booking_image2',
									'id'	=> 'booking_image2',
									'value' => $book_data[0]{'booking_image2'},
								'placeholder' => 'Click to upload image');		
			}else{
				$booking_image2 = array('name'	=> 'booking_image2',
									'id'	=> 'booking_image2',
									'value' => '',
								'placeholder' => 'Click to upload image');		
			};
			if(!empty($book_data[0]{'booking_image3'})){
				$booking_image3 = array('name'	=> 'booking_image3',
									'id'	=> 'booking_image3',
									'value' => $book_data[0]{'booking_image3'},
								'placeholder' => 'Click to upload image');		
			}else{
				$booking_image3 = array('name'	=> 'booking_image3',
									'id'	=> 'booking_image3',
									'value' => '',
								'placeholder' => 'Click to upload image');		
			};
			if(!empty($book_data[0]{'booking_image4'})){
				$booking_image4 = array('name'	=> 'booking_image4',
									'id'	=> 'booking_image4',
									'value' => $book_data[0]{'booking_image4'},
								'placeholder' => 'Click to upload image');		
			}else{
				$booking_image4 = array('name'	=> 'booking_image4',
									'id'	=> 'booking_image4',
									'value' => '',
								'placeholder' => 'Click to upload image');		
			};



	
			//set form													
			echo form_open('booking/save');
			echo '<p>Pargraph: '.form_textarea($booking_textarea).'</p>';
            echo '<p>Phone: '.form_input($booking_phone).'</p>';
            echo '<p>Email: '.form_input($booking_email).'</p>';
            echo '<p>Image1: '.form_input($booking_image1).'</p>';
            echo '<p>Image2: '.form_input($booking_image2).'</p>';
            echo '<p>Image3: '.form_input($booking_image3).'</p>';
            echo '<p>Image4: '.form_input($booking_image4).'</p>';
        
            echo form_submit('submit', 'Update');
        
            echo form_close();
            ?>
		</div><!-- end login_form-->
	</body>
</html>