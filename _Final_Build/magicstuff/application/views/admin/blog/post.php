<h1><?=$posts[0]['blog_title']?></h1>

<h1><?=anchor('/admin/blog', 'Go Back');?></h1>

<fieldset>

<legend><h3>Current Posts</h3></legend>

<!-- this loads all the title of each blog entry -->

<?php
	$id = $this->uri->segment(4);

	foreach($posts as $post)
	{
		if(isset($post['post_id'])){
			echo "<h2>".anchor('admin/blog/editBlog/'.$post['blog_id'].'/'.$post['post_id'], $post['post_title'])."</h2>";
			echo anchor('admin/blog/editBlog/'.$id.'/deletePost/'.$post['post_id'], 'Remove Post');
		}
	}
?>

	<h4><?php echo anchor('admin/blog/editBlog/'.$id, 'Add New Post'); ?></h4>
</fieldset>