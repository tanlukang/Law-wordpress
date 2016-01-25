

<div class="x-container ">
  <div class="x-column x-2-5">
    <?php
    $faqPosts = new WP_Query();
    $faqPosts->query('p=42');
    ?>
    <?php while ($faqPosts->have_posts()) : $faqPosts->the_post(); ?>
    <div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
      <span style="color: #9b9b9b;
    font-family: Helvetica;
    font-size: 24px;
    font-weight: 400;
    line-height: 29px;"><?php echo get_the_title(); ?></span>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="">
          <?php x_get_view( 'global', '_content', 'the-content' ); ?>
      </div>
    </article>
    <?php endwhile; ?>
  </div>
  <div class="x-column x-1-6"></div>
  <div class="x-column x-2-5">
    <?php
    $faqPosts2 = new WP_Query();
    $faqPosts2->query('p=44');
    ?>
    <?php while ($faqPosts2->have_posts()) : $faqPosts2->the_post(); ?>
    <div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
      <span style="color: #9b9b9b;
    font-family: Helvetica;
    font-size: 24px;
    font-weight: 400;
    line-height: 29px;">Stuart H. Levine</span>
    </div>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="">
          <?php x_get_view( 'global', '_content', 'the-content' ); ?>
      </div>
    </article>
    <?php endwhile; ?>
  </div>
  <div style="clear:both;"></div>
</div>
