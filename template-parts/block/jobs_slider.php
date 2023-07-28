<?php
/*
Block Name: Job Slider
Block Description: Job Slider
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
    
    
    
    title_area
    job_decriptions
    job_links
*/
 $linkbut = '';
 $link = get_field('job_links');
 if( $link ): 
     $link_url = $link['url'];
     $link_title = $link['title'];
     $link_target = $link['target'] ? $link['target'] : '_self';
    
    $linkbut = '<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
 endif;
 
 // Check rows existexists.
 if( have_rows('jobs_slider') ) {
 
 $slides = ' <div class="splide__track"><ul class="splide__list">';
     // Loop through rows.
     while( have_rows('jobs_slider') ) : the_row();
 

        if( get_sub_field('side_image') ) {
             $imgbg = 'style="background-image:url('.get_sub_field('side_image').');"';
         } else {
            $imgbg = '';
         }
         
         $jobid = get_sub_field('job_details');
         
         
         // Do something...
         $slides .= '<li class="splide__slide">  
             <div class="imageside" '.$imgbg .'> </div>
             <div class="jobdatabox">
                    <hr>
                    <img src="/wp-content/uploads/2023/07/Duke.png">
                    <h4>Latest Jobs</h4>
                    <h2>'.get_the_title($jobid).'</h2>
                    <p>'.get_the_excerpt($jobid).'</p>
                    <a href="'.get_permalink($jobid).'" title="Find Out More">Find Out More</a>
               </div>
         </li>';
     // End loop.
     endwhile;
 $slides .= '</ul> </div>';
 // No value.
 } else {
    $slides = 'Add Sliider Details';
 };
 
 
  ?>
 <section class="jobsintro" >
        <h1><?php echo get_field('title_area');?></h1>
        <p><?php echo get_field('job_decriptions');?></p>
        <?php echo   $linkbut;?>
 </section>
 <section class="splide jobssslider" aria-label="Splide Basic HTML Example">
   
    
        <?php echo $slides;?>
   
  </section>