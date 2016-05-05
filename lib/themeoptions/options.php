<?php

add_action( 'admin_menu', 'remove_redux_menu',12 );
function remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/options/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/options/sample-config.php' );
}