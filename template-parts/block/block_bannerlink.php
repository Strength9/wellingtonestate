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
//link_field

 $linkbut = '<a href="#" title="">';
 $linktext = '';
 $link = get_field('link_field');
 if( $link ): 
	 $link_url = $link['url'];
	 $link_title = $link['title'];
	 $link_target = $link['target'] ? $link['target'] : '_self';
	
	$linkbut = '<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'" title="'.$link_title.'">';
	$linktext = $link_title ;
 endif;
 
/* --------------------------------------------------------------------------- */
echo '<section '.$anchor.' class="'.$blockclass .'" style="background-image:url('.get_field('background_image').');" >
	'. $linkbut.'<div class="content">
			
					<div class="titleblock">
						'.s9ACF_textfield('main_heading', '', 'h3', '','', 'no').s9ACF_textfield('sub_heading', '', 'h6', '','', 'no').'
					</div>
					
					<span>'.$linktext.'</span>
			
	</div></a>
</section>'; ?>







