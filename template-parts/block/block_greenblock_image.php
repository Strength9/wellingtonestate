<?php
/*
Block Name: Green Block Images
Block Description: Green Block Images
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'sustainabilitycontainer';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');



if (!get_field('show_three_images')) {
	$img1 = '';
	$img2 = '';
	$img3 = '';
	$fullimage = '<div class="fullimage" style="background-image:url('.get_field('image_1').'); background-position:'.get_field('image_position_1').';"></div>';
} else {
	$img1 = '<div class="topimage1" style="background-image:url('.get_field('image_1').'); background-position:'.get_field('image_position_1').';"></div>';
	$img2 = '<div class="topimage2" style="background-image:url('.get_field('image_2').'); background-position:'.get_field('image_position_2').';"></div>';
	$img3 = '<div class="topimage3" style="background-image:url('.get_field('image_3').'); background-position:'.get_field('image_position_3').';"></div>';
	$fullimage = '';
}
/* --------------------------------------------------------------------------- */

echo '<div '.$anchor.' class="'.$blockclass .' '.get_field('test_location').'">
		'.$img1.$img2.$img3.$fullimage.'
		<div class="text">
		 	'.get_field('block_text').'
		 </div>
	</div>		
	
</section>';

?>
