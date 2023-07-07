<?php
/*
Block Name:Image Banner
Block Description: Image Banner
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'imagebanner';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style=" background-image:url('. s9ACF_textfield('background_image', '', '', '', '', 'no').') ; background-position: '.s9ACF_textfield('background_position',  '', '', '', '', 'no').';"></section>'; ?>
