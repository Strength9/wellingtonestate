<?php
// USED FUNCTIONS

function s9ACF_animationclasses($fieldid = '', $postid = '', $repeater = 'no') {
	$animationclasses = $animatestyle = $animatedelay = $fieldstart= '';
	if ($repeater === 'no'){ $fieldstart = 'get_field'; } else { $fieldstart = 'get_sub_field'; };
	$doweanimate = ! empty( $fieldstart('animation_access_'.$fieldid, $postid) ) ? $fieldstart('animation_access_'.$fieldid, $postid) : 'no';
	
	if ($doweanimate === 'yes') {
		
		
		$animatestyle = ! empty( $fieldstart('animation_type_'.$fieldid, $postid) ) ? $fieldstart('animation_type_'.$fieldid, $postid) : '';
		$animatedelay = ! empty( $fieldstart('animation_delay_'.$fieldid, $postid) ) ? $fieldstart('animation_delay_'.$fieldid, $postid) : '';
		
		$animationclasses = ' standby '.$animatestyle.' '.$animatedelay;
	}
	return $animationclasses;
};




// Return Link
function s9ACF_linkfield($fieldname, $postid = '', $tag = '', $className = '', $repeater = 'no') {
	if ($repeater === 'no'){ $fieldstart = 'get_field'; } else { $fieldstart = 'get_sub_field'; };
	$sttag = $edtag = $class = '';
	if ($className != '') { $class =' class= "'.$className.'"'; }
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }

	$link = $fieldstart($fieldname, $postid);
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
	
		$linkoutput = $sttag.'<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'"  title="'.esc_html( $link_title ).'" class="'.$className.'" >'.$link_title.'</a>'.$edtag;
	else :
		$linkoutput = '';
	endif; 

	return $linkoutput;
};



function s9ACF_imagefield($fieldname, $postid = '',  $className = '') {
	$class = '';
	
	if ($className != '') { $class =' class= "'.$className.'"'; }
	
	$image = get_field($fieldname, $postid);
	if( $image ):
		$url = $image['url'];
		$alt = $image['alt'];
		$imageoutput = '<img src="'.esc_url($url).'"'.$class.' alt="'.esc_attr($alt).'" />';
	else :
		$imageoutput = '';
	endif;
	
	return $imageoutput;
};

// Return background image from URL
function s9ACF_image_URLortitle($imagedata = '', $class = '', $urlortitle = 'url') {
	
	
	if ($imagedata != '') {
		$image = $imagedata;
		if ($image) {
			if ($urlortitle === 'url') {
				$url = $image['url'];
				
				
				$imageoutput = $url;
			} else { 
			
			$imageoutput = $image['alt']; 
			
			};
		} else { $imageoutput = ''; };
	} else {
		$imageoutput = '';
	};
	
	
	return $imageoutput;
};


// Return Link
	function s9ACF_tbox($fieldname, $postid = '', $tag = '', $className = '', $repeater = 'no') {
	if ($repeater === 'no'){ $fieldstart = 'get_field'; } else { $fieldstart = 'get_sub_field'; };
	$sttag = $edtag = $class = '';
	if ($className != '') { $class =' class= "'.$className.'"'; }
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }

	$link = $fieldstart($fieldname, $postid);
	if( $link ): 
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_target = $link['target'] ? $link['target'] : '_self';
		
		$outbox = 'a'.$link['title'];
		
		
		$character = "</span>";
		$position = strpos(	$link_title, " ");
		
		$outbox = $link_title;
		if ($position !== false) {
			$outbox = '<span>'.substr_replace($link_title, $character, $position, 0);

		};
	
		$linkoutput = $sttag.'<a href="'.esc_url( $link_url ).'" target="'.esc_attr( $link_target ).'"  title="'.esc_html( $link_title ).'" class="'.$className.'" >'.$outbox.'</a>'.$edtag;
	else :
		$linkoutput = '';
	endif; 

	return $linkoutput;
};



// ------------------- Used

function s9ACF_tellink($fieldname, $postid = '', $tag = '', $titletext ='', $extratext = '',$className = '') {
	$class  = $sttag =  $edtag = $title ='';
	$link = get_field($fieldname, $postid);
	if ($className != '') { $class =' class= "'.$className.'"'; };
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }
	if ($extratext != '') { $extra = $extratext.' '; } else { $extra = ''; };
	if ($titletext != '') { $title =' title= "'.$titletext.'"'; };
	$display = $link;
	$link = str_replace(" ", "", str_replace("(0)", "",  	$link));
	
	return $sttag.'<a href="tel:'.$link.'"'.$title.'>'.$extra.	$display.'</a>'.$edtag;
}


function s9ACF_emaillink($fieldname, $postid = '', $tag = '',  $titletext ='', $extratext = '',$className = '') {
	
	$class  = $sttag =  $edtag = $title ='';
	$link = get_field($fieldname, $postid);
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }
	if ($extratext != '') { $extra = $extratext.' '; } else { $extra = ''; };
	if ($titletext != '') { $title =' title= "'.$titletext.'"'; };
	if ($className != '') { $class =' class= "'.$className.'"'; };
	
	return $sttag.'<a href="mailto:'.$link.'"'.$title.'>'.$extra.$link.'</a>'.$edtag;
}


function s9ACF_textfield($fieldname, $postid = '', $tag = '', $className = '',$emptyText = '', $repeater = 'no') {
	if ($repeater === 'no'){ $fieldstart = 'get_field'; } else { $fieldstart = 'get_sub_field'; };
	$sttag = $edtag = $class = '';
	
	if ($className != '') { $class =' class= "'.$className.'"'; }
	
	if ($tag != '') { $sttag = '<'.$tag.$class.'>'; $edtag = '</'.$tag.'>'; }
	
	$textdata = ! empty( $fieldstart($fieldname, $postid) ) ? $sttag.$fieldstart($fieldname, $postid).$edtag : $emptyText;
	
	return $textdata;
};

// Return background image from URL
function s9ACF_style_backgroundimage_URL($imagedata = '', $class = '', $imageorbg = 'img') {
	
	
	if ($imagedata != '') {
		$image = $imagedata;
		if ($image) {
			if ($imageorbg === 'img') {
				$url = $image['url'];
				$alt = $image['alt'];
				
				if ($class != '') {
					$classdata = ' class="'.$class.'" ';
				} else {
					$classdata = '';
				}
				
				$imageoutput = '<img src="'.esc_url($url).'"'.$classdata.' alt="'.esc_attr($alt).'" />';
			} else { $url = $image['url']; $imageoutput = ' style="background-image: url('.$image['url'].');"';  };
		} else { $imageoutput = ''; };
	} else {
		$imageoutput = '';
	};
	
	
	return $imageoutput;
};

// Return Social Media
function s9ACF_socialmedia($fieldname, $postid = '', $tag = '', $className = '',$emptyText = '', $socialtitle='', $repeater = 'no') {
	if ($repeater === 'no'){ $fieldstart = 'get_field'; } else { $fieldstart = 'get_sub_field'; };
	$sttag = $edtag = $class = $title ='';
	
	if ($className != '') { $class =' class= "'.$className.'"'; }
	if ($socialtitle != '') {$title= ' title="'.$socialtitle.'"';}
	if ($tag != '') { $sttag = '<'.$tag.'>'; $edtag = '</'.$tag.'>'; }
	
	$textdata = ! empty( $fieldstart($fieldname, $postid) ) ? $sttag.'<a href="'.$fieldstart($fieldname, $postid).'"'.$class.$title.'><span></span></a>'.$edtag : $emptyText;
	
	return $textdata;
};
?>
