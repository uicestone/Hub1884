<?php get_header(); the_post(); ?>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-media"
	     style="background-image: url('<?= get_stylesheet_directory_uri() ?>/assets/images/uploads/image-08-normal.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50% 40%;"
	     data-start="background-position:"
	     data-70-top-bottom="background-position:">
	</div>
	<div class="background-overlay grid-overlay-30 " style="background-color: rgba(0,0,0,0.3);"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<header class="blog-header text-left element-normal-top element-normal-bottom not-condensed"
				        data-os-animation="fadeInUp" data-os-animation-delay=".4s">
					<h1 class="blog-header-title super hairline medium-top">
						<?php the_title() ?>
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
				<article class=" post post-showinfo">
					<div class="post-media">
						<div
							class="figure  element-no-top element-normal-bottom image-filter-none image-filter-onhover fade-in text-center figcaption-middle normalwidth"
							data-os-animation="none" data-os-animation-delay="0s">
							<a href="assets/images/uploads/image-08-normal.jpg" class="figure-image magnific"
							   data-links="" target="_self">
								<?php the_post_thumbnail(get_the_ID(), 'post-thumbnail', array('class'=>'normalwidth')); ?>
								<div class="figure-overlay grid-overlay-0">
									<div class="figure-overlay-container">
										<span class="figure-icon">
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
											     xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100"
											     preserveAspectRatio="none">
												<g>
													<line display="inline" fill="none" stroke-width="1"
													      stroke-miterlimit="10" x1="50.941" y1="34.953" x2="50.941"
													      y2="65.047"></line>
													<line display="inline" fill="none" stroke-width="1"
													      stroke-miterlimit="10" x1="65.988" y1="50" x2="35.895"
													      y2="50"></line>
												</g>
											</svg>
										</span>
									</div>
								</div>
							</a>
						</div>
					</div>
					<header class="post-head">
						<h1 class="post-title">
							<?php the_title(); ?>
						</h1>
						<small> <a href="blog-classic.html"><?php the_author(); ?></a>
							<?php the_date(); ?><!--,  <a href="blog-classic.html" title="Comment on The beauty of the world.">2 comments</a> -->
						</small>
							<span class="post-icon">
								<i class="fa fa-file-text"></i></span>
					</header>
					<div class="post-body">
						<?php the_content(); ?>
					</div>
					<div class="row">
						<!-- <div class="col-md-6 small-screen-center">
							<div class="post-extras">
								<span class="post-category">
								<i class="fa fa-folder-open"></i>
								<a href="blog-masonry.html" title="View all posts in Nature journal" rel="tag">Nature journal</a></span>
								<span class="post-tags">
								<i class="fa fa-tags"></i>
								<a href="blog-masonry.html" rel="tag">calm</a>, <a href="blog-masonry.html" rel="tag">nature</a>, <a
										href="blog-masonry.html" rel="tag">sky</a></span>
								<span class="post-link">
								<i class="fa fa-comments"></i>
								<a href="blog-masonry.html" title="Comment on The beauty of the world.">2 comments</a></span>
							</div>
						</div> -->
					</div>
				</article>
				<!--<nav id="nav-below" class="post-navigation post-showinfo">
					<ul class="pager">
						<li class="previous">
							<a class="btn btn-primary btn-icon btn-icon-left" rel="prev" href="blog-post.html">
								<i class="fa fa-angle-left"></i>
								Previous
							</a>
						</li>
					</ul>
				</nav>-->
				<section class="post-related post-showinfo">
					<header class="post-related-head">
						<h3 class="post-related-title">相关内容</h3>
						<small>您可能对以下内容也有兴趣</small>
						<div class="post-icon">
							<i class="fa fa-file-text-o"></i>
						</div>
					</header>
					<div class="row">
						<?php foreach(get_posts(array('category__in'=>array_map(function($cat){ return $cat->cat_ID; }, get_the_category()))) as $index => $post): ?>
						<div class="col-md-4 col-sm-4">
							<article class="post-related-post" style="background-image: url(<?=get_the_post_thumbnail_url($post->ID) ? get_the_post_thumbnail_url($post->ID) : (get_stylesheet_directory_uri() . '/assets/images/uploads/image-02-normal-300x200.jpg')?>)">
								<h4>
									<a href="<?=get_the_permalink($post->ID)?>"><?=get_the_title($post->ID)?></a>
									<!-- <small>by Manos Proistakis</small> -->
								</h4>
							</article>
						</div>
						<?php endforeach; ?>
					</div>
				</section>
			</div>
			<div class="col-md-3 sidebar">
				<div class="sidebar-widget  widget_search">
					<form role="search" method="get" action="<?=site_url()?>">
						<div class="input-group">
							<input type="text" value="" name="s" class="form-control" placeholder="搜索">
			<span class="input-group-btn">
				<button class="btn" type="submit" value="Search">
					<i class="fa fa-search"></i>
				</button></span>
						</div>
					</form>
				</div>
				<div id="recent-posts-3" class="sidebar-widget  widget_recent_entries">
					<h3 class="sidebar-header">最新动态</h3>
					<ul>
						<?php foreach(get_posts('category_name=news') as $index => $post): ?>
						<li class="clearfix">
							<div class="post-icon">
								<a href="<?=get_the_permalink($post->ID)?>" title="The beauty of the world.">
									<?=get_the_post_thumbnail($post->ID, 'thumbnail', array('class'=>'attachment-thumbnail'))?>
								</a>
							</div>
							<a href="<?=get_the_permalink($post->ID)?>" title="<?=get_the_title($post->ID)?>">
								<?=get_the_title($post->ID)?>
							</a>
							<small class="post-date">
								<?=get_the_date('', $post->ID)?>
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
