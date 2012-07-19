<div id="navwrap">
<a href="/magicstuff/index.php/admin/site"><img id="logo" src="<?php echo base_url();?>img/logo.png"></a>
	<nav>
		<ul>
			<li><?=anchor('admin/gallery', 'Gallery');?></li>
			<li><?=anchor('admin/videos', 'Videos');?></li>
			<li><?=anchor('admin/bio', 'Bio');?></li>
			<li><?=anchor('admin/blog', 'Blog');?></li>
			<li><?=anchor('admin/nav', 'Nav');?></li>
			<li><?=anchor('admin/booking', 'Booking');?></li>
		</ul>
	</nav>
	<h4><?php echo anchor('admin/login/logout', 'Logout'); ?></h4>
	<h4><?php echo anchor('admin/login/signup', 'Create Account'); ?></h4>
</div>