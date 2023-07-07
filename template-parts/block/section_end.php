<?php
/*
Block Name:Section End
Block Description: End Section
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'selfbuild';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */


echo '</section> <!--End Section-->';

?>