<?php
if (! defined ( 'ABSPATH' )) {
	exit ();
}
/**
 * Add Case User Core.
 *
 * @name CaseUser_Core
 * @since 1.0.0
 */
if (! class_exists ( 'CaseUser_Core' )) {
	class CaseUser_Core {
		function __construct() {
			//add_filter( 'login_redirect', array($this, 'login_redirect', 10, 3 ));
		}
		
		function login_redirect($redirect_to, $request, $user) {
			global $user;
			
			//return home_url();
		}
	}
	
	new CaseUser_Core;
}