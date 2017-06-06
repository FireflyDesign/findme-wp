<?php
header('Access-Control-Allow-Headers: X-Requested-With, origin, content-type');

add_action( 'wp_ajax_fm_check_user', 'fm_check_user' );
add_action( 'wp_ajax_nopriv_fm_check_user', 'fm_check_user' );

function fm_check_user(){
	
	$data = $_REQUEST;
	
	$username = $_REQUEST['login'];
	
	
    if ( username_exists( $username ) ){		   
		echo "jest";
    }else{
		echo 'nie ma';
	}
       
	  
	wp_die(); 
	
}