<fieldset>
<legend>Blogs</legend>
<?php
	foreach($blogs as $blog){
		echo "<h2 -data-visible='".$blog['blog_visible']."'>".anchor('admin/blog/editBlog/'.$blog['blog_id'], $blog['blog_title'])."</h2>";
		echo anchor('admin/blog/visibility/'.$blog['blog_id'], 'Turn Off or On');
		echo "&nbsp".anchor('admin/blog/deleteBlog/'.$blog['blog_id'], 'Delete Shit');
	}	
?>


<form method="post" action="blog/addBlog">
	<div><input type="text" name="new_blog" /><button type="submit">Add New Blog</button></div>
</form>

</fieldset>