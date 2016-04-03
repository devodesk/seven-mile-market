<?php /* Loop Name: Patters Page */ ?>



<!--Custom icon-->

<div class="info-page">
  <?php 
  
  $image = get_field('page-icon');
  
  if( !empty($image) ): ?>
  <div class="page-icon"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
  <?php endif; ?>
  <div class="page-title">
    <h1><?php the_field('page-title'); ?></h1>
  </div>
</div>
<!--End of Custome icon-->

<?php

$categories = get_categories('child_of=41');
//print_r($categories);
foreach ($categories as $category) {	
  echo '<div class="row"><h3>' .$category->name. '</h3>';
  $argu = array(
	'cat' => $category->term_id,
	'posts_per_page' =>-1,
	'order' => 'DESC'
  ); 
  $query = new wp_Query($argu);
  $i=0;
  while($query->have_posts()) : $query->the_post(); 
  $featured_post_id=get_the_ID();
  if(++$i%4 == 0) echo '<div class="clearfix"></div>';
?>
    <div class="span3">
      <div class="banner-wrap home-banner">
        <h5>
          <?php the_title(); ?>
        </h5>
        <figure class="featured-thumbnail">
          <?php the_post_thumbnail(); ?>
        </figure>
        <p>
          <?php the_content(); ?>
        </p>
        <!--  <div class="link-align banner-btn"><a target="_self" class="btn btn-link" title="Read more" href="<?php the_permalink(); ?>">Read more</a></div>
                </div> --> 
        <!-- .banner-wrap (end) --></div>
    </div>
    <!--#post-->
<?php  endwhile; ?>
<?php echo "</div>";} ?>

<div class="clear"></div>
<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
<!--.pagination-->
<!--</div>
#post--> 

