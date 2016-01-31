<div class="x-column disclaimer x-xm left-text">
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
</article>
<div class="bg-grey submit-form">
  <form>
      <div>
        <label>Submit your information to be part of the claim…</label>
      </div>
      <div>
        <input id="submitInfo_name" type="text" style="width: 100%;height: 43px;background-color: white;border: 1px solid #ddd;border-radius: 2px;" placeholder="Name" />
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
