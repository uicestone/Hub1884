<?php get_header(); ?>
<section id="three" class="section swatch-black">
	<div class="container-fullwidth">
	<div class="row">
		<div class="col-md-12 text-center">
		<div class="tp-banner-container">
			<div class="tp-banner">
			<ul>
				<li data-transition="fade" data-slotamount="4">
					<img src="http://images.adsttc.com/media/images/5287/118b/e8e4/4ea3/db00/0069/large_jpg/_Y5C6989.jpg?1384583516" data-kenburns="on" data-bgposition="left bottom" data-bgpositionend="center bottom" data-bgfit="110" data-bgfitend="100" data-duration="7000" data-ease="Power4.easeOutCubic">
					<div class="tp-caption sfl bigger hairline" data-x="100" data-y="180" data-speed="1200" data-start="1800" data-easing="easeInBack" style="color: #4c4c4c; text-shadow: 0 0 10px white;">
						HUB 1884 是什么？
					</div>
					<div class="tp-caption sfl bigger hairline" data-x="100" data-y="230" data-speed="1200" data-start="2800" data-easing="easeInBack" style="color: rgb(255, 136, 0); font-weight:bold; text-shadow: 0 0 10px white;">
						能够产生无限可能的空间
					</div>
				</li>
			</ul>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<section id="two" class="section swatch-white">
	<div class="container">
	<div id="services" class="row">
		<div class="col-md-12">
		<header class="text-center element-tall-top element-no-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal">
				HUB1884
			</h1>
			<h2>以人为本的空间，志同道合的伙伴</h2>
		</header>
		<div class="row " data-os-animation="" data-os-animation-delay="">
			<div class="col-md-3 ">
			<div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".0s">
				<div class="box box-round box-medium box-simple">
				<div class="box-dummy"></div>
				<div class="box-inner grid-overlay-0" style="background-color:#353b42;">
					<img class="" src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/indicator-512w.png" alt="a clock" />
				</div>
				</div>
				<h3 class="normal bold bordered bordered-small ">
				空间
				</h3>
				<p class="">集办公、住宿、餐饮于一体的空间</p>
			</div>
			</div>
			<div class="col-md-3 ">
			<div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".3s">
				<div class="box box-round box-medium box-simple">
				<div class="box-dummy"></div>
				<div class="box-inner grid-overlay-0" style="background-color:#353b42;">
					<img class="" src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/gift-512w.png" alt="a gift" />
				</div>
				</div>
				<h3 class="normal bold bordered bordered-small ">
				融资
				</h3>
				<p class="">HUB1884为入驻的优秀团队提供投资资金和关系网络</p>
			</div>
			</div>
			<div class="col-md-3 ">
			<div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".6s">
				<div class="box box-round box-medium box-simple">
				<div class="box-dummy"></div>
				<div class="box-inner grid-overlay-0" style="background-color:#353b42;">
					<img class="" src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/lifebuoy-512w.png" alt="a support" />
				</div>
				</div>
				<h3 class="normal bold bordered bordered-small ">
				资源
				</h3>
				<p class="">整合创业服务商，为大家提供优质的增值服务</p>
			</div>
			</div>
			<div class="col-md-3 ">
			<div class="element-medium-top element-medium-bottom text-center os-animation" data-os-animation="fadeInUp" data-os-animation-delay=".9s">
				<div class="box box-round box-medium box-simple">
				<div class="box-dummy"></div>
				<div class="box-inner grid-overlay-0" style="background-color:#353b42;">
					<img class="" src="<?=get_stylesheet_directory_uri()?>/assets/images/icons/map-512w.png" alt="a clock" />
				</div>
				</div>
				<h3 class="normal bold bordered bordered-small ">
				导师
				</h3>
				<p class="">知名导师与创业者配对，帮助创业项目发展</p>
			</div>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-overlay grid-overlay-20 " style="background-color: rgba(53,59,66,1);"></div>
	<div class="container-fullwidth">
	<div class="row">
		<div class="col-md-12">
		<header class="text-center element-tall-top element-medium-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered bordered-normal">
				HUB1884门店
			</h1>
		</header>
		<div class="portfolio-container element-short-top element-no-bottom">
			<div class="portfolio masonry " data-padding="2" data-col-xs="2" data-col-sm="3" data-col-md="4" data-col-lg="4" data-layout="fitRows">
			<?php foreach(get_posts('category_name=门店') as $index => $post): ?>
			<div class="masonry-item portfolio-item isotope-item" data-menu-order="<?=$index + 1?>" data-title="<?=get_the_title($post->ID)?>">
				<div class="figure portfolio-os-animation element-no-top element-no-bottom text-center figcaption-middle normalwidth image-filter-grayscale fade-in image-filter-onhover" data-os-animation="fadeIn" data-os-animation-delay="0s">
					<a href="<?=get_the_permalink($post->ID)?>" class="figure-image" data-links="" target="_self">
						<?=get_the_post_thumbnail($post->ID, 'post-thumbnail', array('class'=>'normalwidth'))?>
						<div class="figure-overlay grid-overlay-20">
							<div class="figure-overlay-container">
								<h1><?=get_the_title($post->ID)?></h1>
 								<!--<span class="figure-icon">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g fill="none"><path d="M50.941 34.953v30.094M65.988 50h-30.093"></path></g></svg>				
								</span> -->
							</div>
						</div>
					</a>
				</div>
			</div>
			<?php endforeach; ?>
			</div>
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
			<h1 class="bigger hairline bordered bordered-normal">
			 	独一无二的优势
			</h1>
		</header>
		</div>
		<div class="col-md-6">
		<div class="figure element-short-top element-short-bottom os-animation image-filter-none image-filter-onhover text-center figcaption-middle normalwidth" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s">
			<span class="figure-image">
			<img src="<?=get_stylesheet_directory_uri()?>/assets/images/hub1884.jpg" alt="" class="normalwidth" style="width: 70%; margin-top: 160px;">
			</span>
		</div>
		</div>
		<div class="col-md-6">
			<?=do_shortcode(wpautop(get_posts('name=优势')[0]->post_content))?>
		</div>
	</div>
	</div>
</section>
<section class="section swatch-black section-text-shadow section-inner-shadow">
	<div class="background-overlay grid-overlay-0 " style="background-color: rgba(46,51,57,1);"></div>
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		<header class="text-center element-tall-top element-medium-bottom os-animation condensed" data-os-animation="fadeIn" data-os-animation-delay="0s">
			<h1 class="bigger hairline bordered-normal">
				马上扫码关注/下载APP，了解最新机会
			</h1>
		</header>
		<img class="element-normal-bottom" src="<?=get_stylesheet_directory_uri()?>/assets/images/qrcode.jpg" style="max-width: 200px;box-shadow: 2px 2px 10px black;border-radius: 5px;">
		<!-- <a href="contact-big-map.html" class="btn btn-primary btn-lg element-short-top element-normal-bottom os-animation" target="_self" data-os-animation="fadeInUp" data-os-animation-delay="0s">
			Let's work together
		</a> -->
		</div>
	</div>
	</div>
</section>

<script type="text/javascript">
jQuery(document).ready(function()
{
	jQuery('.tp-banner').show().revolution(
	{
		delay: 8000,
		startwidth: 1170,
		startheight: 480,
		onHoverStop: "on", // Stop Banner Timer at Hover on Slide on/off
		thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
		thumbHeight: 50,
		thumbAmount: 3,
		hideThumbs: 0,
		navigationType: "bullet", // bullet, thumb, none
		navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
		navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
		navigationHAlign: "center", // Vertical Align top,center,bottom
		navigationVAlign: "bottom", // Horizontal Align left,center,right
		navigationHOffset: 0,
		navigationVOffset: 20,
		soloArrowLeftHalign: "left",
		soloArrowLeftValign: "center",
		soloArrowLeftHOffset: 20,
		soloArrowLeftVOffset: 0,
		soloArrowRightHalign: "right",
		soloArrowRightValign: "center",
		soloArrowRightHOffset: 20,
		soloArrowRightVOffset: 0,
		touchenabled: "on", // Enable Swipe Function : on/off
		stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
		stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
		hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
		hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
		hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
		fullWidth: "on",
		shadow: 0
	});
});
</script>  
<?php get_footer(); ?>
