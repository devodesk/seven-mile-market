<?php
/**
 * Template Name: Tour The Store Template
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page.php" data-motopress-wrapper-type="content">
				                
				<div class="row">
					<div class="span10 right" id="content" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                    
                    	<div class="col-md-6 offset2 text-center">
                        	<h1 style="font-weight:bold; color: #c15838;">There’s lots <span style="color:#37477d">in store</span> for you at <br><span style="color:#37477d">Seven Mile Market!</span></h1>
                        </div>
						<?php get_template_part( 'wowslider' );?>
                        
						<?php get_template_part("loop/loop-page"); ?>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div><!-- #main-content -->

<?php get_footer(); ?>