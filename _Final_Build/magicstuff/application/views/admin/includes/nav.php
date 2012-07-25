<div id="navwrap">
<a href="/magicstuff/index.php/admin/site"><img id="logo" src="<?php echo base_url();?>img/admin/logo.png"></a>
	<nav>
		<ul>
			<li><?=anchor('admin/bio', 'Bio');?></li>
			<li><?=anchor('admin/booking', 'Booking');?></li>
			<li><?=anchor('admin/blog', 'Blog');?></li>
			<li><?=anchor('admin/school', "Stuff's School Show");?></li>
			<li><?=anchor('admin/gallery', 'Photo');?></li>
			<li><?=anchor('admin/videos', 'Videos');?></li>
		</ul>
	</nav>
</div>
<div class=wrapper>
	<h4><?php echo anchor('admin/login/logout', 'Logout'); ?></h4>
	<h4><?php echo anchor('admin/signup/newuser', 'Create Account'); ?></h4>
