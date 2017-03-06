<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SociallyViral
 */
?>

    	</div><!-- #content -->
    </div><!-- .main-container -->
</div><!-- #page -->
    <footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info container">
		<table border=0 class="copyrights">
			<tr>
				<td>Địa chỉ:</td>
				<td>58 Trần Thái Tông, tòa nhà  AP Building, Cầu Giấy, Hà Nội</td>
			</tr>
			<tr>
				<td>Email:</td>
				<td>phuonghoang1710@gmail.com</td>
			</tr>
			<tr>
				<td></td>
				<td>phuonght@dxmb.vn</td>
			</tr>
			<tr>
				<td>Điện thoại:</td>
				<td>0976.256.783</td>
			</tr>
			<tr>
				<td></td>
				<td>0936.399.755</td>
			</tr>
		</table>
		<nav id="navigation" class="footer-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
			<img src="<?php echo site_url(); ?>/wp-content/themes/chungcuxanh/images/logo.png" alt="" />
		</nav><!-- #site-navigation -->
	</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>