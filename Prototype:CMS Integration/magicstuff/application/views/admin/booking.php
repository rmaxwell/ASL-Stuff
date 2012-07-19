<html>
	<head>
 	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>
        
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
			
			echo form_open('booking/save');
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
            <fieldset>
            <legend>Image One:</legend>
            <img src="<?=$path1?>"  style="float: left; width: 50px; height: 76px; padding-right: 3px;">
            <form class="booking_img" method="post" action="booking/upload" enctype="multipart/form-data" />
	        	<input type="file" name="userfile" size="20" />
				<br />
				<br />
				<input type="hidden" name="image_number" value="booking_image1" />
				<input type="submit" value="upload" style="float: left;" class="button"/>
        	</form>
        	<form class="booking_remove" method="post" action="booking/remove" />
	        	<input type="hidden" name="image_number" value="booking_image1" />
				<input type="submit" value="Remove" style="float: left;" class="remove_booking" />
        	</form>        	
        	</fieldset>
        	
        	<fieldset>
            <legend>Image Two:</legend>
            <img src="<?=$path2?>" style="float: left; width: 50px; height: 76px; padding-right: 3px;">
            <form class="booking_img" method="post" action="booking/upload" enctype="multipart/form-data" />
	        	<input type="file" name="userfile" size="20" />
				<br />
				<br />
				<input type="hidden" name="image_number" value="booking_image2" />
				<input type="submit" value="upload" style="float: left;" class="button" />
        	</form>
        	<form class="booking_remove" method="post" action="booking/remove" />
	        	<input type="hidden" name="image_number" value="booking_image2" />
				<input type="submit" value="Remove" style="float: left;" class="remove_booking" />
        	</form>
        	</fieldset>
        	
        	<fieldset>
            <legend>Image Three:</legend>
            <img src="<?=$path3?>" style="float: left; width: 50px; height: 76px; padding-right: 3px;">
            <form class="booking_img" method="post" action="booking/upload" enctype="multipart/form-data" />
	        	<input type="file" name="userfile" size="20" />
				<br />
				<br />
				<input type="hidden" name="image_number" value="booking_image3" />
				<input type="submit" value="upload" style="float: left;" class="button" />
        	</form>
        	<form class="booking_remove" method="post" action="booking/remove" />
	        	<input type="hidden" name="image_number" value="booking_image3" />
				<input type="submit" value="Remove" style="float: left;" class="remove_booking"/>
        	</form>
        	</fieldset>
        	
        	<fieldset>
            <legend>Image Four:</legend>
            <img src="<?=$path4?>" style="float: left; width: 50px; height: 76px; padding-right: 3px;">
            <form class="booking_img" method="post" action="booking/upload" enctype="multipart/form-data" />
	        	<input type="file" name="userfile" size="20" />
				<br />
				<br />
				<input type="hidden" name="image_number" value="booking_image4" />
				<input type="submit" value="upload" style="float: left;" class="button" />
        	</form>
        	<form class="booking_remove" method="post" action="booking/remove" />
	        	<input type="hidden" name="image_number" value="booking_image4" />
				<input type="submit" value="Remove" style="float: left;" class="remove_booking"/>
        	</form>
        	</fieldset>
      
		</div><!-- end login_form-->
	</body>
</html>