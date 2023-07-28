<?php
/*
Block Name: Latest Jobs
Block Description: Latest Jobs
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
?>
<hr class="jobsdiv">
<div class="jobaction">
	<form>
		<h3>Latest Jobs</h3>
		<input type="text" id="searchfilter" name="searchfilter" placeholder="Search">
		<input type="submit" id="searchsubmit" name="searchsubmit" value="Filter">
		<?php echo return_taxonomyselect('category_', 'tax_jobcat',$slected = 0, $intooption = 'All Job Categorys').
		return_taxonomyselect('contract_', 'tax_jobtype',$slected = 0, $intooption = 'All Contract Types').return_taxonomyselect('location_', 'tax_joblocation',$slected = 0, $intooption = 'All Job Locations');?>
		
	</form>
</div>	


<?php 


 $args = array(
		   'post_type' => 'job-openings',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key' => 'wjs_s9plugin_positionfilled',
				'value' => 0,
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
	<script>
	
	jQuery(document).on("change", "#location_tax_joblocation, #contract_tax_jobtype, #category_tax_jobcat", function(e) {
	 e.preventDefault();
	   console.clear();
		
			var search = jQuery('#searchfilter').val();
		 var location = jQuery('#location_tax_joblocation').val();
		 var contract = jQuery('#contract_tax_jobtype').val();
		 var jobcat = jQuery('#category_tax_jobcat').val();
		 
			 jQuery.ajax({
			   type: 'POST', 
			   dataType: 'json',
			   url: frontend_ajax_object.ajaxurl,  
			   data: {
				   action: 'filter_projects', 
					 security:  frontend_ajax_object.ajax_nonce,
					 search :search,
					 location :  location,
					contract : contract,
					jobcat : jobcat
				  
			   },
			 success: function(response) {
				  jQuery('.jobslisting').html(response.data);
			 }
			   
		 });
	 
			
	 });
	
	jQuery(document).on("click", "#searchsubmit", function(e) {
		e.preventDefault();
	  console.clear();
	   
	   	var search = jQuery('#searchfilter').val();
		var location = jQuery('#location_tax_joblocation').val();
		var contract = jQuery('#contract_tax_jobtype').val();
		var jobcat = jQuery('#category_tax_jobcat').val();
		
			jQuery.ajax({
			  type: 'POST', 
			  dataType: 'json',
			  url: frontend_ajax_object.ajaxurl,  
			  data: {
				  action: 'filter_projects', 
					security:  frontend_ajax_object.ajax_nonce,
					search :search,
					location :  location,
				   contract : contract,
				   jobcat : jobcat
				 
			  },
			success: function(response) {
				 jQuery('.jobslisting').html(response.data);
			}
			  
		});
	
		   
	});
</script>	