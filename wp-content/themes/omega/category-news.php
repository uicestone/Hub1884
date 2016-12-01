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
				<?php single_cat_title(); ?>
			</h1>
		</header>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div class="row element-normal-top element-normal-bottom">
		<div class="col-md-9">
		<?php while(have_posts()): the_post(); ?>
		<article class="post post-showinfo">
			<div class="post-media">
			<div class="figure element-no-top element-normal-bottom image-filter-none image-filter-onhover fade-in text-center figcaption-middle normalwidth" data-os-animation="none" data-os-animation-delay="0s">
				<a class="figure-image" href="<?php the_permalink(); ?>">
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
				<a href="<?php the_permalink() ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<small>
				<?php the_author(); ?>
				<?php the_date(); ?>
			</small>
			<span class="post-icon">
				<?php the_post_thumbnail('thumbnail'); ?>
			</span>
			</header>
			<div class="post-body">
				<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; ?>
		<div class="text-center post-showinfo">
			<?=paginate_links(array('type'=>'list', 'prev_text'=>'‹', 'next_text'=>'›'))?>
		</div>
		</div>
		<div class="col-md-3 sidebar">
		<div class="sidebar-widget  widget_search">
			<form role="search" method="get" action="<?=site_url()?>">
			<div class="input-group">
				<input type="text" value="" name="s" class="form-control" placeholder="搜索">
				<span class="input-group-btn">
					<button class="btn" type="submit" value="Search">
					<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
			</form>
		</div>
		<div id="recent-posts-3" class="sidebar-widget  widget_recent_entries">
			<h3 class="sidebar-header">
				最新资讯
			</h3>
			<ul>
				<?php foreach(get_posts(array('category_name'=>'news')) as $news): ?>
				<li class="clearfix">
					<div class="post-icon">
					<a href="<?=get_the_permalink($news->ID)?>" title="<?=get_the_title($news->id)?>">
						<?=get_the_post_thumbnail($news->ID, 'thumbnail')?>
					</a>
					</div>
					<a href="<?=get_the_permalink($news->ID)?>" title="<?=get_the_title($news->id)?>">
						<?=get_the_title($news->id)?>
					</a>
					<small class="post-date">
						<?=$news->post_date?>
					</small>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
