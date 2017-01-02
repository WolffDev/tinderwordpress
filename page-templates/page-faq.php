<?php
/**
 * Template Name: FAQ
 */
 
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="faq-container">
			<ul class="collapsible" data-collapsible="accordion">
			<?php
			$custom_args = array(
				'post_type' => 'post',
				'category_name' => 'faq'
			);

			$custom_query = new WP_Query( $custom_args );

			if( $custom_query->have_posts() ) : 

				while($custom_query->have_posts() ) : $custom_query->the_post(); ?>
					<li>
						<div class="collapsible-header">
							<i class="material-icons">play_arrow</i>
							<span><?php the_title(); ?></span>
						</div>
						<div class="collapsible-body">
							<div class="collapsible-body-content">
								<?php the_content(); ?>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
			<?php else: ?>
				<p>Nothing to show here ... Move along now !!!</p>
			<?php endif; ?>
			</ul>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();