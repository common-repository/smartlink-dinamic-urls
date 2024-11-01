<?php 	
# update
 
if(isset($_POST['save'])){
	wp_verify_nonce('smartlink_setting_p');
	
$d_url = $dgt_url = $clean_db = '';
	if(isset($_POST['def-url'])){// default URL
		$d_url= sanitize_text_field( wp_unslash($_POST['def-url']));	
	}
	if(isset($_POST['def-gt'])){// default GT URL
		$dgt_url= sanitize_text_field( wp_unslash($_POST['def-gt']));	
	}		
	if(isset($_POST['clean'])){// clean database
		$clean_db= sanitize_text_field( wp_unslash($_POST['clean']));
	}
	// Save all metadata in BBDD
	$restb_ops = array($d_url,$dgt_url,$clean_db);
	maybe_serialize(update_option('back-ops',$restb_ops));
}
# Get data	
$back_ops = get_option('back-ops');
if($back_ops!==FALSE){	
	$back_ops=maybe_unserialize(get_option('back-ops'));		 
}
else{
	$back_ops=['', '', 'off'];
}

?>
<div class="wrap">
	<h1>Smartlink Dynamic URLs</h1>
	<h2>Settings</h2>	
	
<form method="post">
	<!-- DEFAULT URL -->
	<div class="default-url">
		<span class="admin-title"><h3><i>Default URL</i></h3><a href="#" class="def-icon"><img src="<?php echo esc_attr(PLPATH).'/smartlink-dynamic-urls/assets/info-icon.png';?>" style="width:20px;height:20px;"/></a>
		</span>
		<span class="def-inp"><input type="url" name="def-url" value="<?php echo esc_html($back_ops[0]); ?>" placeholder="Enter default URL here"/></span>
		<div class="info-mask">
			<div class="def-popup">
				<a class="x-close">
				<img src="<?php echo esc_attr(PLPATH).'/smartlink-dinamic-urls/assets/x-icon.png';?>" style="width: 25px;height:25px;">
				</a>
			<p>This URL will be used in any smartlink if all url fields are empty in metabox Smartlink Creator.<br/> If you leave blank the # operator will be inserted in smartlink</p> 
			</div>
		</div>		
	</div>
	<!-- DEFAULT GT URL -->
	<div class="default-gturl">
		<span class="admin-title"><h3><i>Default GeoTargeting URL</i></h3><a href="#" class="defgt-icon"><img src="<?php echo esc_attr(PLPATH).'/smartlink-dynamic-urls/assets/info-icon.png';?>" style="width:20px;height:20px;"/></a>
		</span>
		<span class="def-gt"><input type="url" name="def-gt" value="<?php if($back_ops[1]!==''){echo esc_html($back_ops[1]);} ?>" placeholder="Enter default GT URL here"/></span>
		<div class="info-mask">
			<div class="defgt-popup">
				<a class="x-close">
				<img src="<?php echo esc_attr(PLPATH).'/smartlink-dinamic-urls/assets/x-icon.png';?>" style="width: 25px;height:25px;">
				</a>
			<p>This URL will be used in all smartlinks if all URLs are set for GeoTargeting and user does not match with any of the countries selected.<br/> If you leave blank the # operator will be inserted in smartlink</p> 
			</div>
		</div>		
	</div>		

	<!-- CLEAN DATABASE-->
	<div class="clean-db">
		<span class="admin-title"><h3><i>Clean DB on uninstall</i></h3><a href="#" class="clean-icon"><img src="<?php echo esc_attr(PLPATH).'/smartlink-dynamic-urls/assets/info-icon.png';?>" style="width:20px;height:20px;"/></a>
		</span>
		<span class="clean-inp"><input type="checkbox" name="clean" 
			<?php 
			if($back_ops[2]=="on"){
				echo " checked";
			}
			?>
			/></span>
			<div class="info-mask">
			<div class="clean-popup">
				<a class="x-close">
				<img src="<?php echo esc_attr(PLPATH).'/smartlink-dynamic-urls/assets/x-icon.png';?>"style="width: 25px;height:25px;">
				</a>
			<p>Check if you want to clean DataBase when uninstalling plugin.<br/> All data will be lost.</p> 
			</div>
		</div>			
	</div> 

	<div id="save-button">
		<button type="submit" value="save" name="save"/>SAVE</button>
	</div>
	 <?php wp_nonce_field('smartlink_setting_p'); ?>

</form>
</div>