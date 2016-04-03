<?php

/**

* Template Name: order email

*/


 
get_header(); ?>

<div class="motopress-wrapper content-holder clearfix online-ordering-form">
  <div class="container">
    <div class="row">
      <div data-motopress-wrapper-type="content" data-motopress-wrapper-file="page.php" class="span12">
        <div class="row">
          <div data-motopress-static-file="static/static-title.php" data-motopress-type="static" class="span12">
            <section class="title-section">
              <h1 class="title-header"> </h1>
              
              <!-- BEGIN BREADCRUMBS-->
              
              <ul class="breadcrumb breadcrumb__t">
                <li><a href="http://staimanmedia.com/seven-mile-market">Home</a></li>
                <li class="divider">&thinsp;|&thinsp;</li>
                <li class="active">Email  Orders</li>
              </ul>
              
              <!-- END BREADCRUMBS --> 
              
            </section>
            
            <!-- .title-section --> 
            
          </div>
        </div>
        <div class="row">
          <div data-motopress-loop-file="loop/loop-page.php" data-motopress-type="loop" id="content" class="span10 offset1 right order-contents">
            <div class="page type-page status-publish hentry"> 
              
              <?php get_template_part('page-order-form-times')?><br>
<br>
<br>

              <?php get_template_part('page-order-form-bullets')?>
                
              <!--Custom icon-->
              <?php
				// Start the Loop.
				if ( have_posts() ) : the_post();
 					the_content();
				endif;
			?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
