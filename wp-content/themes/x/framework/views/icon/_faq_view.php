<div class="x-column disclaimer x-xm left-text">

<?php
$faqPosts = new WP_Query();
$faqPosts->query('cat=3');
?>
<?php while ($faqPosts->have_posts()) : $faqPosts->the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="x-container max width">
    <div onclick="javascript:faqTitleClick(this);" style="color: #9b9b9b;font-size: 18px;font-weight: 400;line-height: 21px;margin-bottom:20px;">
      <div style="margin-right:10px;display:inline-block"><image class="faq-image" src="<?php bloginfo('template_directory'); ?>/framework/img/global/ios-arrow-down-ionicons-copy.png" /></div><?php the_title(); ?>
    </div>
    <div class="hide" style="font-family: Helvetica;font-size: 14px;font-weight: 400;line-height: 18px;color:black">
      <?php the_content(); ?>
    </div>
  </div>
  <script>
     function faqTitleClick(e) {
       var faqBody = jQuery(e).next();
       var arrowImg = jQuery(e).find(".faq-image");
       if (faqBody.hasClass("hide")) {
         faqBody.removeClass("hide");
         faqBody.show();
         arrowImg.attr("src","<?php bloginfo('template_directory'); ?>/framework/img/global/ios-arrow-down-ionicons.png");
       } else {
         faqBody.addClass("hide");
         faqBody.hide();
         arrowImg.attr("src","<?php bloginfo('template_directory'); ?>/framework/img/global/ios-arrow-down-ionicons-copy.png")
       }
     }
  </script>
</article>
<?php endwhile; ?>
</div>
