<?php get_header(); ?>
<script type="text/javascript">
	var oxyThemeData = {
	navbarHeight: 90,
	navbarScrolled: 70,
	navbarScrolledPoint: 200,
	navbarScrolledSwatches:
		{
			up: 'swatch-black',
			down: 'swatch-white'
		},
	scrollFinishedMessage: 'No more items to load.',
	hoverMenu:
		{
			hoverActive: false,
			hoverDelay: 1,
			hoverFadeDelay: 200
		}
	};
</script>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media" data-start="background-position:" data-70-top-bottom="background-position:">
	<video style="width: 100%; height: 100%;" loop autoplay class="section-background-video">
		<source type="video/mp4" src="http://theme-background-videos.s3.amazonaws.com/club-dj.mp4">
		<source type="video/webm" src="http://theme-background-videos.s3.amazonaws.com/club-dj.webm">
	</video>
	</div>
	<div class="background-overlay grid-overlay-40 " style="background-color: rgba(0,0,0,0.2);"></div>
	<div class="container">
	<div class="row element-tall-top">
		<div class="col-md-12 text-center">
		<header class="element-tall-top element-short-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="1s">
			<h2 class="super hairline bordered bordered-normal">
			Sections can have background videos. How cool is that?
			</h2>
		</header>
		<a href="<?=site_url()?>" class="btn btn-link btn-lg element-short-top element-tall-bottom os-animation" target="_self" data-os-animation="fadeInUp" data-os-animation-delay="1s ">
			Learn more
		</a>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-white">
	<div class="container-fullwidth">
	<div class="row">
		<div class="col-md-12 text-center">
		<header class="text-center element-medium-top element-short-bottom not-condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="1s">
			<h2 class="bigger hairline bordered bordered-normal">
			Awesome pages
			</h2>
		</header>
		<div class="figure  element-short-top element-short-bottom os-animation image-filter-none image-filter-onhover fade-none text-center figcaption-middle normalwidth animated fadeInUp" data-os-animation="fadeInUp" data-os-animation-delay="0.1s" style="-webkit-animation: 0.1s;">
			<span class="figure-image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-21-devices.jpg" class="normalwidth">
			</span>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center">
			<div class="element-medium-top element-tall-bottom os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
				<p class="lead">
				Aliquam nam arcu sed <strong>volutpat</strong> accumsan a tellus blandit, libero tortor at lobortis dapibus lacinia vehicula vestibulum congue, commodo et per etiam ligula molestie non platea <strong>sociosqu</strong> potenti
				tempor vivamus netus praesent quisque consectetur tristique ultricies viverra, dictumst quisque litora vel ante velit proin sociosqu class imperdiet, odio <strong>euismod</strong> sit placerat praesent phasellus
				imperdiet fusce quisque <strong>tristique</strong> sed ornare non ante erat accumsan justo a donec, adipiscing fringilla urna ligula tempor neque.
				</p>
			</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
