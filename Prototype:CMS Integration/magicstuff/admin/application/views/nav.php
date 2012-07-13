<html>
	<head>
	<title><?=$title?></title>
	</head>
	<body>
		<h1><?=$heading?></h1>
        
        <div class="wrapper">
            <?php //set value for database and css codes

			//set form, nav controller, calling out save method	
			$loopCount = 0;												
			foreach($nav_data as $nd){
				//Set up count
				$loopCount += 1;
				
				//col 1
				//url link
				if(!empty($nd{'nav_url_link'})){
					$nav_url_link = array('name'=> 'nav_url_link',
								'id'	=> 'nav_url_link',
								'value' => $nd{'nav_url_link'},
								'placeholder' => 'Click to type infomation');
				}else{
					$nav_url_link = array('name'=> 'nav_url_link',
								'id'	=> 'nav_url_link',
								'value' => '',
								'placeholder' => 'Click to type url link infomation');
				};
				
				//col 2
				//url name
				if(!empty($nd{'nav_url_name'})){
					$nav_url_name = array(	'name'	=> 'nav_url_name',
											'id'	=> 'nav_url_name',
											'value' => $nd{'nav_url_name'},
											'placeholder' => 'Click to type url name');			
				}else{
					$nav_url_name = array(	'name'	=> 'nav_url_name',
										'id'	=> 'nav_url_name',
										'value' => '',
										'placeholder' => 'Click to type url name');		
				};
				
				//col 3
				//enable false is 0 or ture is 1
				//set only 0 or 1
				

				//Radio Button Settings				
				//from database 0 or 1 to set radio button disable 0 and enable 1			
				if($nd{'nav_enable'}){
					$truefalseradio_0_checked = 0;
					$truefalseradio_1_checked = 1;
				}else{
					$truefalseradio_0_checked = 1;
					$truefalseradio_1_checked = 0;
				};
				
				//diaable
				$truefalseradio_0 = array ('name'	=>	'nav_enable'.$nd{'nav_id'},
										  'id'		=>	'nav_enable'.$loopCount,
										  'value'	=>	0,
										  'checked'	=>	$truefalseradio_0_checked
										  );

				//enable
				$truefalseradio_1 = array( 'name'	=>	'nav_enable'.$nd{'nav_id'},
										  'id'		=>	'nav_enable'.$loopCount,
										  'value'	=>	1,
										  'checked'	=>	$truefalseradio_1_checked
										);
	
				//Create and Echo the form
				echo form_open('nav/save');
				
				echo '<fieldset>';
				echo '<legend>nav_url_link: </legend>'.form_input($nav_url_link).'</p>';
				echo '</fieldset>';

				echo '<fieldset>';
				echo '<legend>nav_url_name: </legend>'.form_input($nav_url_name).'</p>';
				echo '</fieldset>';

				echo '<fieldset>';
				echo '<legend>Do you want to show this link?</legend>';
				echo '<p>Off: '.form_radio($truefalseradio_0).'</p>';
				echo '<p>On: '.form_radio($truefalseradio_1).'</p>';
 				echo '</fieldset>';

					
				//this hidden from is used to set the diffrent from each submit button
				echo form_hidden('nav_id', $nd{'nav_id'});
				echo form_submit('submit', 'Update');
       		    echo form_close();
				
				echo '<br><br><p>--------------- Next Link '.$loopCount.'------------------</p><br><br>';
			}//end of loop

            ?>
		</div><!-- end login_form-->
	</body>
</html>