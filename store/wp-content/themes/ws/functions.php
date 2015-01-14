<?php

get_template_parts( array( 'theme-options') );


function register_my_menus(){
	register_nav_menus(
	array(
	'main-menu' => _( 'Main Menu' ),		
	)
	);
}
add_action( 'init', 'register_my_menus');


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
	
	/*
register_post_type( 'teaching',
		array(
			'labels' => array(
				'name' => 'Teaching',
				'singular_name' =>'Course',
				'add_new' => 'Add New',
			    'add_new_item' => 'Add New Course',
			    'edit_item' => 'Edit Course',
			    'new_item' => 'New Crouse',
			    'all_items' => 'All Courses',
			    'view_item' => 'View Course',
			    'search_items' => 'Search Courses',
			    'not_found' =>  'No Courses found',
			    'not_found_in_trash' => 'No Courses found in Trash', 				
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'teaching'),
			'supports' => array( 'title', 'editor', 'thumbnail' )			
		)
	);	

register_post_type( 'info',
		array(
			'labels' => array(
				'name' => 'Info',
				'singular_name' =>'Info',
				'add_new' => 'Add New',
			    'add_new_item' => 'Add New Info',
			    'edit_item' => 'Edit Info',
			    'new_item' => 'New Info',
			    'all_items' => 'All Info',
			    'view_item' => 'View Info',
			    'search_items' => 'Search Infos',
			    'not_found' =>  'No Infos found',
			    'not_found_in_trash' => 'No Infos found in Trash', 				
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'info'),
			'supports' => array( 'title', 'thumbnail')			
		)
	);
	
register_post_type( 'news',
		array(
			'labels' => array(
				'name' => 'News',
				'singular_name' =>'News',
				'add_new' => 'Add New',
			    'add_new_item' => 'Add News',
			    'edit_item' => 'Edit News',
			    'new_item' => 'New News',
			    'all_items' => 'All News',
			    'view_item' => 'View News',
			    'search_items' => 'Search News',
			    'not_found' =>  'No News found',
			    'not_found_in_trash' => 'No News found in Trash', 				
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'news'),
			'supports' => array( 'title', 'thumbnail','date' )			
		)
	);	
*/
	
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

function teaching_taxonomy() {  
   register_taxonomy(  
    'teaching_categories',  
    'teaching',  
    array(  
        'hierarchical' => true,  
        'label' => 'Teaching Categories',  
        'query_var' => true,  
        'rewrite' => array('slug' => 'teaching_categories')  
    )  
);  
}
add_action( 'init', 'teaching_taxonomy' );  

	
function theme_styles()  
{ 
 //wp_register_style( 'style-less', get_template_directory_uri() . '/_/css/style.less');  
 //wp_register_style( 'style-css', get_template_directory_uri() . '/_/css/style.css');  
  
  //wp_enqueue_style( 'style-less' );
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
    set_post_thumbnail_size( 200, 200, true ); 
}
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'one', 300, 300, true ); 
	add_image_size( 'twoh', 620, 300, true ); 
	add_image_size( 'twov', 620, 300, true ); 
	add_image_size( 'two', 620, 620, true ); 
	add_image_size( 'gallery', 1280, 720, true );  
	add_image_size( 'scroll', 1280, 1280, false );  	
	add_image_size( 'tiny', 44, 44, true );  
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

	
function get_template_parts( $parts = array() ) {
	foreach( $parts as $part ) {
		get_template_part( $part );
	};
}	


add_action( 'register' , 'register_replacement' );
function register_replacement( $link ){
	if ( ! is_user_logged_in() ) {
		if ( get_option('users_can_register') )
			$link = $before . '<a href="' . site_url('wp-login.php?action=register', 'login') . '">' . __('Register') . '</a>' . $after;
		else
			$link = '';
	} else {
		$link = $before . '<a id="admin" href="' . admin_url() . '">' . __('<span class="icon">(</span>') . '</a>' . $after;
	}
	return $link;
}


function edit_admin_menus() {  
    global $menu;  
      
    $menu[5][0] = 'Blog'; // Change Posts to Blog  
}  
add_action( 'admin_menu', 'edit_admin_menus' );  


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
        'dev','greg'
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


add_filter('default_hidden_meta_boxes', 'be_hidden_meta_boxes', 10, 2);
function be_hidden_meta_boxes($hidden, $screen) {
	if ( 'post' == $screen->base || 'page' == $screen->base )
		$hidden = array('slugdiv', 'trackbacksdiv', 'commentstatusdiv', 'commentsdiv', 'postcustom', 'revisionsdiv');
	return $hidden;
}


define('MAGPIE_FETCH_TIME_OUT', 180);

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

/*

function loadMore() {
    $ajax_output = '';
    
	get_template_part('work-ajax');

    die($ajax_output);
}

add_action('wp_ajax_loadMore', 'loadMore');
add_action('wp_ajax_nopriv_loadMore', 'loadMore'); // not really needed

function loadContact() {
    $ajax_output_contact = '';
    
	get_template_part('contact-ajax');

    die($ajax_output_contact);
}

add_action('wp_ajax_loadContact', 'loadContact');
add_action('wp_ajax_nopriv_loadContact', 'loadContact'); // not really needed

*/

    
?>