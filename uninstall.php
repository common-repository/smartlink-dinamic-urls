<?php
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

		$back_ops=maybe_unserialize(get_option('back-ops'));
		if($back_ops==TRUE&&$back_ops[1]=='on'){
			global $wpdb;
			$wpdb->query("DELETE FROM $wpdb->postmeta WHERE meta_key ='smartlink-1'"); // phpcs:ignore WordPress.DB.DirectDatabaseQuery
			delete_option('back-ops');		
			
		}
	