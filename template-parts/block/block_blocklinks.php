<?php
/*
Block Name: Block Links
Block Description: Block Links
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
?>

	<div class="sitejobareas">
		<?php 
		


// Check rows existexists.
if( have_rows('block_areas') ):

	$options = '';
	while( have_rows('block_areas') ) : the_row();
		
	
		//	get_sub_field('block_image')
		//	get_sub_field('block_link')
			$link = get_sub_field('block_link');
			$outputlink = '';
			if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				
				$outputlink = '<a href="'.$link_url.'" title="'.$link_title.'">Discover More</a>';
			else :
				$link_title = '';
				$outputlink = '<a href="#">';	
			endif; 
			
			
			if (empty(get_sub_field('block_image'))) {
			$bg = '';
			} else {
				$bg = ' style="background-image:url('.get_sub_field('block_image').');"';// The array contains elements
			};
			
			
			
			
			 $options .= '<div class="site">
				 <div class="siteimage" '.$bg.'></div>
				 <div class="sitetext">
					 <h3>'.$link_title.'</h3>
				
					 '.$outputlink.'
				 </div>
			 </div>';
	
		endwhile;
		endif;
		
		// Output the select field
		echo $options;
		
		
		?>
	
</div>