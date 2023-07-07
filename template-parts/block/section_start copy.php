<?php
/*
Block Name: Start Section
Block Description: Start Section
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
include('______editor_set_id_and_classes.php');
/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" >';

?>