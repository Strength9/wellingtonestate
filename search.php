<?php get_header();
do_action('xray_after_body');


function StoreSearchterm($searchterm,$searchres) {
	$searchterm = sanitize_text_field(preg_replace( '/[^a-z]/i', " ", $searchterm) );
	
	global $wpdb;
		$my_table_name = $wpdb->prefix . 'posts';
		$sql = $wpdb->prepare( "
		
			INSERT INTO $my_table_name (
			
				`post_author`,
				`post_date`,
				`post_date_gmt`,
				`post_content`,
				`post_title`,
				`post_excerpt`,
				`post_status`,
				`comment_status`,
				`ping_status`,
				`post_password`,
				`post_name`,
				`to_ping`,
				`pinged`,
				`post_modified`,
				`post_modified_gmt`,
				`post_content_filtered`,
				`post_parent`,
				`guid`,
				`menu_order`,
				`post_type`,
				`post_mime_type`,
				`comment_count` 
			)
			VALUES
				(
			
					0,
					CURRENT_TIMESTAMP,
					CURRENT_TIMESTAMP,
				%s,
				%s,
				'',
				'publish',
				'closed',
				'closed',
				'',
				'Search-Store-Result',
				'',
				'',
				CURRENT_TIMESTAMP,
				CURRENT_TIMESTAMP,
				'',
				00,
				'--',
				0,
				'search_data',
				'',
			0 
			);", $searchres,$searchterm);
		
		$data =  $wpdb->get_results( $sql );
		
	
		
		return $searchterm.' '.$searchres;
		
	};
?>
<main>
	<div class="searchheader" style="background-image:url('/wp-content/uploads/2023/07/IMG_0154-Copy.jpg');">
	<h1>Search Results</h1></div>
			
			<section class="searchresults">
				
				<?php
							$SR = '';
							$s= get_search_query();
							$args = array( 's' =>$s );
								// The Query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) { 
										

		echo '
		<div class="searchtitle">
			<h1>Your Search Results</h1>
		</div>
		<div class="searchcontainer">';
									
		$SR = '';
		while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$linkurl = esc_url(get_permalink());
				$linktitle  = get_the_title();
				$SR .= $id.', ';
				$ptype =  $post->post_type;
				
				if ($ptype === 'events') {
					$desc = get_field('calendar_description' );
				} else {
					$desc = get_the_excerpt( );
				}					   		
				echo '<div><a href="'.$linkurl.'" title="'.$linktitle.'" . class="cta-card" > <h2>'.$linktitle.'</h2>'.$desc.$ptype.'
				<div class="click">
				<div class="clicklink">Read More</div>
				</div></a></div>';								 		
			}
			echo '</div>';			
									
	}else{
			?>
					
		<div class="searchtitle">
			<h1>Your Search Results</h1>
		</div>
		<div class="notfound">
					<p>Sorry, but nothing matched your search criteria. Please again with some different keywords.</p>
			
					<form action="/" method="get" id="searchform" class="innersearch"><input type="text" id="s" name="s" placeholder="Search..."><input type="submit" value="Search" /></form>
		</div>
															
<?php  $SR .= '0'; }  StoreSearchterm(get_search_query(),substr( $SR, 0, -2)); ?>
	
			</section>
</main>

<?php get_footer();  ?>