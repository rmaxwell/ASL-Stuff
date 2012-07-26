<fieldset>
<legend>Blogs</legend>
	<div class="tooltip">
		<p>This page allows you to edit all blog information.</p>
	</div>
	<div class="clearfix"></div>
	<fieldset>
	<legend>Current Blogs</legend>
	<?php
		foreach($blogs as $blog){
			echo "<h2 -data-visible='".$blog['blog_visible']."'>".anchor('admin/blog/editBlog/'.$blog['blog_id'], $blog['blog_title'])."</h2>";
			echo '<p>'.anchor('admin/blog/visibility/'.$blog['blog_id'], 'Turn On or Off').'</p>';
			echo '<p>'."&nbsp".anchor('admin/blog/deleteBlog/'.$blog['blog_id'], 'Delete Blog').'</p>';
		}	
	?>
	</fieldset>
	<fieldset>
		<legend>Add a New Blog to the Blog Roll</legend>
		<div class="tooltip">
			<p>To begin a new blog please enter a <span>Title</span> and click <span>'Add New Blog'</span>.</p>
			<p>Please limit character count for Blog titles to <span>15 characters</span>.</p>
		</div>
		<form method="post" action="blog/addBlog">
			<div>
				<input type="text" name="new_blog" placeholder="Blog Title"/>
				<button type="submit">Add New Blog</button>
			</div>
		</form>
	</fieldset>
</fieldset>