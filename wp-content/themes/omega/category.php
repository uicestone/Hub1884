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
			<div class="row">
			<div class="col-md-12">
				<div class="portfolio-header clearfix">
				<h3 class="portfolio-title pull-left">
					<strong>View /</strong> <span>All</span>
				</h3>
				<div class="portfolio-filters pull-right">
					<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle btn-icon-right btn-sm" data-toggle="dropdown"><b>Sort</b>
						<span>
						<i class="fa fa-angle-down"></i>
						</span>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li><a class="portfolio-sort" data-sort="default">Default</a>
						</li>
						<li><a class="portfolio-sort" data-sort="title">Title</a>
						</li>
						<li><a class="portfolio-sort" data-sort="date">Date</a>
						</li>
						<li><a class="portfolio-sort" data-sort="comments">Comments</a>
						</li>
					</ul>
					</div>
					<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle btn-icon-right btn-sm" data-toggle="dropdown"><b>Order</b>
						<span>
						<i class="fa fa-angle-down"></i>
						</span>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li><a class="portfolio-order" data-value="true">Ascending</a>
						</li>
						<li><a class="portfolio-order" data-value="false">Descending</a>
						</li>
					</ul>
					</div>
					<div class="btn-group">
					<button type="button" class="btn btn-primary dropdown-toggle btn-icon-right btn-sm" data-toggle="dropdown"><b>Category</b>
						<span>
						<i class="fa fa-angle-down"></i>
						</span>
					</button>
					<ul class="dropdown-menu pull-right" role="menu">
						<li><a class="portfolio-filter" data-filter="*">All</a>
						</li>
						<li><a class="portfolio-filter" data-filter=".filter-nature">Nature
							journal</a>
						</li>
						<li><a class="portfolio-filter" data-filter=".filter-people">People and
							more</a>
						</li>
						<li><a class="portfolio-filter" data-filter=".filter-things">Things</a>
						</li>
					</ul>
					</div>
				</div>
				</div>
			</div>
			</div>
			<div class="portfolio masonry " data-padding="15" data-col-xs="2" data-col-sm="2" data-col-md="4" data-col-lg="4" data-layout="fitRows">
				<?php while(have_posts()): the_post(); ?>
				<div class="masonry-item portfolio-item isotope-item filter-masonry filter-nature" data-menu-order="1" data-title="Coffee and Biscuits">
					<div class="figure portfolio-os-animation element-no-top element-no-bottom text-center figcaption-middle normalwidth image-filter-sepia fade-in image-filter-onhover" data-os-animation="fadeIn" data-os-animation-delay="0s">
						<a href="assets/images/uploads/image-03-normal.jpg" class="figure-image magnific" data-links="
						   " target="_self">
							<?php the_post_thumbnail(); ?>
							<div class="figure-overlay grid-overlay-30">
							<div class="figure-overlay-container">
								<div class="figure-caption">
								<h3 class="figure-caption-title bordered bordered-small">
									<?php the_title(); ?>
								</h3>
								<p class="figure-caption-description">
									<?php the_excerpt(); ?>
								</p>
								</div>
							</div>
							</div>
						</a>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-blue section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-02-normal.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 0%;" data-start="background-position:"
	 data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-20 " style="background-color: rgba(0,0,0,0.4);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		<header class="text-center element-normal-top element-short-bottom condensed os-animation" data-os-animation="fadeIn" data-os-animation-delay=".4s" data-70-top-bottom="opacity:0" data-start="opacity:1" data-center="opacity:1">
			<h1 class="big light bordered-normal">
			The most advanced, flexible and awesome theme you’ve ever seen. Need more? Feel free to contact us.
			</h1>
		</header>
		<a href="http://themeforest.net/item/omega-multi-purpose-bootstrap-html-template/8591628" class="btn btn-link btn-lg element-short-top element-normal-bottom os-animation" target="_self" data-os-animation="fadeInUp" data-os-animation-delay="0.3s">
			buy it now
		</a>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
