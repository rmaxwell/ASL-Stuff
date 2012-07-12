<html>
	<head>
	<title></title>
	</head>
	<body>
<h1 class="logo"><a href="/admin/index.php/site/members_area">x</a></h1>
<nav>
	<?=anchor('gallery', 'Gallery');?>
	<?=anchor('videos', 'Videos');?>
	<?=anchor('bio', 'Bio');?>
	<?=anchor('blog', 'Blog');?>
	<?=anchor('nav', 'Nav');?>
	<?=anchor('booking', 'Booking');?>
</nav>
	<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>

		<script type="text/javascript">
			tinyMCE.init({
				mode : "textareas",
				theme : "advanced",
				plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,iespell,inlinepopups,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
		
				// Theme options
				theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,code,|,visualchars,forecolor,backcolor",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,
		
				// Style formats
				style_formats : [
					{title : 'Bold text', inline : 'b'},
					{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
					{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
					{title : 'Example 1', inline : 'span', classes : 'example1'},
					{title : 'Example 2', inline : 'span', classes : 'example2'},
					{title : 'Table styles'},
					{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
				],
			});
		</script>
	</body>
</html>