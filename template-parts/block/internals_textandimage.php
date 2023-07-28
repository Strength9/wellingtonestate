<?php
/*
	Block Name: Text and Image
	Block Description:  Text and Image
	Post Types: post, page, custom-type
	Block SVG: block_template.svg
	Block Category: wellington
*/
$blockclass = 'textimage';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) { echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');
/* --------------------------------------------------------------------------- */



echo '<div '.$anchor.' class="'.$blockclass .' '.s9ACF_textfield('image_location', '', '', '','', 'no').'">
	<div class="textarea">'
		.s9ACF_textfield('text_block_area', '', '', '','', 'no').'
	</div>
	<div class="imagearea">'.
		s9ACF_imagefield('image_area', '',  $className = '').'
	</div>
</div>';
?>