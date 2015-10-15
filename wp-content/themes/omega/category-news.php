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
				<a class="figure-image" href="blog-post.html">
				<img alt="some image" src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-08-normal.jpg">
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
				<a href="blog-post.html">
					<?php the_title(); ?>
				</a>
			</h2>
			<small>
				<a href="blog-classic.html"><?php the_author(); ?></a>
				<?php the_date(); ?>
				<!-- <a href="blog-post.html">2 comments</a> -->
			</small>
			<span class="post-icon">
				<i class="fa fa-picture-o"></i>
			</span>
			</header>
			<div class="post-body">
				<?php the_excerpt(); ?>
			</div>
		</article>
		<?php endwhile; ?>
		<div class="text-center post-showinfo">
			<ul class="post-navigation pagination">
			<li class="disabled"><a>‹</a>
			</li>
			<li class="active"><span class="current">1</span>
			</li>
			<li><a href="blog-classic.html" class="inactive">2</a>
			</li>
			<li><a href="blog-classic.html">›</a>
			</li>
			</ul>
		</div>
		</div>
		<div class="col-md-3 sidebar">
		<div class="sidebar-widget  widget_search">
			<form role="search" method="get" action="<?=site_url()?>">
			<div class="input-group">
				<input type="text" value="" name="s" class="form-control" placeholder="Search">
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
			Recent Posts
			</h3>
			<ul>
			<li class="clearfix">
				<div class="post-icon">
				<a href="blog-post.html" title="The beauty of the world.">
					<img width="150" height="150" src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-08-normal-150x150.jpg" class="attachment-thumbnail" alt="image-08-normal">
				</a>
				</div>
				<a href="blog-post.html" title="The beauty of the world.">
				The beauty of the world.
				</a>
				<small class="post-date">
				March 14, 2014
				</small>
			</li>
			<li class="clearfix">
				<div class="post-icon">
				<a href="blog-post.html" title="Colors are the smiles of nature.">
					<img width="150" height="150" src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-02-normal-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="image-02-normal">
				</a>
				</div>
				<a href="blog-post.html" title="Colors are the smiles of nature.">
				Colors are the smiles of nature.
				</a>
				<small class="post-date">
				March 1, 2014
				</small>
			</li>
			<li class="clearfix">
				<div class="post-icon">
				<a href="blog-post.html" title="Coffee is a language in itself.">
					<img width="150" height="150" src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-03-normal-150x150.jpg" class="attachment-thumbnail" alt="image-03-normal">
				</a>
				</div>
				<a href="blog-post.html" title="Coffee is a language in itself.">
				Coffee is a language in itself.
				</a>
				<small class="post-date">
				February 14, 2014
				</small>
			</li>
			</ul>
		</div>
		<div id="categories-3" class="sidebar-widget  widget_categories">
			<h3 class="sidebar-header">
			Categories
			</h3>
			<ul>
			<li class="cat-item cat-item-65">
				<a href="blog-classic.html" title="View all posts filed under About Design">
				About Design
				</a>
			</li>
			<li class="cat-item cat-item-62">
				<a href="blog-classic.html" title="View all posts filed under Coffee &amp; more">
				Coffee &amp; more
				</a>
			</li>
			<li class="cat-item cat-item-47">
				<a href="blog-classic.html" title="View all posts filed under Nature journal">
				Nature journal
				</a>
			</li>
			<li class="cat-item cat-item-54">
				<a href="blog-classic.html" title="View all posts filed under People and more">
				People and more
				</a>
			</li>
			<li class="cat-item cat-item-1">
				<a href="blog-classic.html" title="View all posts filed under Uncategorized">
				Uncategorized
				</a>
			</li>
			<li class="cat-item cat-item-59">
				<a href="blog-classic.html" title="View all posts filed under Wooden things">
				Wooden things
				</a>
			</li>
			</ul>
		</div>
		<div id="tag_cloud-2" class="sidebar-widget  widget_tag_cloud">
			<h3 class="sidebar-header">
			Tags
			</h3>
			<div class="tagcloud">
			<ul>
				<li>
				<a href="blog-classic.html">about</a>
				</li>
				<li>
				<a href="blog-classic.html">audio</a>
				</li>
				<li>
				<a href="blog-classic.html">birds</a>
				</li>
				<li>
				<a href="blog-classic.html">cactus</a>
				</li>
				<li>
				<a href="blog-classic.html">calm</a>
				</li>
				<li>
				<a href="blog-classic.html">coffee</a>
				</li>
				<li>
				<a href="blog-classic.html">design</a>
				</li>
				<li>
				<a href="blog-classic.html">field</a>
				</li>
				<li>
				<a href="blog-classic.html">flowers</a>
				</li>
				<li>
				<a href="blog-classic.html">game</a>
				</li>
				<li>
				<a href="blog-classic.html">music</a>
				</li>
				<li>
				<a href="blog-classic.html">nature</a>
				</li>
				<li>
				<a href="blog-classic.html">sky</a>
				</li>
				<li>
				<a href="blog-classic.html">sounds</a>
				</li>
				<li>
				<a href="blog-classic.html">things</a>
				</li>
				<li>
				<a href="blog-classic.html">wood</a>
				</li>
			</ul>
			</div>
		</div>
		<div id="archives-3" class="sidebar-widget  widget_archive">
			<h3 class="sidebar-header">Archives</h3>
			<ul>
			<li><a href="blog-classic.html">March 2014</a>
			</li>
			<li><a href="blog-classic.html">February 2014</a>
			</li>
			<li><a href="blog-classic.html">January 2014</a>
			</li>
			<li><a href="blog-classic.html">December 2013</a>
			</li>
			<li><a href="blog-classic.html">November 2013</a>
			</li>
			</ul>
		</div>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
