<?php get_header(); the_post(); ?>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/home-classic-1.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 60%;" data-start="background-position:"
	 data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-30 " style="background-color: rgba(0,0,0,0.3);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<header class="text-center  element-normal-top element-normal-bottom not-condensed">
			<h1 class="super hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
				<?php the_title(); ?>
			</h1>
		</header>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/home-classic-1.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 60%;" data-start="background-position:"
	 data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-30 " style="background-color: rgba(0,0,0,0.3);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<header class="text-center element-normal-top element-no-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
				什么是HUB1884
			</h1>
		</header>
		<?php $about_us = get_posts('name=about-us')[0]; ?>
		<?=wpautop($about_us->post_content)?>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		<header class="text-center element-normal-top element-no-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal">
				我们的团队
			</h1>
		</header>
		<div class="row staff-list-container list-container element-short-top element-normal-bottom">
			<div class="col-md-4 staff-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".1s">
			<div class="figure fade-in element-no-top element-no-bottom image-filter-grayscale image-filter-onhover text-center figcaption-middle" data-os-animation="fadeIn" data-os-animation-delay=".0s">
				<a href="page-about-me.html" class="figure-image" data-links="" target="_self">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/people/image-16-normal.jpg" alt="Jane Doe" class="normalwidth">
					<div class="figure-overlay grid-overlay-20">
					<div class="figure-overlay-container">
						<span class="figure-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g fill="none"><path d="M50.941 34.953v30.094M65.988 50h-30.093"></path></g></svg>				
						</span>
					</div>
					</div>
				</a>
				<div class="figure-caption text-center">
				<h3 class="figure-caption-title bordered bordered-small ">
					<strong>Jane Doe</strong> 
					<span>Designer</span>					
				</h3>
				<p class="figure-caption-description">In the center of the roof was a great light, as bright as the sun, which made the emeralds sparkle in a wonderful manner.</p>
				</div>
			</div>
			<ul class="social-icons element-short-top element-short-bottom text-center">
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#3b5998">
					<i class="fa fa-linkedin"></i>
				</a>
				</li>
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#00acee">
					<i class="fa fa-twitter"></i>
				</a>
				</li>
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#ea4c89">
					<i class="fa fa-facebook"></i>
				</a>
				</li>
			</ul>
			</div>
			<div class="col-md-4 staff-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".2s">
			<div class="figure fade-in element-no-top element-no-bottom image-filter-grayscale image-filter-onhover text-center figcaption-middle" data-os-animation="fadeIn" data-os-animation-delay=".0s">
				<a href="page-about-me.html" class="figure-image" data-links="" target="_self">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/people/image-17-normal1.jpg" alt="Jim Doe" class="normalwidth">
					<div class="figure-overlay grid-overlay-20">
					<div class="figure-overlay-container">
						<span class="figure-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g fill="none"><path d="M50.941 34.953v30.094M65.988 50h-30.093"></path></g></svg>				
						</span>
					</div>
					</div>
				</a>
				<div class="figure-caption text-center">
				<h3 class="figure-caption-title bordered bordered-small ">
					<strong>Jim Doe</strong> 
					<span>CEO</span>					
				</h3>
				<p class="figure-caption-description">Just then a bell rang, and the green girl said to Dorothy, &quot;That is the signal. You must go into the Throne Room alone.</p>
				</div>
			</div>
			<ul class="social-icons element-short-top element-short-bottom text-center">
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#5FB0D5">
					<i class="fa fa-twitter"></i>
				</a>
				</li>
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#ea4c89">
					<i class="fa fa-linkedin"></i>
				</a>
				</li>
			</ul>
			</div>
			<div class="col-md-4 staff-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".3s">
			<div class="figure fade-in element-no-top element-no-bottom image-filter-grayscale image-filter-onhover text-center figcaption-middle" data-os-animation="fadeIn" data-os-animation-delay=".0s">
				<a href="page-about-me.html" class="figure-image" data-links="" target="_self">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/people/image-15-normal.jpg" alt="Sue Smith" class="normalwidth">
					<div class="figure-overlay grid-overlay-20">
					<div class="figure-overlay-container">
						<span class="figure-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g fill="none"><path d="M50.941 34.953v30.094M65.988 50h-30.093"></path></g></svg>				
						</span>
					</div>
					</div>
				</a>
				<div class="figure-caption text-center">
				<h3 class="figure-caption-title bordered bordered-small ">
					<strong>Sue Smith</strong> 
					<span>Founder</span>					
				</h3>
				<p class="figure-caption-description">These people had nothing to do but talk to each other, but they always came to wait outside the Throne Room every morning.</p>
				</div>
			</div>
			<ul class="social-icons element-short-top element-short-bottom text-center">
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#ea4c89">
					<i class="fa fa-linkedin"></i>
				</a>
				</li>
				<li>
				<a href="page-about-me.html3b5998" target="_self" data-iconcolor="#00acee">
					<i class="fa fa-twitter"></i>
				</a>
				</li>
				<li>
				<a href="page-about-me.html" target="_self" data-iconcolor="#5FB0D5">
					<i class="fa fa-facebook"></i>
				</a>
				</li>
			</ul>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
				为何选择HUB1884？
			</h1>
		</header>
		<div class="row ">
			<div class="col-md-6">
			<div class="figure element-no-top element-short-bottom os-animation image-filter-none image-filter-onhover text-center figcaption-middle normalwidth" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
				<span class="figure-image">
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-40-devices.png" alt="" class="normalwidth">
				</span>
			</div>
			</div>
			<div class="col-md-6">
			<ul class="features-list element-tall-top element-no-bottom features-dark" data-linecolor="" data-os-animation="none" data-os-animation-delay="0s">
				<li class="element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
				<div class="features-list-icon">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/eye-512w.png" alt="Eye Icon" class="">
				</div>
				<h3>
					Retina ready
				</h3>
				<p>
					Omega is designed with the latest technologies so that your website will look sharp and stunning even on high resolution retina displays.
				</p>
				</li>
				<li class="element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
				<div class="features-list-icon">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/idea-512w.png" alt="Idea Icon" class="">
				</div>
				<h3>
					Solid 100% Support
				</h3>
				<p>
					As usual with all of our themes you will receive our 100% support, should you need any help.
				</p>
				</li>
				<li class="element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
				<div class="features-list-icon">
					<img src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/imac-512w.png" alt="iMac Icon" class="">
				</div>
				<h3>
					Responsive layout
				</h3>
				<p>
					This Theme has a fully responsive layout. It will respond and fit to a large desktop, tablet screens and all the way down to a mobile sized display.
				</p>
				</li>
			</ul>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/home-classic-1.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 60%;" data-start="background-position:"
	 data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-30 " style="background-color: rgba(0,0,0,0.3);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<header class="text-center element-normal-top element-medium-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			Fun facts
			</h1>
		</header>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-3 text-center small-screen-center">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="101" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default  element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h2 class="normal hairline bordered-normal">
			Completed
			</h2>
		</header>
		<header class="text-default  element-no-top element-medium-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h2 class="normal hairline bordered-normal">
			projects
			</h2>
		</header>
		</div>
		<div class="col-md-3  text-center small-screen-center">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="148" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default  element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
			<h2 class="normal hairline bordered-normal">
			Happy
			</h2>
		</header>
		<header class="text-default  element-no-top element-medium-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
			<h2 class="normal hairline bordered-normal">
			customers
			</h2>
		</header>
		</div>
		<div class="col-md-3  text-center small-screen-default">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="580" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
			<h2 class="normal hairline bordered-normal">
			Lines
			</h2>
		</header>
		<header class="text-default  element-no-top element-medium-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
			<h2 class="normal hairline bordered-normal">
			per hour
			</h2>
		</header>
		</div>
		<div class="col-md-3  text-center small-screen-default">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="80" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default  element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s">
			<h2 class="normal hairline bordered-normal">
			Coffee
			</h2>
		</header>
		<header class="text-default  element-no-top element-normal-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s">
			<h2 class="normal hairline bordered-normal">
			cups
			</h2>
		</header>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row">
		<div class="col-md-12  text-default small-screen-default">
		<header class="text-center  element-normal-top element-short-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
				我们的数据
			</h1>
		</header>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-6  text-default small-screen-default">
		<div class="figure  element-no-top element-medium-bottom os-animation image-filter-none image-filter-onhover fade-in text-center figcaption-middle normalwidth" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
			<span class="figure-image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-41-devices.png" alt="" class="normalwidth">
			</span>
		</div>
		</div>
		<div class="col-md-6  text-default small-screen-default">
		<div class="divider-wrapper" style="visibility:hide;background-color:#FFFFF">
			<div class="visible-xs" style="height:0px;"></div>
			<div class="visible-sm" style="height:0px;"></div>
			<div class="visible-md" style="height:60px;"></div>
			<div class="visible-lg" style="height:72px;"></div>
		</div>
		<div class="element-short-top element-medium-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
			<p>
			Soothed again, but only soothed to deeper gloom, Ahab, who had <strong>sterned</strong> off from the whale, sat intently watching his final <strong>wanings</strong> from the now tranquil boat. For that strange spectacle
			observable in all sperm whales dying—the turning sunwards of the head, and so expiring—that strange spectacle, beheld of such a placid evening, somehow to Ahab conveyed a wondrousness unknown before.
			</p>
		</div>
		<div class="progress  element-short-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%;">
			<span>CSS</span>
			</div>
		</div>
		<div class="progress  element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
			<span>HTML</span>
			</div>
		</div>
		<div class="progress  element-no-top element-short-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
			<span>Javascript</span>
			</div>
		</div>
		<div class="progress  element-no-top element-tall-bottom os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
			<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
			<span>Photoshop</span>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-07-normal.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50%;" data-start="background-position:" data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-70 "></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12  text-center small-screen-default">
		<header class="text-center  element-tall-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			Like what you see?
			</h1>
			<p class="lead">With Omega you get a five star customer support. As with all our themes you will receive our 100% rock solid support and free updates.</p>
		</header>
		<a href="http://themeforest.net/item/omega-multi-purpose-bootstrap-html-template/8591628" class="btn btn-primary btn-lg element-short-top element-tall-bottom os-animation" target="_self" data-os-animation="fadeInUp" data-os-animation-delay="0.3s ">Get it now!</a>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
