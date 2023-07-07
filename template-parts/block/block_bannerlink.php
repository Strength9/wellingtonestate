<?php
/*
Block Name:Banner Link
Block Description: Banner Link
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'wellington_bannerlink';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');

/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style="background-image:url('.get_field('background_image').');" >
	<a href="#" title=""><div class="content">
			
					<div class="titleblock">
						'.s9ACF_textfield('main_heading', '', 'h3', '','', 'no').s9ACF_textfield('sub_heading', '', 'h6', '','', 'no').'
					</div>
					<span>Latest Events</span>
			
	</div></a>
</section>'; ?>







