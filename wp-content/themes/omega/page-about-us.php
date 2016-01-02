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
	<div class="container element-tall-bottom">
	<div class="row">
		<div class="col-md-12">
			<header class="text-center element-normal-top element-no-bottom not-condensed os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
				<h1 class="bigger hairline bordered bordered-normal os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
					什么是HUB1884
				</h1>
			</header>
			<?php $about_us = get_posts('name=about-us')[0]; ?>
			<div style="width: 75%; margin: auto; margin-top: 30px;">
			<?=wpautop($about_us->post_content)?>
			</div>
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
			<?php foreach(get_posts('category_name=团队介绍') as $index => $post): ?>
			<div class="col-md-4 staff-os-animation" data-os-animation="fadeIn" data-os-animation-delay=".1s">
				<div class="figure fade-in element-no-top element-no-bottom image-filter-grayscale image-filter-onhover text-center figcaption-middle" data-os-animation="fadeIn" data-os-animation-delay=".0s">
					<a href="<?=get_the_permalink($post->ID)?>" class="figure-image" data-links="" target="_self">
						<?=get_the_post_thumbnail($post->ID)?>
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
						<strong><?=get_the_title($post->ID)?></strong> 
					</h3>
					<p class="figure-caption-description"><?=$post->post_content?></p>
					</div>
				</div>
<!-- 				<ul class="social-icons element-short-top element-short-bottom text-center">
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
 -->			</div>
			<?php endforeach; ?>
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
				<img src="<?=get_stylesheet_directory_uri()?>/assets/images/hub1884.jpg" alt="" class="normalwidth">
				</span>
			</div>
			</div>
			<div class="col-md-6">
				<?=do_shortcode(wpautop(get_posts('name=优势')[0]->post_content))?>
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
			目标
			</h1>
		</header>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-3 text-center small-screen-center element-tall-bottom">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="30" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default  element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h2 class="normal hairline bordered-normal">
				力争30%以上的孵化成功率
			</h2>
		</header>
		</div>
		<div class="col-md-3  text-center small-screen-center">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="20" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default  element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
			<h2 class="normal hairline bordered-normal">
				每年专心孵化20个创业项目
			</h2>
		</header>
		</div>
		<div class="col-md-3  text-center small-screen-default">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="3" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.6s">
			<h2 class="normal hairline bordered-normal">
				专注教育、科技、文化三大领域
			</h2>
		</header>
		</div>
		<div class="col-md-3  text-center small-screen-default">
		<div class="counter bordered text-default element-short-top element-short-bottom os-animation" data-count="1" data-format="(,ddd)" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<span class="value odometer-counter super hairline">0</span>
		</div>
		<header class="text-default  element-short-top element-no-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s">
			<h2 class="normal hairline bordered-normal">
				0-1开启商业和未来的秘密
			</h2>
		</header>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
