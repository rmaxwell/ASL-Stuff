<div id="navwrap">
<a href="/magicstuff/admin/index.php/site"><img id="logo" src="<?php echo base_url();?>img/logo.png"></a>
	<nav>
		<ul>
			<li><?=anchor('gallery', 'Gallery');?></li>
			<li><?=anchor('videos', 'Videos');?></li>
			<li><?=anchor('bio', 'Bio');?></li>
			<li><?=anchor('blog', 'Blog');?></li>
			<li><?=anchor('nav', 'Nav');?></li>
			<li><?=anchor('booking', 'Booking');?></li>
		</ul>
	</nav>
	<h4><?php echo anchor('login/logout', 'Logout'); ?></h4>
	<h4><?php echo anchor('login/signup', 'Create Account'); ?></h4>
</div>