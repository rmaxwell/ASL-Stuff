<fieldset>
<legend>Blogs</legend>
<?php
	foreach($blogs as $blog){
		echo "<h2 data-visible='".$blog['blog_visible']."'>".anchor('admin/blog/editBlog/'.$blog['blog_id'], $blog['blog_title'])."</h2><ul>
		<li>".anchor('admin/blog/visibility/'.$blog['blog_id'], 'Turn Off or On')."</li>
		<li>".anchor('admin/blog/title/'.$blog['blog_id'], 'Edit')."</li>
		<li>".anchor('admin/blog/deleteBlog/'.$blog['blog_id'], 'Delete Blog')."</li>
		</ul>";
	
	}	
?>

<form method="post" action="blog/addBlog">
	<div><input type="text" name="new_blog" /><button type="submit">Add New Blog</button></div>
</form>

</fieldset>

