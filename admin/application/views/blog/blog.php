<?php
	foreach($blogs as $blog){
		echo '<h2>'.anchor('blog/editBlog/'.$blog['blog_id'], $blog['blog_title']).'<button>On or Off</button></h2>';
	}	
?>

<div><a href="">Add New Blog</a></div>