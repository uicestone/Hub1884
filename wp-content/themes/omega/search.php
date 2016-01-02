<?php get_header(); ?>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-08-normal.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 40%;" data-start="background-position:"
	 data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-30 " style="background-color: rgba(0,0,0,0.3);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		<header class="blog-header text-left  element-normal-top element-normal-bottom not-condensed" data-os-animation="fadeInUp" data-os-animation-delay=".4s">
			<h1 class="blog-header-title super hairline medium-top">
				搜索结果：<?=$_GET['s']?>
			</h1>
		</header>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row element-normal-top element-normal-bottom">
		<div class="col-md-8 col-md-offset-2">
		<?php while(have_posts()): the_post(); ?>
		<article class="post post-showinfo">
			<div class="post-media">
			<div class="figure element-no-top element-normal-bottom image-filter-none image-filter-onhover fade-in text-center figcaption-middle normalwidth" data-os-animation="none" data-os-animation-delay="0s">
				<a class="figure-image" href="blog-post.html">
					<?php the_post_thumbnail(); ?>
					<div class="figure-overlay grid-overlay-0">
					<div class="figure-overlay-container">
						<span class="figure-icon">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="none"><g>
							<path display="inline" fill="none" stroke-width="1" stroke-miterlimit="10" d="M45.634,50.124
								  c-0.939-0.939-2.425-0.939-3.364,0l-9.833,9.831c-0.938,0.938-0.938,2.426,0,3.364l5.175,5.175c0.939,0.938,2.426,0.938,3.364,0
								  l9.833-9.832c0.937-0.938,0.937-2.426,0-3.362L45.634,50.124z"></path>
							<path display="inline" fill="none" stroke-width="1" stroke-miterlimit="10" d="M64.261,31.495
								  c-0.937-0.938-2.423-0.938-3.362,0l-9.831,9.832c-0.94,0.938-0.94,2.424,0,3.364l5.174,5.174c0.938,0.939,2.427,0.939,3.364,0
								  l9.831-9.832c0.94-0.938,0.94-2.424,0-3.362L64.261,31.495z"></path>
							<line display="inline" fill="none" stroke-width="1" stroke-miterlimit="10" x1="44.34" y1="56.591" x2="57.535" y2="43.396"></line></g>
						</svg>
						</span>
					</div>
					</div>
				</a>
			</div>
			</div>
			<header class="post-head">
			<h2 class="post-title">
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<!--<small>
				<a href="blog-classic.html">Christos Pantazis</a>
				on August 14, 2014 ,
				<a href="blog-post.html">2 comments</a>
			</small>-->
			<span class="post-icon">
				<i class="fa fa-info"></i>
			</span>
			</header>
			<div class="post-body">
			<p>
				<?php the_excerpt(); ?>
			</p>
			<a class="post-more-link btn btn-primary" href="<?php the_permalink(); ?>">
				详情
			</a>
			</div>
		</article>
		<?php endwhile; ?>
		<div class="text-center post-showinfo">
			<?=paginate_links(array('type'=>'list', 'prev_text'=>'‹', 'next_text'=>'›'))?>
		</div>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
