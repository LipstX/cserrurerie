<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Preloader -->
	<?php get_template_part( 'templates/header/preloader' ); ?>

	<!-- Page Wrapper -->
	<div id="page-wrap">

		<div id="custom-header">
			<div class="boxed-wrapper">
				<img id="custom-logo" src="http://localhost/cserrurerie/wp-content/uploads/custom/cornouaille-serrurie-custom-logo.png" alt="Cornouaille Serrurerie">
				<div id="custom-header-right">
					<img id="custom-icon-header" src="http://localhost/cserrurerie/wp-content/uploads/custom/cornouaille-serrurie-24.png" alt="Cornouaille Serrurerie 24h sur 24">
					<div id="custom-phone-number">06 59 34 21 75</div>
				</div>
			</div>
		</div>

		<!-- Boxed Wrapper -->
		<div id="page-header" <?php echo esc_attr(bard_options( 'general_header_width' )) === 'boxed' ? 'class="boxed-wrapper"': ''; ?>>

		<?php

		// Top Bar
		get_template_part( 'templates/header/top', 'bar' );

		// Page Header
		get_template_part( 'templates/header/page', 'header' );

		// Main Navigation
		get_template_part( 'templates/header/main', 'navigation' );
		
		?>

		</div><!-- .boxed-wrapper -->

		<!-- Page Content -->
		<div id="page-content">
			
			<?php get_template_part( 'templates/sidebars/sidebar', 'alt' ); // Sidebar Alt ?>