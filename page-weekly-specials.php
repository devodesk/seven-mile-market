<?php
/**
* Template Name: Weekly Specials
*/

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
  <div class="container">
    <div class="row">
      <div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
        <div class="row">
          <div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
            <?php get_template_part("static/static-title"); ?>
          </div>
        </div>
        <div class="row">
          <div class="<?php echo cherry_get_layout_class( 'content' ); ?> <?php echo of_get_option('blog_sidebar_pos') ?> span9" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
          <br>
          <br>
            <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
              <?php the_content(); ?>
              <div class="clear"></div>
              <div style="font-size: 12pt;"><span style="text-decoration: underline;"><a href="<?php echo get_field('weekly_specials_pdf_file', get_the_ID()); ?>">Print a PDF of this week's specials</a></span></div>
              <div><a href="<?php echo get_field('weekly_specials_image_1', get_the_ID()); ?>"><img src="<?php echo get_field('weekly_specials_image_1', get_the_ID()); ?>" alt="page1" width="550" height="712" class="alignnone size-full wp-image-23518" /></a></div>
              <div><a href="<?php echo get_field('weekly_specials_image_2', get_the_ID()); ?>"><img src="<?php echo get_field('weekly_specials_image_2', get_the_ID()); ?>" alt="Page2" width="550" height="712" class="alignnone size-full wp-image-23519" /></a></div>
            </div>
            <div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php"> </div>
            <!--#post-->
            <?php endwhile; ?>
          </div>
          <div class="span3 sidebar" id="sidebar" data-motopress-type="static-sidebar"  data-motopress-sidebar-file="sidebar.php">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
