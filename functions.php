<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

function bootstrapstarter_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_register_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css' );
    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    wp_register_style('reset', get_template_directory_uri() . '/assets/css/reset.css' );
    wp_register_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css?v=1.1.1' );
    $dependencies = array('bootstrap', 'slick', 'slick-theme', 'font-awesome', 'slick-theme', 'reset','custom-css');
	wp_enqueue_style( 'bootstrapstarter-style', get_stylesheet_uri(), $dependencies, "1.1.0" ); 
}

function bootstrapstarter_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', $dependencies, '', true );
    wp_enqueue_script('slick', get_template_directory_uri().'/assets/js/slick.min.js', $dependencies, '', true );
    wp_enqueue_script('general-js', get_template_directory_uri().'/assets/js/general.js', $dependencies, '', true );
}

add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'bootstrapstarter_enqueue_scripts' );

function bootstrapstarter_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'bootstrapstarter_wp_setup' );

add_theme_support( 'post-thumbnails' );
// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonial', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonial', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonial', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Testimonial', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Client Testimonial', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial', $args );

	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Service', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Service', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Service', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Service', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Services', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Services', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Services:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Services found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
	);

	register_post_type( 'service', $args );

	$labels = array(
		'name'                  => _x( 'Work', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Work', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Work', 'text_domain' ),
		'name_admin_bar'        => __( 'Work', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Work', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Work', 'text_domain' ),
		'description'           => __( 'Client Work', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),		
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'work', $args );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Work Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Work Category', 'textdomain' ),
		'popular_items'              => __( 'Popular Work Category', 'textdomain' ),
		'all_items'                  => __( 'All Work Category', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Category', 'textdomain' ),
		'update_item'                => __( 'Update Category', 'textdomain' ),
		'add_new_item'               => __( 'Add New Category', 'textdomain' ),
		'new_item_name'              => __( 'New Category Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Work Category with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Work Category', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Work Category', 'textdomain' ),
		'not_found'                  => __( 'No Work Category found.', 'textdomain' ),
		'menu_name'                  => __( 'Work Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'Category' ),
	);

	register_taxonomy( 'work_cat', 'work', $args );

	$labels = array(
		'name'               => _x( 'Industries', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Industries', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Industriess', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Industries', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Industries', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Industries', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Industries', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Industries', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Industries', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Industriess', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Industriess', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Industriess:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Industriess found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Industriess found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'industries' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
	);

	register_post_type( 'industries', $args );

	$labels = array(
		'name'               => _x( 'Technologies', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Technologies', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Technologies', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Technologies', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Technologies', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Technologies', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Technologies', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Technologies', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Technologies', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Technologiess', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Technologiess', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Technologiess:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Technologiess found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Technologiess found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'technologies' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'can_export'         => true,
		'exclude_from_search'   => false,		
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes' )
	);

	register_post_type( 'technologies', $args );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Technology Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Technology Category', 'textdomain' ),
		'popular_items'              => __( 'Popular Technology Category', 'textdomain' ),
		'all_items'                  => __( 'All Technology Category', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Category', 'textdomain' ),
		'update_item'                => __( 'Update Category', 'textdomain' ),
		'add_new_item'               => __( 'Add New Category', 'textdomain' ),
		'new_item_name'              => __( 'New Category Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate Technology Category with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove Technology Category', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Technology Category', 'textdomain' ),
		'not_found'                  => __( 'No Technology Category found.', 'textdomain' ),
		'menu_name'                  => __( 'Technology Category', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'technologycat' ),
	);

	register_taxonomy( 'technology_cat', 'technologies', $args );
}
add_action( 'init', 'custom_post_type', 0 );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'About Sidebar', 'wishtree' ),
        'id' => 'about-sidebar',
        'description' => __( 'Menu of about menu', 'wishtree' ),
        'before_widget' => '<div class="footer-widget footer-widget%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'wishtree' ),
        'id' => 'blog-sidebar',
        'description' => __( 'Menu of blog menu', 'wishtree' ),
        'before_widget' => '<div class="footer-widget footer-widget%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
}

function getBreadCrumb($breadcrumbMenu){
	?>
	<p id="breadcrumbs" class="breadcrumbs">
        <span>
            <span>
            <a href="https://www.openxcell.com">Home</a>
            	<?php if(!empty($breadcrumbMenu)): ?>
            		<?php foreach($breadcrumbMenu as $breadcrumbSingleMenu): ?>
            			»
		                <span class="<?php echo ($breadcrumbSingleMenu['link']) ? : 'breadcrumb_last'; ?>">
		                <?php if($breadcrumbSingleMenu['link']): ?>
		                <span>
		                	<a href="<?php echo $breadcrumbSingleMenu['link']; ?>"><?php echo $breadcrumbSingleMenu['text']; ?></a>
		                </span>
		                <?php else: ?>
		                	<span class="breadcrumb_last"><?php echo $breadcrumbSingleMenu['text']; ?></span>
		                	</span>
		                <?php endif; ?>
            		<?php endforeach; ?>
            	<?php endif; ?>                
            </span>
        </span>
    </p>
	<?php
}

/****For blog thumb***/
add_image_size( 'blog-thumb', 320, 180, true );

?>