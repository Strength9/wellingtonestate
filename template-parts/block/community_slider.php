<?php
/*
Block Name: Community Slider
Block Description: Community Slider
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
    
    

*/

$titleblock = s9ACF_textfield('title_area', '', '', '', '', 'no');
$slider_sub_title = s9ACF_textfield('slider_sub_title', '', '', '', '', 'no');

 // Check rows existexists.
 if( have_rows('community_slider') ) {
 
 $slides = ' <div class="splide__track"><ul class="splide__list">';
     // Loop through rows.
     while( have_rows('community_slider') ) : the_row();
 

        if( get_sub_field('side_image') ) {
             $imgbg = 'style="background-image:url('.get_sub_field('side_image').');"';
         } else {
            $imgbg = '';
         }
         
         
         $linkbut = '';
          $link = get_sub_field('slider_link');
          if( $link ): 
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
             
             $linkbut = '<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
          endif;
          
     
 $slidertitle = get_sub_field('slider_title');
  $slidertext = get_sub_field('slider_text');;
 $sliderlink = get_sub_field(' slider_link');
         
         // Do something...
         $slides .= '<li class="splide__slide">  
             <div class="imageside" '.$imgbg .'> </div>
             <div class="slidedatabox">
                    <hr>
                    <div class="info">
                    
                    <h4>'.$slider_sub_title.'</h4>
                    <h2>'.$slidertitle.'</h2>
                    <p>'.$slidertext.'</p>
                    '.$linkbut.'
                    </div>
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
 <section class="comssliderintro" >
        <h1><?php echo get_field('title_area');?></h1>
 </section>
 <section class="splide comslider" >
   
    
        <?php echo $slides;?>
   
  </section>