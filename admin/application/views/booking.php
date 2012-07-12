<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>

        <h1>Booking</h1>
        
        <div id="booking_form">
            <?php 
            echo form_open('booking/save');
        
            echo '<p>Pargraph: '.form_textarea('booking_textarea', $book_data[0]{'booking_textarea'}).'</p>';
            echo '<p>Phone: '.form_input('booking_phone', $book_data[0]{'booking_phone'}).'</p>';
            echo '<p>Email: '.form_input('booking_email', $book_data[0]{'booking_email'}).'</p>';
            echo '<p>Image1: '.form_input('booking_image1', $book_data[0]{'booking_image1'}).'</p>';
            echo '<p>Image2: '.form_input('booking_image2', $book_data[0]{'booking_image2'}).'</p>';
            echo '<p>Image3: '.form_input('booking_image3', $book_data[0]{'booking_image3'}).'</p>';
            echo '<p>Image4: '.form_input('booking_image4', $book_data[0]{'booking_image4'}).'</p>';
        
            echo form_submit('submit', 'Update');
        
            echo form_close();
            ?>
		</div><!-- end login_form-->
	</body>
</html>