<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mkag
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="container-fluid">
        <div class="footer-navigation">
            <ul>
					<li class="current-menu-item"><a href="">Home</a></li>
					<li><a href="">Careers</a></li>
					<li><a href="">Terms and Conditions</a></li>
					<li><a href="">Privacy</a></li>
					<li><a href="">FAQs</a></li>
				</ul>
            <?php
					// wp_nav_menu( array(
					// 	'theme_location'	=> 'menu-2',
					// 	'menu_id'					=> 'footer-menu',
					// 	'container'				=> '',
					// ) );
				?>
        </div>
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mkag' ) ); ?>">
                All right reserved. © MKAG Technologies PLT
            </a>
        </div><!-- .site-info -->
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>