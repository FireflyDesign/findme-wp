<?php
header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type');

add_action( 'wp_ajax_fm_check_user', 'fm_check_user' );
add_action( 'wp_ajax_nopriv_fm_check_user', 'fm_check_user' );

function fm_check_user(){
		
	$username = $_REQUEST['login'];	
	$passwd = $_REQUEST['passwd'];	
	
    if ( username_exists( $username ) ){
		
		$creds = array(
			'user_login'    => $username,
			'user_password' => $passwd,
			'remember'      => true
		);
	 
		$user = wp_signon( $creds, false );
	 
		if ( is_wp_error( $user ) ) {
			echo $user->get_error_message();
			wp_die();
		}
		
		echo $user->data->ID;
		wp_die();
		
    }else{
		echo '0';
		wp_die();
	}
       
	  
	wp_die(); 
	
}