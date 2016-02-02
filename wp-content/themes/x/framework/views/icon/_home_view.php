<div class="x-column disclaimer x-xm left-text">
<div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;">
  <span style="color: #9b9b9b;
font-family: Helvetica;
font-size: 24px;
font-weight: 400;
line-height: 29px;">Case Overview</span>
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
</article>
<div class="bg-grey submit-form" id="SubmissionForm">
  <form>
      <div>
        <label style="margin-bottom:10px;">Submit your information to be part of the claim…</label>
      </div>
      <div>
        <input id="submitInfo_fname" type="text" style="width: 100%;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="First Name" />
      </div>
      <div>
        <input id="submitInfo_lname" type="text" style="width: 100%;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Last Name" />
      </div>
      <div>
        <input id="submitInfo_email" type="text" style="width: 100%;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Email" />
      </div>
      <div>
        <input id="submitInfo_phone" type="text" style="width: 100%;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Phone number" />
      </div>
      <div style="width: 100%;text-align:right">
        <button id="submitInfoBtn" onclick="return false;" class="submit-button-width" style="height: 44px;background-color: #3b8dbd;border-radius: 8px;color:white" >Submit</button>
      </div>
  </form>
</div>
<?php $admin_url = admin_url( 'admin-ajax.php' );?>
<script>
    jQuery(document).ready(function($){
      jQuery("#submitInfoBtn").click(function() {
        var fname = jQuery("#submitInfo_fname").val() || "";
        var lname = jQuery("#submitInfo_lname").val() || "";
        var email = jQuery("#submitInfo_email").val() || "";
        var phone = jQuery("#submitInfo_phone").val() || "";

        if (fname == "") {
          alert("Please input your first name");
          return;
        }
        if (lname == "") {
          alert("Please input your last name");
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
            jQuery("#submitInfo_fname").val("");
            jQuery("#submitInfo_lname").val("");
            jQuery("#submitInfo_email").val("");
            jQuery("#submitInfo_phone").val("");
            alert("Thank you for your submission.");
          } else {
            alert("Unable to submitt at this time, please try again later");
          }
        });
      });

    });
</script>
<div style="border-bottom: 1px solid rgba(0,0,0,0.075); margin-bottom:30px;margin-top:50px;">
  <span style="color: #9b9b9b;
font-family: Helvetica;
font-size: 24px;
font-weight: 400;
line-height: 29px;">Case Status Update</span>
</div>
<!-- <article style="max-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="">
    <div class="">
       <span style="font-size: 12px;
font-weight: 300;
line-height: 14px;">On&nbsp;&nbsp;Jan 19. 2016 </span>
       <span style="
font-size: 14px;
font-weight: 400;
line-height: 20px;
color: #313131;">
       <p>
         A motion to dismiss was filed by the defendants in Baltimore City Circuit Court on January 8, 2016.  The motion seeks to dismiss all of the plaintiffs’ claims on the theory that they should have been brought through the administrative process established for tax disputes.  We are preparing a response to the motion that will be filed later this month.
       </p>
       </span>
    </div>
  </div>
</article>

<article style="max-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="">
    <div class="">
       <span style="font-size: 12px;
font-weight: 300;
line-height: 14px;">On&nbsp;&nbsp;December 10, 2015 </span>
       <span style="
font-size: 14px;
font-weight: 400;
line-height: 20px;
color: #313131;">
       <p>
An amended complaint was filed in this case.  Three named plaintiffs were added – Bruce Feinerman and Jeffrey and Arielle Grill.  The named plaintiffs also stated an additional claim against Defendant the Comptroller of the Treasury of Maryland for violation of the dormant Commerce Clause of the United States Constitution.  A responsive pleading must be filed by the defendants by January 10, 2016.
       </p>
       </span>
    </div>
  </div>
</article>

<article style="max-width:1000px;width:90%" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="">
    <div class="">
       <span style="font-size: 12px;
font-weight: 300;
line-height: 14px;">On&nbsp;&nbsp;November 13, 2015 </span>
       <span style="
font-size: 14px;
font-weight: 400;
line-height: 20px;
color: #313131;">
       <p>
The original complaint was filed was filed in Baltimore City Circuit Court on behalf of Michael Holzheid against the Comptroller of the Treasury of Maryland and the State of Maryland.
       </p>
       </span>
    </div>
  </div>
</article> -->

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
line-height: 14px;"><?php the_time('M  d.  Y') ?></span>
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
