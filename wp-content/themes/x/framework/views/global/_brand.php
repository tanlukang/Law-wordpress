<?php

// =============================================================================
// VIEWS/GLOBAL/_BRAND.PHP
// -----------------------------------------------------------------------------
// Outputs the brand.
// =============================================================================

$site_name        = get_bloginfo( 'name' );
$site_description = get_bloginfo( 'description' );
$logo             = x_make_protocol_relative( x_get_option( 'x_logo' ) );
$site_logo        = '<img src="' . $logo . '" alt="' . $site_description . '">';

?>

<?php echo ( is_front_page() ) ? '<h1 class="visually-hidden">' . $site_name . '</h1>' : ''; ?>


	<a style="width:265px;" href="<?php echo home_url( '/' ); ?>" class="<?php x_brand_class(); ?>" title="<?php echo $site_description; ?>">
	  <?php //echo ( $logo == '' ) ? $site_name : $site_logo; ?>
		<span class="x-hidden-phone">
		<p style="padding:15px">Holzheid vs. Comptroller<br>of the Treasury of Maryland</p>
		<p style="margin-top:-20px;padding-left:15px;font-size: 14px;font-weight: 100;line-height: 17px;margin-bottom:15px;">Class Action</p>
	</span>
	</a>
