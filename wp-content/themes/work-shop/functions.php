<?php

get_template_parts( array( 'theme-options') );

add_action( 'init', 'create_post_type' );

function create_post_type() {
	register_post_type( 'projects',
		array(
			'labels' => array(
				'name' => 'Projects',
				'singular_name' =>'Project',
				'add_new' => 'Add New',
			    'add_new_item' => 'Add New Project',
			    'edit_item' => 'Edit Project',
			    'new_item' => 'New Project',
			    'all_items' => 'All Projects',
			    'view_item' => 'View Project',
			    'search_items' => 'Search Projects',
			    'not_found' =>  'No Projects found',
			    'not_found_in_trash' => 'No Projects found in Trash', 				
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'projects'),
			'supports' => array( 'title', 'editor', 'thumbnail' )			
		)
	);
		
}

function projects_taxonomy() {  
   register_taxonomy(  
    'project_categories',  
    'projects',  
    array(  
        'hierarchical' => true,  
        'label' => 'Project Categories',  
        'query_var' => true,  
        'rewrite' => array('slug' => 'project_categories')  
    )  
);  
}
add_action( 'init', 'projects_taxonomy' );  

	
function theme_scripts() {
	//wp_deregister_script( 'jquery' );
    
    wp_register_script( 'jquery', get_template_directory_uri() . '/_/js/jquery.js');
    wp_register_script( 'less', get_template_directory_uri() . '/_/js/less.js');
    wp_register_script( 'bootstrap', get_template_directory_uri() . '/_/js/bootstrap.js');
    wp_register_script( 'flexslider', get_template_directory_uri() . '/_/js/flexslider.js');
    wp_register_script( 'functions', get_template_directory_uri() . '/_/js/functions.js');

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'less' );    
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'flexslider' ); 
	wp_enqueue_script( 'functions' );
	
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_styles() { 
  
  wp_register_style( 'bootstrap', get_template_directory_uri() . '/_/css/bootstrap/bootstrap.css');    
  wp_register_style( 'style-less', get_template_directory_uri() . '/_/css/style.less');  
  //wp_register_style( 'style-css', get_template_directory_uri() . '/_/css/style.css');    
  wp_register_style( 'pictograms', get_template_directory_uri() . '/_/fonts/pictograms.css');  
   
  wp_enqueue_style( 'bootstrap' );   
  wp_enqueue_style( 'style-less' );
  wp_enqueue_style( 'pictograms' );  
  
}
add_action('wp_enqueue_scripts', 'theme_styles');

function enqueue_less_styles($tag, $handle) {
    global $wp_styles;
    $match_pattern = '/\.less$/U';
    if ( preg_match( $match_pattern, $wp_styles->registered[$handle]->src ) ) {
        $handle = $wp_styles->registered[$handle]->handle;
        $media = $wp_styles->registered[$handle]->args;
        $href = $wp_styles->registered[$handle]->src . '?ver=' . $wp_styles->registered[$handle]->ver;
        $rel = isset($wp_styles->registered[$handle]->extra['alt']) && $wp_styles->registered[$handle]->extra['alt'] ? 'alternate stylesheet' : 'stylesheet';
        $title = isset($wp_styles->registered[$handle]->extra['title']) ? "title='" . esc_attr( $wp_styles->registered[$handle]->extra['title'] ) . "'" : '';

        $tag = "<link rel='stylesheet' id='$handle' $title href='$href' type='text/less' media='$media' />";
    }
    return $tag;
}
add_filter( 'style_loader_tag', 'enqueue_less_styles', 5, 2);


if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 300, 183, true ); 
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'square', 720, 720, true );  	
	add_image_size( 'project', 720, 440, true );  	
	add_image_size( 'full', 1440, 878, true );  
}


// Remove post formats support
add_action('after_setup_theme', 'remove_post_formats', 11);
function remove_post_formats() {
    remove_theme_support('post-formats');
}	
	
	
function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/_/css/login.css' );
}
add_action('login_head', 'login_css');

function customAdmin() {
	wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/_/css/admin.css' );}
add_action('admin_head', 'customAdmin');


function remove_menus () {
global $menu;
	$restricted = array( __('Comments'),/*__('Tools') ,__('Posts'),__('Settings') */ );
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');


function remove_acf_menu(){
    // provide a list of usernames who can edit custom field definitions here
    $admins = array( 
        'dev','greg','nic'
    );
 
    // get the current user
    $current_user = wp_get_current_user();
 
    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }
 
}
add_action( 'admin_menu', 'remove_acf_menu' );


show_admin_bar(false);


function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

	
function get_template_parts( $parts = array() ) {
	foreach( $parts as $part ) {
		get_template_part( $part );
	};
}	

    
?>