<?php get_header(); ?>
<section class="section swatch-blue section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-02-normal.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 0%;" data-start="background-position:"
	 data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-20 " style="background-color: rgba(0,0,0,0.4);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		<header class="text-center  element-normal-top element-normal-bottom not-condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay=".4s" data-70-top-bottom="opacity:0" data-start="opacity:1" data-center="opacity:1">
			<h1 class="super hairline bordered-normal">
				<?php single_cat_title(); ?>
			</h1>
		</header>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="portfolio-container element-medium-top element-medium-bottom">
			<div class="portfolio masonry " data-padding="15" data-col-xs="2" data-col-sm="2" data-col-md="4" data-col-lg="4" data-layout="fitRows">
				<?php while(have_posts()): the_post(); ?>
				<div class="masonry-item portfolio-item isotope-item filter-masonry filter-nature" data-menu-order="1" data-title="Coffee and Biscuits">
					<div class="figure portfolio-os-animation element-no-top element-no-bottom text-center figcaption-middle normalwidth image-filter-sepia fade-in image-filter-onhover" data-os-animation="fadeIn" data-os-animation-delay="0s">
						<a href="<?php the_permalink(); ?>" class="figure-image magnific" data-links="" target="_self">
							<?php the_post_thumbnail(); ?>
							<div class="figure-overlay grid-overlay-30">
								<div class="figure-overlay-container">
									<div class="figure-caption">
										<p class="figure-caption-description">
											<?php the_excerpt(); ?>
										</p>
									</div>
								</div>
							</div>
						</a>
					</div>
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
