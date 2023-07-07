<?php
/*
Block Name: Image Grid
Block Description: Image Grid
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'wellington_imagegrid';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');
$grid = '';
if( have_rows('image_grid') ) {
	while( have_rows('image_grid') ) : the_row();
		$grid .= '<div style="background-image:url('.get_sub_field('image_field').');"></div>';
	endwhile;
};

/* --------------------------------------------------------------------------- */
echo '<div '.$anchor.' class="imagegrid '.$blockclass .'" >'.$grid .'</div>'; ?>
