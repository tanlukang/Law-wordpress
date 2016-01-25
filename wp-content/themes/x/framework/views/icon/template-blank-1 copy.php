<?php

// =============================================================================
// VIEWS/ICON/TEMPLATE-BLANK-1.PHP (Container | Header, Footer)
// -----------------------------------------------------------------------------
// A blank page for creating unique layouts.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-main full" role="main">
    <div style="min-height:1000px;" class="x-container max width">
      <div style="float:left;height:668px;width:265px">
        <div style="width: 160px;
height: 160px;
background-color: white;
border: 1px solid #ddd;border-radius:360px;margin:auto;margin-top:50px;">
          <image src="<?php bloginfo('template_directory'); ?>/framework/img/global/bitmap.png" style="margin-left:10px;width:140px;height:140px;" />
        </div>
        <div style="margin-top:20px;">
          <p style="height: 23px;text-align:center;
color: #272727;
font-family: .AppleSystemUIFont;
font-size: 20px;
font-weight: 400;
line-height: 23px;">
            Brown GoldStein & Levy
          </p>
          <p style="text-align:left;width: 156px;margin-left:50px;
height: 45px;
color: #9b9b9b;
font-family: .AppleSystemUIFont;
font-size: 12px;
font-weight: 400;
line-height: 15px;">
            120 East Baltimore Street<br>
            Suite 1700<br>
            Baltimore, Maryland 21202<br>
          </p>
          <hr style="width: 209px;
height: 1px;
border: 1px solid #ddd;margin:auto">
          <p style="text-align:center;margin:20px 0;
height: 40px;
color: #272727;
font-family: .AppleSystemUIFont;
font-size: 14px;
font-weight: 700;
line-height: 20px;">
            Daniel F. Goldstein<br>
            Stuart H. Levine
          </p>
          <hr style="width: 209px;
height: 1px;
border: 1px solid #ddd;margin:auto">
          <p style="text-align:center;margin:20px 0;
height: 60px;
color: #272727;
font-family: .AppleSystemUIFont;
font-size: 12px;
font-weight: 400;
line-height: 15px;">
            Contact<br>
Telephone: 410-962-1030<br>
Facsimile: 410-385-0869<br>
Email: Holzheid@browngold.com<br>
          </p>
          <div style="height:25px;">
            <a href="" style="margin:0 10px 0 60px;float:left;"><image src="<?php bloginfo('template_directory'); ?>/framework/img/global/social-twitter-ionicons.png" /></a>
            <a href="" style="margin:0 10px;float:left;"><image src="<?php bloginfo('template_directory'); ?>/framework/img/global/social-facebook-ionicons.png" /></a>
            <a href="" style="margin:0 10px;float:left;"><image src="<?php bloginfo('template_directory'); ?>/framework/img/global/email-ionicons.png" /></a>
            <a href="" style="margin:0 10px;float:left;"><image src="<?php bloginfo('template_directory'); ?>/framework/img/global/social-rss-ionicons-copy.png" /></a>
          </div>
          <div style="width:200px;margin:auto;marign-top:20px;">
            <image src="<?php bloginfo('template_directory'); ?>/framework/img/global/bitmap2.png" />
          </div>
        </div>
      </div>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php
          if (get_the_ID() == 13) {
        ?>
        <div style="float:left;margin-left:100px;margin-top:50px;min-height:668px;width:60%;">
          <div>
            <span style="color: #9b9b9b;
font-family: Helvetica;
font-size: 24px;
font-weight: 400;
line-height: 29px;">Disclaimer</span>
          </div>
          <article style="max-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-wrap">
              <div class="">
                <?php x_get_view( 'global', '_content', 'the-content' ); ?>
              </div>
            </div>
          </article>
      </div>
        <?php
      } else if (get_the_ID() == 16) {
         ?>
         <div style="float:left;margin-left:100px;margin-top:50px;min-height:668px;width:60%;">
           <?php
           $faqPosts = new WP_Query();
           $faqPosts->query('cat=3');
           ?>
           <?php while ($faqPosts->have_posts()) : $faqPosts->the_post(); ?>
           <article style="max-width:1000px;min-width:100px;width:90%;margin-bottom:50px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <div class="x-container max width">
               <div onclick="javascript:faqTitleClick(this);" style="color: #9b9b9b;
  font-size: 18px;
  font-weight: 400;
  line-height: 21px;margin-bottom:20px;">
                 <div style="margin-right:10px;display:inline-block"><image class="faq-image" src="<?php bloginfo('template_directory'); ?>/framework/img/global/ios-arrow-down-ionicons-copy.png" /></div><?php the_title(); ?>
               </div>
               <div class="hide" style="font-family: Helvetica;
  font-size: 14px;
  font-weight: 400;
  line-height: 18px;color:black">
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
        <?php
    } else if (get_the_ID() == 24) {
       ?>
       <div style="float:left;margin-left:100px;margin-top:50px;min-height:668px;width:60%;">
         <div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
           <span style="color: #9b9b9b;
font-family: Helvetica;
font-size: 24px;
font-weight: 400;
line-height: 29px;">Documents Pertaining to this Class Action</span>
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
      <?php
    } else if (get_the_ID() == 10) {
        ?>
        <div style="float:left;margin-left:100px;margin-top:50px;min-height:1000px;width:60%;">
          <div style="margin-bottom:30px;">
          <div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
            <span style="color: #9b9b9b;
 font-family: Helvetica;
 font-size: 24px;
 font-weight: 400;
 line-height: 29px;">CASE Overview</span>
          </div>
          <article style="ax-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div><span style="
font-size: 14px;
font-weight: 400;
line-height: 20px;
color: #313131;">
              <?php
              $pid = 34;
              $post_id_34 = get_post($pid, ARRAY_A);
              $content = $post_id_34['post_content'];
              echo $content;
              ?>
            </span></div>
          </article></div>

          <div style="padding:50px;">
            <form>
                <div>
                  <label>Submit your information to be part of the claim…</label>
                </div>
                <div>
                  <input id="submitInfo_name" type="text" style="width: 395px;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Name" />
                </div>
                <div>
                  <input id="submitInfo_email" type="text" style="width: 395px;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Email" />
                </div>
                <div>
                  <input id="submitInfo_phone" type="text" style="width: 395px;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Phone number" />
                </div>
                <div style="width: 395px;text-align:right">
                  <button id="submitInfoBtn" onclick="return false;" style="width: 151px;height: 44px;background-color: #3b8dbd;border-radius: 8px;color:white" >Submit</button>
                </div>
            </form>
          </div>
          <?php $admin_url = admin_url( 'admin-ajax.php' );?>
          <script>
              jQuery(document).ready(function($){
                jQuery("#submitInfoBtn").click(function() {
                  var name = jQuery("#submitInfo_name").val() || "";
                  var email = jQuery("#submitInfo_email").val() || "";
                  var phone = jQuery("#submitInfo_phone").val() || "";

                  if (name == "") {
                    alert("Please input your name");
                    return;
                  }

                  if (email == "") {
                    alert("Please input your email");
                    return;
                  }

                  if (phone == "") {
                    alert("Please input your phone");
                    return;
                  }

                  var data={
                    action:'submitInfo',
                    name:name,
                    email:email,
                    phone:phone
                  }
                  $.post("<?php echo $admin_url;?>", data, function(response) {
                    response = JSON.parse(response);
                    if (response.status != undefined && response.status == 0) {
                      jQuery("#submitInfo_name").val("");
                      jQuery("#submitInfo_email").val("");
                      jQuery("#submitInfo_phone").val("");
                      alert("submit success");
                    } else {
                      alert("Please try again later");
                    }
                  });
                });

              });
          </script>

          <div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
            <span style="color: #9b9b9b;
 font-family: Helvetica;
 font-size: 24px;
 font-weight: 400;
 line-height: 29px;">CASE STATUS UPDATE</span>
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
<?php } ?>
      <?php endwhile; ?>
    </div>
  </div>

  <?php x_get_view( 'icon', '_template-blank-sidebar' ); ?>

<?php get_footer(); ?>
