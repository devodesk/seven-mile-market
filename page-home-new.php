<?php
/**
* Template Name: Home Page New
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
  <div class="container">
    <div class="row">
      <?php do_action( 'cherry_before_home_page_content' ); ?>
      <div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
        <div class="row">
          <div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
          <?php if( get_field('smm_home_show_slider_or_image') == 'Slider' ): ?>
            <?php get_template_part("static/static-slider"); ?>
          <?php else : ?>
          	
              <?php if( get_field('number_of_images') == '2' ): ?>
                <div class="row">
                  <div class="span6">
                    <a href="<?php echo get_field('smm_home_static_image_popup_url1');?>"><img src="<?php echo get_field('smm_home_static_image1');?>" alt=""></a>
                  </div>
                  <div class="span6">
                    <a href="<?php echo get_field('smm_home_static_image_popup_url2');?>"><img src="<?php echo get_field('smm_home_static_image2');?>" alt=""></a>
                  </div>
                </div>
              <?php else : ?>
                <a href="<?php echo get_field('smm_home_static_image_popup_url');?>"><img src="<?php echo get_field('smm_home_static_image1');?>" alt=""></a>
              <?php endif; ?>
		      <?php endif; ?>
          </div>
        </div>
        <div class="row">
          <?php
	$argu = array(
		'cat' => 40,
		'posts_per_page' =>-1,
		'orderby' => 'title',
		'order' => 'ASC'
	); 
	$query = new wp_Query($argu);
	while($query->have_posts()) : $query->the_post(); 
	$featured_post_id=get_the_ID();
	$department_see_more = get_post_meta(get_the_ID(), 'department_see_more', true);
	$department_available_for_delivery = get_post_meta(get_the_ID(), 'department_available_for_delivery', true);
 	?>
          <div class="span3">
            <div class="banner-wrap home-banner">
              <h5>
                <?php the_title(); ?>
              </h5>
              <figure class="featured-thumbnail"><a title="" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
				<?php if($department_see_more == 'Yes'):?>
                <div class="home-delivery-tag"><a href="<?php the_permalink(); ?>">See Item Lists &rarr;</a></div>
                <?php endif;?>
              </figure>
              <p>
                <?php the_excerpt(); ?>
              </p>
			  <?php if($department_available_for_delivery == 'Yes'):?>
                <p><strong>Available for delivery</strong></p>
              <?php endif;?>
            </div>
            <!-- .banner-wrap (end) --></div>
          <?php  endwhile; ?>
        </div>
        <!--#post--> 
        
      </div>
      <div class="row">
        <div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
          <?php //get_template_part("loop/loop-page"); ?>
        </div>
      </div>
    </div>
    <?php //do_action( 'cherry_after_home_page_content' ); ?>
  </div>
</div>
</div>
<?php get_footer(); ?>
