<?php
/*
Block Name: Business Areas
Block Description: Business Areas
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington



area_title

jump_button
background_image
*/


// Check rows existexists.
if( have_rows('slider_content') ) {

$slides = ' <div class="splide__track"><ul class="splide__list">';
    // Loop through rows.
    while( have_rows('slider_content') ) : the_row();

        // Load sub field value.
        $areatitle = get_sub_field('area_title');
        $areadesc = get_sub_field('introduction_text');
        
        $linkbut = '';
        $link = get_sub_field('jump_button');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
           
           $linkbut = '<a class="button" href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'">'.esc_html( $link_title ).'</a>';
        endif;
       if( get_sub_field('background_image') ) {
            $imgbg = 'style="background-image:url('.get_sub_field('background_image').');"';
        } else {
           $imgbg = '';
        }
        
        // Do something...
        $slides .= '<li class="splide__slide" '.$imgbg .'>  
            <div class=" databox">
                   <h2>'.$areatitle.'</h2>
                   <p>'.$areadesc.'</p>
                   '. $linkbut .'
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

<section class="splide businessslider" aria-label="Splide Basic HTML Example">
  
       <?php echo $slides;?>
  
 </section>