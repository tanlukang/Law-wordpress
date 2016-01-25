<?php

// =============================================================================
// VIEWS/GLOBAL/_CONTENT-THE-CONTENT.PHP
// -----------------------------------------------------------------------------
// Display of the_content() for various entries.
// =============================================================================

?>

<?php do_action( 'x_before_the_content_begin' ); ?>

<div style="color: #272727;
font-family: Helvetica;
font-size: 14px;
font-weight: 400;
line-height: 20px;" class="entry-content content">

<?php do_action( 'x_after_the_content_begin' ); ?>

  <?php the_content(); ?>
  <?php x_link_pages(); ?>

<?php do_action( 'x_before_the_content_end' ); ?>

</div>

<?php do_action( 'x_after_the_content_end' ); ?>
