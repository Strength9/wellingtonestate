<?php
/*
Block Name:Image Strip with text
Block Description: Image Strip with text
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'imagestripbanner';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style=" background-image:url('. s9ACF_textfield('background_image', '', '', '', '', 'no').') ; background-position: '.s9ACF_textfield('background_position',  '', '', '', '', 'no').';">'.

s9ACF_textfield('title',  '', 'h1', '', '', 'no').
s9ACF_textfield('sub_title',  '', 'h2', '', '', 'no').'

</section>'; ?>
