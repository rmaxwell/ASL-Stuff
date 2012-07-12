<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>
		
		<?php echo form_open('bio/save'); ?>
		
		<?php
			
			$bio_title = array(
				'name'	=> 'bio_title',
				'id'	=> 'bio_title',
				'value' => $bio_info[0]{'bio_title'},
			);
			
			
			echo form_label('Title', 'bio_title').'<br>';
			echo form_input($bio_title);
			echo '<br />';
			
			$bio_text = array(
				'name'	=> 'bio_text',
				'id'	=> 'bio_text',
				'value' => $bio_info[0]{'bio_text'},
			);
		
			
			echo form_label("Stuff's Bio", 'bio_text').'<br>';
			echo form_textarea($bio_text);
			echo '<br />';
			
			$bio_button = array(
				'name'	=> 'bio_button',
				'id'	=> 'bio_button',
				'value' => $bio_info[0]{'bio_button'},
			);
		
			
			echo form_label("Stuff's bio page button text", 'bio_button').'<br>';
			echo form_input($bio_button);
			echo '<br />';
			
			echo form_submit('submit', 'Save Changes');
			
			echo form_close();
		
		?>
		<script type="text/javascript" src="../jscripts/tiny_mce/tiny_mce.js"></script>

		<script type="text/javascript">
			tinyMCE.init({
				mode : "textareas",
				theme : "advanced",
				plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
		
				// Theme options
				theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
				theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
				theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "left",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,
		
				// Example content CSS (should be your site CSS)
				content_css : "css/content.css",
		
				// Drop lists for link/image/media/template dialogs
				template_external_list_url : "lists/template_list.js",
				external_link_list_url : "lists/link_list.js",
				external_image_list_url : "lists/image_list.js",
				media_external_list_url : "lists/media_list.js",
		
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