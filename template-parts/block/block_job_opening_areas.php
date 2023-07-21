<?php
/*
Block Name: Job Areas
Block Description: Job Areas
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
?>

	<div class="sitejobareas">
		<?php 
		
		$terms = get_terms( array(
			'taxonomy' => 'tax_joblocation', // Replace with the name of your taxonomy
			'hide_empty' => false,
			'orderby' => 'name',
			'order' => 'ASC',
		) );
		
		// Generate the select field options
		$options = '';
		foreach ( $terms as $term ) {
			
			
			
			$display_type = get_term_meta( $term->term_id,'tax_joblocation_category_image'); 
			
			if (empty($display_type)) {
			$bg = '';
			} else {
				$bg = ' style="background-image:url('.$display_type[0].');"';// The array contains elements
			};
			
			
			$newslugstring = str_replace(' ', '-', strtolower($term->name));
			
			 $options .= '<div class="site">
				 <div class="siteimage" '.$bg.'></div>
				 <div class="sitetext">
					 <h3>'.$term->name.'</h3>
				
					 <a href="/jobs/'.$newslugstring.'" title="View Vacancies">View Vacancies</a>
				 </div>
			 </div>';
		}
		
		// Output the select field
		echo $options;
		
		
		?>
	
</div>