	<footer>

    <nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'container'      => 'false',
					'menu_class'     => 'Footer_css',
				)
			);
			?>

			<?php get_template_part('template-parts/modale'); ?>
    </nav>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
