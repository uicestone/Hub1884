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
