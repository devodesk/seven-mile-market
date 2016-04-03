<?php
function elegance_widgets_init() {
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> theme_locals("sidebar"),
		'id' 						=> 'main-sidebar',
		'description'   => theme_locals("sidebar_desc"),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Header Widget Area
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> "Header Area",
		'id' 						=> 'header-sidebar',
		'description'   => "Header Area",
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
		// Header Widget Area 2
	// Location: at the top of the footer, above the copyright
	register_sidebar(array(
		'name'					=> "Header Area 2",
		'id' 						=> 'header-sidebar-2',
		'description'   => "Header Area 2",
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	

}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );




// Creating the widget 
class ism_department_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'ism_department_sidebar_widget', 
		
		// Widget name will appear in UI
		__('Departments Widget', 'wpb_widget_domain'), 
		
		// Widget description
		array( 'description' => __( 'Departments Widget to show on sidebar', 'wpb_widget_domain' ), ) 
		);
	}
	
	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		
		echo '<div class="row-fluid department_sidebar">';
		//query departments
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
 	?>
    
    <div class="span12">
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
      </div>
      <!-- .banner-wrap (end) -->
     </div>
    <?php
		endwhile;
		
		echo '</div>';
		echo $args['after_widget'];
	}
			
	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
		$title = $instance[ 'title' ];
		}
		else {
		$title = __( 'New title', 'wpb_widget_domain' );
		}
	}
} // Class wpb_widget ends here

// Register and load the widget
function ism_load_widget() {
	register_widget( 'ism_department_widget' );
}
add_action( 'widgets_init', 'ism_load_widget' );

function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'departments' )) {
          $single_template = dirname( __FILE__ ) . '/../single-departments.php';
     }
     return $single_template;
} 
add_filter( "single_template", "get_custom_cat_template" ) ;
 
?>