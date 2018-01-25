<div class="x-column disclaimer x-xm left-text">
<div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
  <h2 style="color: #9b9b9b; font-family: Helvetica; font-size: 24px; font-weight: 400; line-height: 29px; margin:0;">Court Documents</h2>
</div>
<?php
$docPosts = new WP_Query();
$docPosts->query('cat=4&order=asc&posts_per_page=-1');
?>
<?php while ($docPosts->have_posts()) : $docPosts->the_post(); ?>
<article style="max-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="">
    <div class="">
       <h5 style="font-size: 12px;
font-weight: 300;
line-height: 14px;color:#999;"><?php the_time('M  d.  Y') ?></h5>
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
