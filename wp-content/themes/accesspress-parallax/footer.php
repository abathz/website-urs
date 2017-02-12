<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package accesspress_parallax
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php if(is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) :?>
		<div class="top-footer footer-column-<?php echo accesspress_footer_count(); ?>">
			<div class="mid-content">
	            <div class="top-footer-wrap clearfix">

	            </div>
			</div>
		</div>
		<?php endif; ?>


		<div class="bottom-footer">
			<div class="mid-content clearfix">
				<div class="row">
					<div class="col-lg-4 text-center">
						<h2>Reach Us!</h2>
						<h4>Contact Urs</h4>
						<p>Sekretariat Unpar Radio Station (URS)<br>Jalan Ciumbuleuit No.94, Bandung, West Java, Indonesia 40141</p>
						<h4>Contact Person</h4>
						<p>M. Iqbal Gumilar<br>081221751688 / 083827701565</p>
						<h4>Email</h4>
						<p>Pr.urs1077@gmail.com</p>
					</div>
					<div class="col-lg-4 text-center">
						<h2>Official LINE</h2>
						<img style="margin-bottom: 50px;" src="<?php echo get_template_directory_uri(); ?>/images/chart.png" alt="">
						<h2>Social Media</h2>
					</div>
					<div class="col-lg-4 text-center">
						<h2>Our Tweet</h2>
						<a class="twitter-timeline" data-width="100%" data-height="400" data-theme="dark" href="https://twitter.com/urs1077fm">Tweets by urs1077fm</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</div>
				<div  class="copy-right">
					&copy; <?php echo date('Y')." "; bloginfo('name'); ?>
				</div><!-- .copy-right -->
				<div class="site-info">
					All Rights Reserved. Developed by <a href="https://id.linkedin.com/in/adlifariz">Adli Fariz Bonaputra</a>.
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<div id="go-top"><a href="#page"><i class="fa fa-angle-up"></i></a></div>

<?php wp_footer(); ?>
</body>
</html>
