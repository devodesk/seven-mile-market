<?php
/**
 * The wow slider
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<?php if( have_rows('rbsg_gallery_image_repeater') ): $iter = 0;?>

<div class="col-md-6 offset2"> 
  <div style="max-width: none;"> 
    <!-- Start WOWSlider.com BODY section --> 
    <script type="text/javascript">
	var SITE_URL = 'http://wowslider.com/';
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/wowslider/styles/style.css">
    <div  class="ws_gestures" id="wowslider-container1" data-no-devices="true" data-fullscreen="true">
      <div class="ws_images">
        <ul>
          <?php while( have_rows('rbsg_gallery_image_repeater') ) : the_row(); ?>
          <?php $img_url = get_sub_field('rbsg_gallery_images'); ?>
          <li><img src="<?php echo $img_url; ?>" alt="" title="" id="wows1_<?php echo $iter++;?>"/></li>
          <?php endwhile; ?>
        </ul>
      </div>
      <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/wowslider/wowslider.js"></script> 
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/wowslider/script.js"></script> 
    <br>
  </div>
</div>
<?php endif; ?>