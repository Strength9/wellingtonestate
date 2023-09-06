<?php
/*
Block Name: Job Slider
Block Description: Job Slider
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
    
    
*/

if (!get_field('number_of_jobs')) {
    $numberofjobs = 5;
} else {
    $numberofjobs = get_field('number_of_jobs');
};
$args = array(
		   'post_type' => 'job-openings',
		'posts_per_page' =>  $numberofjobs,
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

$data = '';

 if($projects->have_posts()):

	  while($projects->have_posts()) : $projects->the_post();
		  $jobid = get_the_ID();

         
		$data .= '<li class="splide__slide">  
        <div class="imageside" style="background-image:url('.get_field('job_slider_image',  $jobid).');"> </div>
        <div class="jobdatabox">
               <hr>
              
               <img src="/wp-content/uploads/2023/07/Duke.png">
               <h4>Latest Jobs</h4>
               <h2>'.get_the_title().'</h2>
               <p>'.get_the_excerpt().'</p>
               <a href="'.get_permalink().'" title="Find Out More">Find Out More</a>
          </div>
    </li>';
	  endwhile;
wp_reset_postdata();
endif;

 $linkbut = '';
 $link = get_field('job_links');
 if( $link ): 
     $link_url = $link['url'];
     $link_title = $link['title'];
     $link_target = $link['target'] ? $link['target'] : '_self';
    
    $linkbut = '<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
 endif;
 
 
  ?>
 <section class="jobsintro" >
        <h1><?php echo get_field('title_area');?></h1>
        <p><?php echo get_field('job_decriptions');?></p>
        <?php echo $linkbut;?>
 </section>
 <section class="splide jobssslider">

        <?php echo '<div class="splide__track"><ul class="splide__list">'.$data.'</ul> </div>';?>
   
  </section>