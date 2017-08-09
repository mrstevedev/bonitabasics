<?php /*Template Name: Home Template */ ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<section class="section-1">
	<div class="container">
		<div class="row">		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center-logo">	
			<h1>BONITA<span class="bonita-green">BASICS</span></h1>
			<ul class="hero-nav">
				<li class="hvr-underline-reveal"><a href="#" class="sectionTwoBtn1">The Basics</a></li>
				<li class="hvr-underline-reveal"><a href="#" class="sectionThreeBtn1">Rack 'Em Up Records</a></li>
				<li class="hvr-underline-reveal"><a href="#section4" class="sectionFourBtn1">Production Inquiries</a></li>
			</ul>
		</div>
		
	</div>
	<!-- <div
	class="fb-like"
	data-share="true"
	data-width="450"
	data-show-faces="true">
	</div> -->
	<div class="svg-arrows">
		<svg class="arrows">
		<a href="#" class="sectionTwoBtn2">
			<path class="a1" d="M2.5,1.2 15,13.8 27.5,1.2 "></path>
			<path class="a2" d="M2.5,6.3 15,18.8 27.5,6.3 "></path>
			</a>
		</svg>
	</div>
	</div>
</section>

<section class="section-2">
	<div class="container">
		<div class="row">		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-right-flex">	
					<h1 class="bonita-green"><span class="hilite-white">The</span><br/>Basics</h1>
				<div class="about-text">
					<p>This section will be about BonitaBasics and what the Bonita Vibe is all about, from living in Bonita, to the visuals, to the record collecting, and to the music making process.</p>
				</div>
				<div class="bonitabasics-list col-lg-4">
				<ul class="the-list">
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>BONITABASICS</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>BONITA, CA</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>MPC2000</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>VINYL RECORDS</li>
				</ul>
				</div>
			</div>
		</div>

	<div class="svg-arrows">
		<svg class="arrows">
		<a href="#" class="sectionThreeBtn2">
			<path class="a1" d="M2.5,1.2 15,13.8 27.5,1.2 "></path>
			<path class="a2" d="M2.5,6.3 15,18.8 27.5,6.3 "></path>
		</a>
		</svg>
	</div>
	</div>

</section>

<section class="section-3">
	<div class="container">
		<div class="row">		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">	
			<h1> <img src="<?php bloginfo('url')?>/wp-content/uploads/2017/08/stacked-vinyl-records.svg"/>Rack 'Em Up Records</h1>
				<p>Rack 'Em Up records is a label started by Marvalous Tha Duke. More info here about Rack 'Em Up Records. There will be a logo Coming Soon for this new label.</p>
					<div class="checkBox">
					<a href="/shop">Go Shop</a>
					<svg width="140" height="65" viewBox="0 0 140 65" xmlns="http://www.w3.org/2000/svg">
						<rect x="10" class="button" width="128.8" height="63.9"/>
						<rect x="0" y="22.5" class="box" width="20" height="20"/>
						<polyline class="checkMark" points="4.5,32.6 8.7,36.8 16.5,29.1"/>
					</svg>
					</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">	
			<h1><img src="<?php bloginfo('url') ?>/wp-content/uploads/2017/08/vinyl-record.svg"/>Releases</h1>
			<ul class="releases-list">
				<li>BonitaBasics - Beats From Bonita </li>
				<li>sp da iLL kid - Time to get iLL</li>
				<li>Veks - Some new release</li>
				<li>Inna Attic Crookz - Release</li>
			</ul>
		</div>
	</div>

	<div class="svg-arrows">
		<svg class="arrows">
		<a href="#" class="sectionFourBtn2">
			<path class="a1" d="M2.5,1.2 15,13.8 27.5,1.2 "></path>
			<path class="a2" d="M2.5,6.3 15,18.8 27.5,6.3 "></path>
			</a>
		</svg>
	</div>
	</div>

</section>

<section class="section-4">
	<div class="container">
		<div class="row">		
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
				<h1>Production Inquiries</h1>
				<p>Got a project you want me to be a part of? Get in touch.</p>		
				<p><strong>Email:</strong> <a class="production-inquiry" href="#">production@bonitabasics.com</a></p>	
					
			</div>
		</div>
	</div>

</section>
<div class="back-to-top">
	<a href="#0" class="backtotopBtn cd-top">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
</div>
