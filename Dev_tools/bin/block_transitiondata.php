<?php
/*
Block Name: Transition Data
Block Description: Transition Data
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'transdata';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');

/* --------------------------------------------------------------------------- 
echo '<section '.$anchor.' class="'.$blockclass .'">	
	*/?>
<div class="slider">
	  <div id="pinContainer" style="">
		<div id="parallax1" class="panel country-park parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2020/05/countrypark-bg.jpg);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>Country Park</h2>
			  <p>Set in 350 acres of beautiful parklands Wellington Country Park offers a safe, open air, fun filled venue for all the family.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="https://wellingtoncountrypark.co.uk/" rel="noopener">Visit us</a>
			  </div>
			</div>
		  </div>
		</div>
		<div id="parallax2" class="panel farm-shop parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2020/12/Credit-Milly-Fletcher-HR-17edited.png);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>Farm Shop</h2>
			  <p>Offering the highest quality fresh meat, cheese and produce, Wellington Farm Shop provides discerning rural residents a shopping experience synonymous with the fine food stores of London.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="https://wellingtonfarmshop.co.uk/" rel="noopener">Visit Us</a>
			  </div>
			</div>
		  </div>
		</div>
		<div id="parallax3" class="panel riding parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2020/12/001.jpg);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>Riding</h2>
			  <p>Set in 300 acres, Wellington Riding is one of the UK’s biggest and best-known equestrian centres offering tuition for adults and children as well as high-level competitions.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="http://wellington-riding.co.uk/" rel="noopener">Visit Us</a>
			  </div>
			</div>
		  </div>
		</div>
		<div id="parallax4" class="panel thebarns parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2021/01/fitness-padel-health-the-barns-at-wellington.jpg);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>The Barns</h2>
			  <p>A boutique fitness facility set within converted barns. The perfect blend of a premium environment, motivational coaches and an active fitness community.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="https://wellingtonbarns.co.uk/" rel="noopener">Visit us</a>
			  </div>
			</div>
		  </div>
		</div>
		<div id="parallax5" class="panel school parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2021/01/Wellington-Homepage-Business-Areas-4.jpg);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>Daneshill School</h2>
			  <p>An independent co-educational school set in the heart of the Wellington Estate with a roll of approximately 300 children aged between 2 to 13 years old.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="https://www.daneshillprepschool.com/" rel="noopener">Visit Us</a>
			  </div>
			</div>
		  </div>
		</div>
		<div id="parallax6" class="panel stratfield parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2020/05/stratfield-bg.jpg);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>Stratfield Saye House</h2>
			  <p>Home to the Dukes of Wellington since 1817, the house and gardens offer an intriguing and informative insight into the life of the Great Duke of Wellington.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="https://wellington.co.uk/stratfield-saye-house/">Visit Us</a>
			  </div>
			</div>
		  </div>
		</div>
		<div id="parallax7" class="panel estate parallaxParent">
		  <div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2020/05/estate-bg-1.jpg);"></div>
		  <div class="block">
			<div class="inner">
			  <h2>Estate</h2>
			  <p>The estate has properties to rent as well as a variety of sporting activities.</p>
			  <div class="foot">
				<a class="btn" target="_blank" href="https://wellington.co.uk/estate">Visit us</a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<section>
	  Lorem Ipsum is the single greatest threat. We are not - we are not keeping up with other websites. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen. Does everybody know that pig named Lorem Ipsum? An ‘extremely credible source’ has called my office and told me that Barack Obama’s placeholder text is a fraud.Lorem Ipsum is the single greatest threat. We are not - we are not keeping up with other websites. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen. Does everybody know that pig named Lorem Ipsum? An ‘extremely credible source’ has called my office and told me that Barack Obama’s placeholder text is a fraud.
	  Lorem Ipsum is the single greatest threat. We are not - we are not keeping up with other websites. Lorem Ipsum best not make any more threats to your website. It will be met with fire and fury like the world has never seen. Does everybody know that pig named Lorem Ipsum? An ‘extremely credible source’ has called my office and told me that Barack Obama’s placeholder text is a fraud.
	</section>
	
	

