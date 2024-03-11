<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<?php wp_head(); ?>
</head>

<body class="Contenu_Menu">
<?php wp_body_open(); ?>

	<header>
		
	 <div class="Contenu_Header">

		<div>
			<a href="<?php echo home_url('/'); ?>">
				<img src="<?php echo get_stylesheet_directory_uri() . '/images/Logo.png'; ?>" alt="Logo">
			</a>
		</div>
				
		<nav class="navigation">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container'      => 'false',
					'menu_class'     => 'Header_css',
				)
			);
			?>

		</nav>
		
	 </div>
	</header>
