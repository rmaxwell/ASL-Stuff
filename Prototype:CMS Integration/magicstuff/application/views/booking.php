<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>STUFF The Magic Mascot</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
</head>
	<h1>BOOKING</h1>
<p><?php 
	echo $book_data[0]{'booking_textarea'};
	echo $book_data[0]{'booking_phone'};
	echo $book_data[0]{'booking_email'};
?></p>