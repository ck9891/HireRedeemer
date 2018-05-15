<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<a class="footer-home-link" href="https://www.redeemer.ca/" title="Redeemer Home Page" rel="home">
					<img src="http://appserve.redeemer.ca/yourcareer/wp-content/uploads/2017/12/ruc-shield.png" alt="redeemer logo"  />
				</a>
				&copy; <?php echo date("Y"); ?> | <a href="https://www.redeemer.ca/">www.redeemer.ca</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>