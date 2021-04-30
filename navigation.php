
            <?php
/**
 * Displays the site navigation.
 *
 */
//get_template_part( 'include/kjsmjs_functions' ); 

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'kjsmjs' ); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open">
					<?php //esc_html_e( 'Menu', 'kjsmjs' ); ?>
					<?php echo kjsmjs_get_svg('menu'); ?>
				</span>
				<span class="dropdown-icon close">
					<?php //esc_html_e( 'Close', 'kjsmjs' ); ?>
				<?php echo kjsmjs_get_svg('close'); ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
		
	</nav><!-- #site-navigation -->
<?php endif; ?>

 