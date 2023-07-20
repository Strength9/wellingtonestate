<?php
/*
Block Name: Home Page Parallax
Block Description: Home Page Parallax
Post Types: post, page, custom-type
Block SVG: block_template.svg
Block Category: wellington
*/
$blockclass = 'wellington_bannerlink';
/* --------------------------------------------------------------------------- */
if( !empty( $block['data']['_is_preview'] ) ) {
		echo' <img src="'.get_stylesheet_directory_uri().'/template-parts/previews/block_template.png" alt="Title Field">';
		return;
} 
/* --------------------------------------------------------------------------- */
include('______editor_set_id_and_classes.php');

/* --------------------------------------------------------------------------- */
?>


<!-- -- -->
<div class="scrollerboxcontent">
	<div>
		<div>
			<div id="pinContainer" style="">
				<section id="parallax1" class="panel country-park parallaxParent">
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
				</section>
				<section id="parallax2" class="panel farm-shop parallaxParent">
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
				</section>
				<section id="parallax3" class="panel riding parallaxParent">
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
				</section>
				<section id="parallax4" class="panel thebarns parallaxParent">
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
				</section>
				<section id="parallax5" class="panel school parallaxParent">
					<div class="bg" style="background-image: url(https://wellington.co.uk/wp-content/uploads/2023/07/DPS-Filler-1-scaled.webp);"></div>
					<div class="block">
						<div class="inner">
							<h2>Wellesley Prep School</h2>
							<p>An independent co-educational school set in the heart of the Wellington Estate with a roll of approximately 300 children aged between 2 to 13 years old.</p>
							<div class="foot">
								<a class="btn" target="_blank" href="https://wellesleyprepschool.co.uk/" rel="noopener">Visit Us</a>
							</div>
						</div>
					</div>
				</section>
				<section id="parallax6" class="panel stratfield parallaxParent">
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
				</section>
				<section id="parallax7" class="panel estate parallaxParent">
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
				</section>
			</div>
			<div class="mobileview">
  		<section class="panelmob country-park" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2021/01/Country-Park.png') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2021/01/Country-Park.png -->
				<div class="inner">
					<h2>Country Park</h2>
					<p>Set in 350 acres of beautiful parklands Wellington Country Park offers a safe, open air, fun filled venue for all the family.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="https://wellingtoncountrypark.co.uk/" rel="noopener">Visit us</a>
					</div>
				</div>
			</div>
		</section>
		<section class="panelmob farm-shop" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2021/01/Farm-Shop.png') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2021/01/Farm-Shop.png -->
				<div class="inner">
					<h2>Farm Shop</h2>
					<p>Offering the highest quality fresh meat, cheese and produce, Wellington Farm Shop provides discerning rural residents a shopping experience synonymous with the fine food stores of London.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="https://wellingtonfarmshop.co.uk/" rel="noopener">Visit Us</a>
					</div>
				</div>
			</div>
		</section>
		<section class="panelmob riding" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2021/01/Riding.png') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2021/01/Riding.png -->
				<div class="inner">
					<h2>Riding</h2>
					<p>Set in 300 acres, Wellington Riding is one of the UK’s biggest and best-known equestrian centres offering tuition for adults and children as well as high-level competitions.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="http://wellington-riding.co.uk/" rel="noopener">Visit Us</a>
					</div>
				</div>
			</div>
		</section>
		<section class="panelmob thebarns" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2021/01/The-Barns.jpg') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2021/01/The-Barns.jpg -->
				<div class="inner">
					<h2>The Barns</h2>
					<p>A boutique fitness facility set within converted barns. The perfect blend of a premium environment, motivational coaches and an active fitness community.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="https://wellingtonbarns.co.uk/" rel="noopener">Visit us</a>
					</div>
				</div>
			</div>
		</section>
		<section class="panelmob school" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2021/01/Wellesley-Prep.webp') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2021/01/Wellesley-Prep.webp -->
				<div class="inner">
					<h2>Wellesley Prep School</h2>
					<p>An independent co-educational school set in the heart of the Wellington Estate with a roll of approximately 300 children aged between 2 to 13 years old.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="https://wellesleyprepschool.co.uk/" rel="noopener">Visit Us</a>
					</div>
				</div>
			</div>
		</section>
		<section class="panelmob stratfield" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2020/05/stratfield-bg.jpg') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2020/05/stratfield-bg.jpg -->
				<div class="inner">
					<h2>Stratfield Saye House</h2>
					<p>Home to the Dukes of Wellington since 1817, the house and gardens offer an intriguing and informative insight into the life of the Great Duke of Wellington.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="https://wellington.co.uk/stratfield-saye-house/">Visit Us</a>
					</div>
				</div>
			</div>
		</section>
		<section class="panelmob estate" style="background-image: url('https://wellington.co.uk/wp-content/uploads/2021/09/wellington-estate.jpg') !important;">
			<div class="block">
	  		<!-- https://wellington.co.uk/wp-content/uploads/2021/09/wellington-estate.jpg -->
				<div class="inner">
					<h2>Estate</h2>
					<p>The estate has properties to rent as well as a variety of sporting activities.</p>
					<div class="foot">
						<a class="btn" target="_blank" href="https://wellington.co.uk/estate">Visit us</a>
					</div>
				</div>
			</div>
		</section>
		
		</div>	
		</div>
	</div>
</div>

<!-- -- -->


