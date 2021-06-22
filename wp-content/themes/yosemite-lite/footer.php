<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yosemite
 */

?>

	</div><!-- #content -->
	<aside id="secondary" class="sidebar-footer widget-area" role="complementary">
		<div class="container">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	</aside><!-- .sidebar-footer  -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<?php
			if ( function_exists( 'jetpack_social_menu' ) ) {
				jetpack_social_menu();
			}
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'yosemite-lite' ) ); ?>">
					<?php
						/* translators: %s is replaced with 'string' */
						printf( esc_html__( 'Proudly powered by %s', 'yosemite-lite' ), 'WordPress' );
					?>
				</a>
				<span> | </span>
				<?php
					/* translators: %1$s is replaced with 'string', %2$s is replaced with 'string' */
					printf( esc_html__( 'Theme: %1$s by', 'yosemite-lite' ), 'Yosemite' );
				?>
				<a href="<?php echo esc_url( __( 'https://gretathemes.com/', 'yosemite-lite' ) ) ?>" rel="designer">GretaThemes</a>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->

	<nav class="mobile-navigation" role="navigation">
		<?php
		wp_nav_menu( array(
			'container_class' => 'mobile-menu',
			'menu_class'      => 'mobile-menu clearfix',
			'theme_location'  => 'menu-1',
			'items_wrap'      => '<ul>%3$s</ul>',
		) );
		?>
	</nav>
</div><!-- #page -->

<a href="#" class="scroll-to-top hidden"><i class="fa fa-angle-up"></i></a>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script>
		// $(document).ready(function(){
		// 	$('ul#nav li').click(function(){
		// 		$('ul#nav li').removeClass("active");
		// 		$(this).addClass("active");
		// 	});
		// });
		$(function(){
			var current = location.pathname;
			$('#nav a').each(function(){
				var $this = $(this);
				// if the current path is like this link, make it active
				if($this.attr('href').indexOf(current) !== -1){
					$this.addClass('active');
        }
    })
})
	</script>
</body>
</html>
