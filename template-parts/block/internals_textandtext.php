<?php
/*
	Block Name: Text and Text
	Block Description:  Text and Text
	Post Types: post, page, custom-type
	Block SVG: block_template.svg
	Block Category: wellington
*/
$blockclass = 'textintroblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) { echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');
/* --------------------------------------------------------------------------- */
echo '<div '.$anchor.' class="'.$blockclass .'"><div class="titlearea"><div class="titleblock">'.s9ACF_textfield('main_heading', '', 'h3', '','', 'no').s9ACF_textfield('sub_heading', '', 'h6', '','', 'no').' </div></div><div class="detailarea">'.s9ACF_textfield('text_area', '', '', '','', 'no').'</div></div>';
?>