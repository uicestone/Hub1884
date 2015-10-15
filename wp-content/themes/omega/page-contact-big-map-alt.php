<?php get_header(); ?>
<section class="section swatch-white">
	<div class="container-fullwidth">
	<div class="row">
		<div class="col-md-12">
		<div class="google-map" id="map" style="height:500px;"></div>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<header class="text-center element-normal-top element-medium-bottom condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			<h1 class="super hairline bordered bordered-normal">
			Who are we?
			</h1>
			<p class="lead">
			Oxygenna is a creative <strong>design</strong> agency with a passion &nbsp;for pixel perfect themes. We are &nbsp;located on an isolated <strong>island</strong> and we mind our own business. Don’t be afraid to contact
			us we are all here to help you out.
			</p>
		</header>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-6 col-md-offset-3 text-left small-screen-center os-animation element-normal-bottom" data-os-animation="fadeInRight" data-os-animation-delay="0.3s">
		<form id="contactForm" class="contact-form">
			<div class="form-group form-icon-group">
			<input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required/>
			<i class="fa fa-user"></i>
			</div>
			<div class="form-group form-icon-group">
			<input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required>
			<i class="fa fa-envelope"></i>
			</div>
			<div class="form-group form-icon-group">
			<textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required></textarea>
			<i class="fa fa-pencil"></i>
			</div>
			<div class="text-center">
			<input type="submit" value="Send email" class="btn btn-primary">
			</div>
			<div id="messages"></div>
		</form>
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
		<div class="col-md-12 text-center small-screen-default">
		<header class="text-center  element-tall-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal">
			Like what you see?
			</h1>
			<p class="lead">
			With Omega you get a five star customer support. As with all our themes you will receive our 100% rock solid support and free updates.
			</p>
		</header>
		<a href="http://themeforest.net/item/omega-multi-purpose-bootstrap-html-template/8591628" class="btn btn-primary btn-lg element-short-top element-tall-bottom os-animation" target="_self" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
			Get it now!
		</a>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
