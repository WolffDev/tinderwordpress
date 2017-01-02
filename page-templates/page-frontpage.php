<?php
/**
 * Template Name: Frontpage
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="main-content">
			<h2 class="schedule">Schedule</h2>
		</div>

		<div class="main-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'main-menu' ) ); ?>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();