<?php 
function tweak_ops(){
	wp_verify_nonce('smrtdunonce');
	if(isset($_GET['page'])){		

		$active_tab=sanitize_text_field( wp_unslash($_GET['page']));
	 
		if($active_tab=='smartlink_admin'){

			include_once plugin_dir_path(dirname(__FILE__ )).'Incs/back_home.php';

		}elseif($active_tab=='settings'){
			
			include_once plugin_dir_path( dirname( __FILE__ ) ) . 'Incs/back_settings.php';
		}
		else{
			echo"Ups.. Something went wrong...";
		}
    }
}