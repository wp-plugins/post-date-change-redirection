<?php
/*
Plugin Name: Post Date Change Redirection
Plugin URI: http://wordpress.org/plugins/post-date-change-redirection/
Description: Plugin handles the changes in the slug due to post date change by providing 301 redirection
Version: 1.0
Author: Gagan Deep Singh
Author URI: http://gagan.pro
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Checks if the current page is returning 404 status, tries to find the actual 
 * post page instead of malformed permalink
 */
function gs_pdcr_check_redirection(){
	if(is_404()){
		$name = get_query_var('name');
		
		gs_pdcr_redirect_to_object_by_title($name);
		global $wp;
		if(!isset($wp->request)){
			return;
		}
		$pagename_array = explode('/',$wp->request);
		foreach($pagename_array as $name){
			if(preg_match('/^-?[0-9]+$/', (string)$name)){
				continue;
			}
			else{
				gs_pdcr_redirect_to_object_by_title($name);
			}
		}
	}
}
add_action('wp','gs_pdcr_check_redirection');

/**
 * Redirects to the post by its slug
 */
function gs_pdcr_redirect_to_object_by_title($name){
	if(strlen($name)==0){
		return;
	}
	$posts = get_posts(array('name'=> $name));
	if(count($posts)>0){
		wp_redirect(get_permalink($posts[0]->ID));
		exit;
	}
}
