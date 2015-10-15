<?php get_header(); ?>
<script type="text/javascript">
	var oxyThemeData = {
	navbarHeight: 90,
	navbarScrolled: 70,
	navbarScrolledPoint: 200,
	navbarScrolledSwatches:
		{
			up: 'swatch-black',
			down: 'swatch-black'
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
<section class="section swatch-black section-text-shadow section-fullheight">
	<div class="background-media" style="background-image: url('<?=get_stylesheet_directory_uri()?>/assets/images/uploads/dark.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: 50%;" data-start="background-position:50% 0px" data-70-top-bottom="background-position:50% -180px">
	</div>
	<div class="background-overlay grid-overlay-40 " style="background-color: rgba(0,0,0,0.4);"></div>
	<div class="container">
	<div class="row element-tall-top">
		<div class="col-md-12 text-center">
		<header class="text-default  element-tall-top element-short-bottom not-condensed">
			<h1 class="hyper hairline bordered bordered-normal">
			404: 页面没有找到
			</h1>
		</header>
		<header class="text-default  element-no-top element-no-bottom condensed" data-os-animation="none" data-os-animation-delay="0s">
			<h2 class="super hairline bordered-normal">
			保持冷静
			</h2>
		</header>
		<header class="text-default  element-no-top element-no-bottom condensed" data-os-animation="none" data-os-animation-delay="0s">
			<h2 class="super hairline bordered-normal">
			再次出发
			</h2>
		</header>
		<a href="<?=site_url()?>" class="btn btn-link btn-lg element-medium-top element-medium-bottom" target="_self" data-os-animation="none" data-os-animation-delay="0s ">
			返回首页
			<span>
			<i class="fa fa-home" data-animation="none"></i>
			</span>
		</a>
		</div>
	</div>
	</div>
</section>
<?php get_footer(); ?>
