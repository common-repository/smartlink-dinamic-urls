<?php
/**
 * @link            https://digitalek.com/
 * @since           1.0.0
 * @package         Smartlink_Du
 * Plugin Name:     SmartLink Dynamic URLs
 * Plugin URI:      https://woopy.cyou/
 * Description:     Smartlink DU allows to insert up to 5 URLs to a link. URL's ares loaded randomly or depending on user location if GeoLocalization function is enabled.
 * Name: 			Birdie 
 * Version:         1.1.1
 * Author:          Woopy Plugins
 * Author URI:      https://woopy.cyou/
 * License:         GPL-2.0+
 * License URI:		http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:     smartlink-dynamic-urls 
 */
if(!defined('ABSPATH')){die('-1');}
	function smartlink_du_start(){
		define('PLPATH',plugins_url());
		require plugin_dir_path( __FILE__ ).'Incs/class-smartlink-back.php';
		require plugin_dir_path( __FILE__ ).'Incs/class-smartlink-front.php';		
		if(is_admin()==true){
			$run_back=new smartlink_du_back();
			$run_back->smrtdu_bstart();
		}
		$run_front=new smartlink_du_front();
		$run_front->smrtdu_fstart();
	}
smartlink_du_start();
