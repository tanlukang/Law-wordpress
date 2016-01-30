<div class="x-column disclaimer x-xm left-text">
<div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
  <span style="color: #9b9b9b;font-family: Helvetica;font-size: 24px;line-height: 29px;">Documents Pertaining to this Class Action</span>
</div>
<?php
$docPosts = new WP_Query();
$docPosts->query('cat=4');
?>
<?php while ($docPosts->have_posts()) : $docPosts->the_post(); ?>
<article style="max-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="">
    <div class="">
       <span style="font-size: 12px;
font-weight: 300;
line-height: 14px;">On &nbsp;&nbsp; <?php the_time('M  d.  Y') ?></span>
       <span style="
font-size: 14px;
font-weight: 400;
line-height: 20px;
color: #313131;">
       <?php the_content(); ?>
       </span>
    </div>
  </div>
</article>
<?php endwhile; ?>
</div>
