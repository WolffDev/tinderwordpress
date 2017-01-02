<?php
/**
 * Template Name: FAQ
 */
 
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="entry-content">
			<?php
			$custom_args = array(
				'post_type' => 'post',
				'category_name' => 'faq'
			);

			$custom_query = new WP_Query( $custom_args );

			if( $custom_query->have_posts() ) : 

				while($custom_query->have_posts() ) : $custom_query->the_post(); ?>
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<i class="material-icons">play_arrow</i>
								<span><?php the_title(); ?></span>
							</div>
							<div class="collapsible-body">
								<?php the_content(); ?>
							</div>
						</li>
					</ul>
				<?php endwhile; ?>
			<?php else: ?>
				<p>Nothing to show here ... Move along now !!!</p>
			<?php endif; ?>

		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();