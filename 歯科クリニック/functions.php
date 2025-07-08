<?php
function post_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blog'; 
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_archive', 10, 2 );

function blog_page($query){
	if(is_admin() || ! $query->is_main_query()){
		return;
	}if( $query->is_archive()){
		$query->set('posts_per_page',5);
	}
}add_action('pre_get_posts','blog_page');

function custom_script(){
	wp_enqueue_script(
	'custom-script',
		get_template_directory_uri() . '/index.js',
		array(),
		null,
		true
	);
}add_action('wp_enqueue_scripts','custom_script');

function slick_cdn() {
    // Slick CSS
    wp_enqueue_style('slickcss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slickthemecss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    // Slick JS
    wp_enqueue_script('slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'slick_cdn');