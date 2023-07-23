<?php
/*
Block Name: Thin Header
Block Description: Thin Header
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'cblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');


/* --------------------------------------------------------------------------- */
echo '	<div class="searchheader" style="background-image:url('.get_field('background_image').');">
<h1>'.get_field('header_title').'</h1></div>'; ?>
