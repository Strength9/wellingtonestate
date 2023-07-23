<?php
/*
Block Name: Latest Jobs for...
Block Description: Latest Jobs for...
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'cblock';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');

/* --------------------------------------------------------------------------- */
?>
<hr class="jobsdiv">
<div class="jobaction">
	<?php 
	if (! get_field('location')) {
		$finalid = 0;
	} else {
		$displaylocation =  get_field('location'); 
		$finalid = $displaylocation[0];
	};
	?>
	<?php $term = get_term($finalid, 'tax_joblocation') ;
	
	echo '<h2 class="latestjobs">'.$term->name.' Jobs</h2>';
	
	?>
	<a href="/jobs/" title="Back to Latest Jobs" class="jobsbutton">Back to Latest Jobs</a>
	<form>
		<h3>Latest Jobs</h3>
		<input type="text" id="searchfilter" name="searchfilter" placeholder="Search">
		<input type="submit" id="searchsubmit" name="searchsubmit" value="Filter">
		<?php echo return_taxonomyselect('category_', 'tax_jobcat',$slected = 0, $intooption = 'All Job Categorys').
		return_taxonomyselect('contract_', 'tax_jobtype',$slected = 0, $intooption = 'All Contract Types');?>
		<input type="hidden" id="location_tax_joblocation" name ="location_tax_joblocation" value="	<?php echo 	$finalid ;?>" />
	</form>
</div>	


<?php 


 $args = array(
		   'post_type' => 'job-openings',
		'posts_per_page' => -1,
		'meta_query' => array(
			'relation' => 'AND',
			array(
				'key' => 'wjs_s9plugin_positionfilled',
				'value' => 0,
				'compare' => '='
			),    
			array(
				'key' => 'wjs_s9plugin_tax_joblocation',
				'value' =>  	$finalid,
				'compare' => '='
			), 
		 ),
		 'order_by' => 'date',
		 'order' => 'desc',
   );
   
	 $projects = new WP_Query( $args);

?>

<?php
$data = '';

 if($projects->have_posts()):

	  while($projects->have_posts()) : $projects->the_post();
		  $jobid = get_the_ID();
		  
		$data .= '<div class="jobdetail">
			 <h4>'.get_the_title().'</h4>
			<ul>
				<li>'.return_termname($jobid, 'wjs_s9plugin_tax_jobcat' ).'</li>
				<li>'.return_termname($jobid, 'wjs_s9plugin_tax_jobtype' ).'</li>
				<li>'.return_termname($jobid, 'wjs_s9plugin_tax_joblocation' ).'</li>
				 <li><a href="'.get_the_permalink().'" title="">More Details</a></li>
			</ul>
		 </div>';
	  endwhile;
	?>

  <?php wp_reset_postdata(); ?>
<?php endif; ?>




<div class="jobslisting">
	<?php echo  $data;?>
	

</div>
<hr class="jobsdiv">
	
