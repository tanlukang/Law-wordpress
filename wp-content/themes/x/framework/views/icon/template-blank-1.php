<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-BLANK-1.PHP (Container | Header, Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-main full" role="main">
    <article <?php post_class(); ?>>
      <div class="entry-wrap">
        <div class="x-container max width">
          <div class="bg-grey center-text x-column x-1-4 x-sm x-hidden-phone x-hide-md" style="width:265px; margin-top:-50px;">

          <?php x_get_view('icon', '_my_sidebar'); ?>

          </div>
           <?php while ( have_posts() ) : the_post(); ?>
             <?php
               if (get_the_ID() == 13) {
                 x_get_view('icon', '_disclaimer_view');
               } else if (get_the_ID() == 16) {
                 x_get_view('icon', '_faq_view');
               } else if (get_the_ID() == 24) {
                 x_get_view('icon', '_doc_view');
               } else if (get_the_ID() == 10) {
                 x_get_view('icon', '_home_view');
               } else if (get_the_ID() == 27) {
                 x_get_view('icon', '_profile_view');
               } else if (get_the_ID() == 46) {
                 echo '  <div class="center-text x-column x-md">';
                 x_get_view('icon', '_my_sidebar');
                 echo '</div>';
               }
             ?>
           <?php endwhile; ?>
          </div>
         <div style="clear:both">
        </div>
      </div>
    </article>
  </div>

  <?php //x_get_view( 'icon', '_template-blank-sidebar' ); ?>

<?php get_footer(); ?>
