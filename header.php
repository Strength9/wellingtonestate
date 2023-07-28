<?php

if( get_field('fix_page_header') ) {
	$navigationclass= 'fixeddisplay';
} else {
	$navigationclass= 'dynamicdisplay';
	
}



?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php wp_title('');  ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


<link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/wellingtonestate/assets/img/favi/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/wellingtonestate/assets/img/favi/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/wellingtonestate/assets/img/favi/favicon-16x16.png">
<link rel="manifest" href="/wp-content/themes/wellingtonestate/assets/img/favi/site.webmanifest">
<link rel="shortcut icon" href="/wp-content/themes/wellingtonestate/assets/img/favi/favicon.ico">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/wp-content/themes/wellingtonestate/assets/img/favi/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>



<?php wp_head(); ?>
</head>

<body <?php body_class( $navigationclass );?>>
<header class="wellingtonMenu ">
	<div class="navigationbar">
		<div class="logo">
			<a href="https://wellington.co.uk"><img src="/wp-content/uploads/2023/07/navbar-logo.svg" alt="Wellington"></a>
		</div>
		<nav class="navleft nav_menu_strip">
			<?php wp_nav_menu( array(  'menu' => 'Menu Left','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '<ul id="nav_menu_left" class="nav_menu_strip">%3$s</ul>' ) );?>
		</nav>
		<nav class="navright nav_menu_strip">
			<?php wp_nav_menu( array(  'menu' => 'Menu Right','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '<ul  id="nav_menu_right" class="nav_menu_strip">%3$s</ul>' ) );?>	
		</nav>
	</div>
	<div class="logobar">
		<div class="basket"></div>
		<div class="search" id="searchsite"><a href="#"></a></div>
		<div class="mobile_menu_button">
			<div class="mobile_menu_cont" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
		</div>
		<div id="EstatesAction" class="estate-menu-icon">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36.25px" height="52.156px" viewBox="0 0 36.25 52.156" enable-background="new 0 0 36.25 52.156" xml:space="preserve"><g><g><path fill="#FFFFFF" d="M8.909,29.802c0,0,3.134-0.37,5.629,1.291c2.495,1.663,3.178,2.812,3.554,3.524 c0.376,0.712,0.436,1.05,0.752,1.05c0.316,0,0.613-0.317,0.653-1.406c0.04-1.088,0.159-2.258,1.444-2.178 c1.287,0.079,2.477,0.416,3.308-0.692c0.831-1.107,0.167-2.502,0.167-2.502s0.516-0.527,0.535-0.695s-0.029-0.476-0.029-0.476 s0.326-0.188,0.377-0.377c0.049-0.188-0.281-0.282-0.066-1.221c0,0,0.681-0.035,0.947-0.035c0.268,0,0.504-0.189,0.514-0.477 c0.011-0.288,0-2.068-0.196-2.949c-0.198-0.881-0.406-1.09-0.653-1.208c-0.248-0.118-0.525-0.455-0.218-1.019 s0.44-0.563,0.44-0.563s1.578-0.16,5.963,1.503c4.386,1.663,5.021,0.852,3.427-0.96c-1.595-1.812-3.613-3.944-6.494-9.008 C26.08,6.34,23.407,0,17.824,0S10.34,4.335,9.093,7.692c-1.248,3.354-2.94,8.314-4.692,10.839 c-1.752,2.524-2.346,3.415-3.534,4.425c-1.188,1.01-1.336,2.494,0.713,1.93c2.049-0.562,5.646-3.104,8.509-3.141 c0,0,0.715,1.939,1.112,2.639c0,0-0.669-0.408-0.814-0.348c-0.023,0.021-0.195,0.286-0.403,1.92 C9.776,27.589,9.665,28.025,8.909,29.802z"></path><g><path fill="#FFFFFF" d="M14.744,43.273c0,0-1.67-1.127-2.309-1.944c-0.638-0.815-0.534-2.718-1.099-2.851 C10.772,38.344,10.4,38.85,10.4,38.85c-0.728-0.342-0.237-2.599-1.188-2.703c-0.951-0.104-1.116,0.82-1.116,0.82 c-0.923-0.429-0.354-1.695-1.379-1.695c-1.024,0-0.861,1.205-0.861,1.205c-0.624-0.266-0.431-1.547-1.426-1.369 c-0.995,0.179-0.395,1.578-0.395,1.578c-0.438,0.064-0.392-0.612-0.986-0.895c-0.594-0.283-1.232,0.488-0.936,1.188 c0.297,0.697,0.98,0.58,0.98,0.58s-0.341,0.207-0.416,0.578c-0.075,0.371,0.327,0.937,0.965,0.92 c0.638-0.015,0.906,0.135,0.906,0.135s-0.431,0.342-0.401,0.757s0.401,0.729,1.128,0.625c0.728-0.104,1.139,0.034,1.139,0.034 s-0.337,0.439-0.011,0.826c0.327,0.387,0.936,0.162,1.767-0.029c0.832-0.192,0.995,0.06,0.995,0.06 c-0.401-0.06-1.039,0.595-0.059,1.054c0.98,0.461,1.469-0.252,2.13-0.088c0.606,0.149,1.322,0.52,1.322,0.52 C10.464,43.127,8.6,44.203,8.6,44.203c-0.186-0.164-0.356-0.297-0.29-0.779c0.067-0.482,0.104-0.893-0.06-1.033 c-0.163-0.141-0.467,0.238-0.467,0.238s-3.156-2.115-4.039-0.579c-0.883,1.536,2.19,3.118,2.19,3.118s-0.156,0.207-0.171,0.371 c-0.015,0.164,0.304,0.26,0.757,0.193s0.631,0.052,0.631,0.052c-0.812,1.016-0.812,1.937-0.389,2.032 c0.423,0.097,0.706-0.733,1.077-1.188c3.074-3.193,6.342-2.638,6.342-2.638c1.189,0.481,1.68,1.19,1.68,1.19 c-0.925,0.305-1.622-0.047-2.305-0.416c-0.683-0.371-1.967-0.559-2.057,0.28s1.091,1.039,1.091,1.039s-0.698,0.172-1.47,0.022 c-0.772-0.148-2.124-0.594-2.309,0.424c-0.186,1.017,1.359,1.193,1.359,1.193s-0.075,0.105-0.706,0.172 c-0.631,0.067-1.997-0.513-2.257,0.394c-0.259,0.905,0.883,1.161,0.883,1.161c-0.662,0.445-1.009,1.236-0.756,1.697 c0.252,0.461,0.869,0.193,1.092-0.008c0.223-0.201,0.698-0.453,0.698-0.453s-0.431,0.974,0.104,1.248 c0.534,0.273,1.247,0.015,1.604-0.772s0.969-1.224,0.969-1.224s-0.42,1.031,0.14,1.261c0.561,0.229,1.318-0.155,1.466-0.779 c0.149-0.623,0.513-0.787,0.513-0.787s0.007,0.884,1.002,0.767c0.995-0.119,1.329-1.211,1.41-2.605 c0.082-1.396,0.719-1.633,0.719-1.633c0.154,0.542-0.013,0.859-0.207,1.469c-0.192,0.609-0.222,1.537,1.01,1.254 c1.232-0.281,1.017-1.953,1.017-1.953s0.281,0.262,0.424,0.996c0.141,0.734-0.179,2.703,0.98,2.65 c1.156-0.053,1.047-1.166,1.047-1.166s0.252,0.318,0.334,0.869c0.08,0.549,0.229,1.693,1.209,1.633 c0.98-0.059,0.84-1.389,0.84-1.389s0.186,0.061,0.26,0.432s0.602,1.455,1.789,1.143c0.82-0.215,0.527-1.084,0.527-1.084 s0.734,0.699,1.439,0.299c0.705-0.401,0.334-1.39-0.111-1.53c-0.445-0.142-0.721-0.415-0.721-0.415s0.766,0.163,0.893-0.559 c0.125-0.72-0.514-1.112-1.293-1.127c-0.779-0.016-1.514-0.201-1.514-0.201s1.194-0.326,1.055-1.068 c-0.143-0.742-1.233-0.729-2.08-0.446c-0.846,0.283-1.402,0.119-1.402,0.119s0.846-0.452,0.639-1.017 c-0.209-0.564-1.024-0.254-1.887,0.154c-0.861,0.409-1.841,0.307-1.841,0.307c0.757-0.483,2.851-1.248,4.692-1.188 c1.841,0.06,3.272,2.791,3.52,3.363c0.244,0.571,0.348,0.668,0.936,0.535c0.586-0.136-0.635-2.148-0.635-2.148 c1.236,0.556,2.209,0.195,2.312,0.07c0.102-0.126-0.072-0.461-0.072-0.461s2.397-2.312,1.41-3.238s-3.363,1.084-3.363,1.084 s-0.325-0.252-0.438-0.17c-0.416,0.354-0.498,1.843-0.498,1.843c-0.682-1.164-2.02-1.56-2.02-1.56s-0.898-0.082-0.297-0.461 c0.602-0.378,1.285-0.623,1.945-0.615s1.863,0.2,2.072-0.387c0.207-0.587-0.172-0.831-0.172-0.831 c0.237-0.021,0.526,0.208,1.092,0.355c0.564,0.148,1.27-0.186,1.336-0.802c0.065-0.616-0.631-0.831-0.631-0.831 s0.467,0.014,0.994,0.051c0.526,0.037,1.366-0.326,1.284-1.067c-0.082-0.742-1.03-0.654-1.03-0.654 c0.198-0.252,1.076-0.297,1.514-1.194s-0.193-1.226-0.549-1.099c-0.356,0.126-0.646,0.188-0.646,0.188 c0.159-0.111,0.666-0.945,0.14-1.354c-0.951-0.737-2.168,1.144-2.168,1.144s0.356-0.949-0.408-1.158 c-0.764-0.207-1.299,0.572-1.521,1.463c-0.222,0.891-0.549,1.337-0.549,1.337s0.007-0.513-0.482-0.653 c-0.438-0.127-0.979,0.363-1.166,1.537c-0.186,1.173-0.4,1.471-0.4,1.471s0.044-0.824-0.624-0.758 c-1.095,0.109-0.335,1.533-0.431,2.256c-0.074,0.564-0.155,0.728-0.155,0.728c-0.513,0.235-0.824,0.521-0.824,0.521 s-0.624-0.24-0.899-0.382c-1.013-0.715-0.838-2.307-1.182-3.106c-0.207-0.535-0.703-0.479-0.703-0.479 c-0.795,0.092-0.787,1.055-0.787,1.055s-0.371-0.273-0.424-1.084c-0.053-0.81-0.26-2.057-1.232-1.854 c-0.981,0.2-0.69,1.772-0.69,1.772c-0.787-0.326-0.616-2.479-1.96-2.123c-1.069,0.283-0.319,1.967-0.319,1.967 s-0.342-0.133-0.572-0.467s-0.869-0.481-1.292-0.053c-0.423,0.432-0.082,1.248,0.267,1.322s0.631,0.363,0.631,0.363 s-1.106,0.037-1.069,0.884c0.038,0.847,0.898,0.862,1.344,0.757c0.446-0.104,0.884-0.133,0.884-0.133s-0.958,0.615-0.698,1.336 c0.26,0.721,1.514,0.475,2.042,0.178c0.528-0.297,1.002-0.334,1.002-0.334c-0.223,0.928,0.587,1.27,1.448,1.01 c0.86-0.26,2.078,0.254,2.078,0.254s-0.104,0.179-1.056,0.371c-0.949,0.192-2.062,0.668-2.062,0.668 c-0.505-1.248-0.761-1.764-0.974-1.824c-0.283-0.08-1.093,0.168-1.252,0.442c-0.093,0.161,0.203,0.538,0.203,0.538 s-0.523-0.023-1.176-0.455"></path></g> </g> </g> </svg>
		</div>
		<nav class="business-menu">
			<div class="close-button active" id="close-toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
			<ul id="menu-secondary-menu" class="menu">
				<p class="visitestate_title">Visit the Wellington Estate<br>scroll to explore</p>
				
				<?php
				if( have_rows('businesses','options') ) {
				
					// Loop through rows.
					while( have_rows('businesses','options') ) : the_row();
				
						$image_value = get_sub_field('business_image');
						$imageurl = s9ACF_image_URLortitle($image_value, $class = '', $urlortitle = 'url');
						$link = get_sub_field('business_url');
						echo '
						<li>
							<a target="" rel="noopener noreferrer" href="'.$link['url'].'" title="'.$link['title'].'">
								<img class="'.get_sub_field('business_extra_css_class').'" src="'.$imageurl.'" alt="'.$link['title'].'">
							</a>
						</li>';
					endwhile;
				};
				?>
		</ul>		</nav>
		<nav class="mobile_menu_overlay">
			<div class="close-toggle-mobile" id="close-toggle-mobile"><span class="top"></span> <span class="middle"></span><span class="bottom"></span> </div>
			
			<?php wp_nav_menu( array(  'menu' => 'Mobile Menu','container'  => '', 'container_class' => '', 'container_id'    => '',   'depth' => 3 , 'items_wrap' => '<ul  id="mobile_menu_full"" class="full_mobile">%3$s</ul>' ) );?>	
			
			</nav>
	</div>

</header>