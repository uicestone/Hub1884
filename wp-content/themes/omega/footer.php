				</article>
			</div>
			<footer id="footer" role="contentinfo">
				<section class="section swatch-black">
					<div class="container">
						<div class="row element-normal-top element-normal-bottom">
							<div class="col-md-5">
								<div id="recent-posts-4" class="sidebar-widget  widget_recent_entries">
									<h3 class="sidebar-header">资讯分享</h3>
									<ul>
										<li class="clearfix">
											<div class="post-icon">
												<a href="blog-post.html" title="The beauty of the world.">
													<img width="150" height="150" src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-08-normal-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="image-08-normal">
												</a>
											</div>
											<a href="blog-post.html" title="The beauty of the world.">The beauty of the world.</a>
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
											<a href="blog-post.html" title="Colors are the smiles of nature.">Colors are the smiles of nature.</a>
											<small class="post-date">
												March 1, 2014
											</small>
										</li>
										<li class="clearfix">
											<div class="post-icon">
												<a href="blog-post.html" title="Coffee is a language in itself.">
													<img width="150" height="150" src="<?=get_stylesheet_directory_uri()?>/assets/images/uploads/image-03-normal-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="image-03-normal">
												</a>
											</div>
											<a href="blog-post.html" title="Coffee is a language in itself.">Coffee is a language in itself.</a>
											<small class="post-date">
												February 14, 2014
											</small>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div id="categories-4" class="sidebar-widget  widget_categories">
									<h3 class="sidebar-header">关于我们</h3>
									<ul>
										<li class="cat-item cat-item-65">
											<a href="blog-classic.html" title="View all posts filed under About Design">About Design</a>
										</li>
										<li class="cat-item cat-item-62">
											<a href="blog-classic.html" title="View all posts filed under Coffee &amp; more">Coffee &amp; more</a>
										</li>
										<li class="cat-item cat-item-47">
											<a href="blog-classic.html" title="View all posts filed under Nature journal">Nature journal</a>
										</li>
										<li class="cat-item cat-item-54">
											<a href="blog-classic.html" title="View all posts filed under People and more">People and more</a>
										</li>
										<li class="cat-item cat-item-1">
											<a href="blog-classic.html" title="View all posts filed under Uncategorized">Uncategorized</a>
										</li>
										<li class="cat-item cat-item-59">
											<a href="blog-classic.html" title="View all posts filed under Wooden things">Wooden things</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div id="archives-4" class="sidebar-widget  widget_archive">
									<h3 class="sidebar-header">招聘英才</h3>
									<ul>
										<li>
											<a href="blog-classic.html">March 2014</a>
										</li>
										<li>
											<a href="blog-classic.html">February 2014</a>
										</li>
										<li>
											<a href="blog-classic.html">January 2014</a>
										</li>
										<li>
											<a href="blog-classic.html">December 2013</a>
										</li>
										<li>
											<a href="blog-classic.html">November 2013</a>
										</li>
									</ul>
								</div>
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