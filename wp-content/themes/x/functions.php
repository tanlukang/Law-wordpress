<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Theme functions for X.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Set Paths
//   02. Require Files
// =============================================================================

// Set Paths
// =============================================================================

$func_path = 'framework/functions';
$glob_path = 'framework/functions/global';
$admn_path = 'framework/functions/global/admin';
$tmgp_path = 'framework/functions/global/admin/tmg';
$eque_path = 'framework/functions/global/enqueue';
$plgn_path = 'framework/functions/global/plugins';



// Require Files
// =============================================================================

//
// Debugging, conditionals, helpers, and stack data.
//

require_once( $glob_path . '/debug.php' );
require_once( $glob_path . '/conditionals.php' );
require_once( $glob_path . '/helper.php' );
require_once( $glob_path . '/stack-data.php' );


//
// Admin.
//

require_once( $admn_path . '/thumbnails/setup.php' );
require_once( $admn_path . '/setup.php' );
require_once( $admn_path . '/migration.php' );
require_once( $admn_path . '/meta/setup.php' );
require_once( $admn_path . '/sidebars.php' );
require_once( $admn_path . '/widgets.php' );
require_once( $admn_path . '/custom-post-types.php' );
require_once( $admn_path . '/customizer/setup.php' );
require_once( $admn_path . '/addons/setup.php' );


//
// TMG plugin setup.
//

require_once( $tmgp_path . '/setup.php' );
require_once( $tmgp_path . '/register.php' );
require_once( $tmgp_path . '/updates.php' );


//
// Enqueue styles and scripts.
//

require_once( $eque_path . '/styles.php' );
require_once( $eque_path . '/scripts.php' );


//
// Global functions.
//

require_once( $glob_path . '/meta.php' );
require_once( $glob_path . '/featured.php' );
require_once( $glob_path . '/pagination.php' );
require_once( $glob_path . '/navbar.php' );
require_once( $glob_path . '/breadcrumbs.php' );
require_once( $glob_path . '/classes.php' );
require_once( $glob_path . '/portfolio.php' );
require_once( $glob_path . '/social.php' );
require_once( $glob_path . '/content.php' );
require_once( $glob_path . '/remove.php' );


//
// Stack specific functions.
//

require_once( $func_path . '/integrity.php' );
require_once( $func_path . '/renew.php' );
require_once( $func_path . '/icon.php' );
require_once( $func_path . '/ethos.php' );


//
// Integrated plugins.
//

if ( X_BBPRESS_IS_ACTIVE ) {
  require_once( $plgn_path . '/bbpress.php' );
}

if ( X_BUDDYPRESS_IS_ACTIVE ) {
  require_once( $plgn_path . '/buddypress.php' );
}

if ( X_ENVIRA_GALLERY_IS_ACTIVE ) {
  require_once( $plgn_path . '/envira-gallery.php' );
}

if ( X_ESSENTIAL_GRID_IS_ACTIVE ) {
  require_once( $plgn_path . '/essential-grid.php' );
}

if ( X_LAYERSLIDER_IS_ACTIVE ) {
  require_once( $plgn_path . '/layerslider.php' );
}

if ( X_REVOLUTION_SLIDER_IS_ACTIVE ) {
  require_once( $plgn_path . '/revolution-slider.php' );
}

if ( X_SOLILOQUY_IS_ACTIVE ) {
  require_once( $plgn_path . '/soliloquy.php' );
}

if ( X_VISUAL_COMOPSER_IS_ACTIVE ) {
  require_once( $plgn_path . '/visual-composer.php' );
}

if ( X_WOOCOMMERCE_IS_ACTIVE ) {
  require_once( $plgn_path . '/woocommerce.php' );
}

if ( X_WPML_IS_ACTIVE ) {
  require_once( $plgn_path . '/wpml.php' );
}


function submitInfo(){
  define('MYPATH', dirname(dirname(__FILE__)).'/');
  //require_once(MYPATH . '../../wp-config.php');
  require_once(MYPATH . '../../wp-load.php');

  global $wpdb;

	$fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  if ($wpdb->insert( 'wp_submit_info', array( 'fname' => $fname, 'lname' => $lname, 'email' => $email, 'phone' => $phone ), array('%s', '%s', '%s', '%s' ))) {
    echo json_encode(array("status"=>0));
  } else {
    echo json_encode(array("status"=>1));
  }
	die();
}
add_action('wp_ajax_submitInfo', 'submitInfo');
add_action('wp_ajax_nopriv_submitInfo', 'submitInfo');
