<?php
/*
	Block Name: Text Block
	Block Description:  Text Block
	Post Types: post, page, custom-type
	Block SVG: block_template.svg
	Block Category: wellington
*/
$blockclass = 'textblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) { echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');


/* --------------------------------------------------------------------------- */
echo '<div '.$anchor.' class="'.$blockclass .'">'.s9ACF_textfield('text_block_area', '', '', '','', 'no').'</div>';
?>