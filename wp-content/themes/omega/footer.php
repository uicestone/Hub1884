				</article>
			</div>
			<footer id="footer" role="contentinfo">
				<section class="section swatch-black">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 text-center" style="line-height: 96px;">
								<?=get_option('zh_cn_l10n_icp_num')?> HUB1884+&copy;
							</div>
						</div>
					</div>
				</section>
			</footer>
		</div>
		<script type="text/javascript">
		jQuery(function($){
			$('#masthead .nav .menu-item-has-children').addClass('dropdown').on('mouseenter', function(){
				$(this).addClass('open');
			}).on('mouseleave', function(){
				$(this).removeClass('open');
			});
		});
		</script>
		<?php wp_footer(); ?>
	</body>
</html>