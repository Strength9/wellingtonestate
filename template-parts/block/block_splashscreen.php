<?php
/*
	Block Name: Splash Screen
	Block Description: Splash Screen
	Post Types: post, page, custom-type
	Block SVG: block_template.svg
	Block Category: wellington
*/

/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) { echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">'; return; } 
/* --------------------------------------------------------------------------- */

?>

<div class="wellington_splashscreen">
	<div class="splash-text">
		<h3>Welcome</h3>
		<p>Scroll to explore</p>
		<div class="splasharrow">
			<svg xmlns="http://www.w3.org/2000/svg" width="17.22" height="11.465" viewBox="0 0 17.22 11.465">
						<g id="Group_17" data-name="Group 17" transform="translate(-979.597 966.732) rotate(-90)">
						<g id="Group_7" data-name="Group 7" transform="translate(2.682 16.597)">
						<path id="Path_9" data-name="Path 9" d="M960,964.955v14.189" transform="translate(-1.682 -0.955)" fill="none" stroke="#004a33" stroke-linecap="round" stroke-width="2"></path>
						<path id="Path_10" data-name="Path 10" d="M952.039,986.344l-2.294-2.294-2.024-2.024" transform="translate(6.279 -7.538)" fill="none" stroke="#004a33" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
						<path id="Path_11" data-name="Path 11" d="M947.721,986.344l2.294-2.294,2.024-2.024" transform="translate(10.598 -7.538)" fill="none" stroke="#004a33" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
						</g>
						</g>
			</svg>
		</div>
	</div>
	<div class="introblock_position">
		<div class="introblock">	
			<div class="splashlogo">
				<img src="/wp-content/uploads/2023/06/main-logo.svg" title="Wellington Estate">
			</div>
		</div>
	</div>
<div class="headerlarge" <?php echo ' style=" background-image:url('. s9ACF_textfield('background_image', '', '', '', '', 'no').') !important;  background-position: '.s9ACF_textfield('background_position',  '', '', '', '', 'no').' !important;"';?>></div>
</div>
<div class="scroolto"></div>';