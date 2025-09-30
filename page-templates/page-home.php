<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>
		
		<main class="primary" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<article>
					<header class="page-header">
						<h1 class="page-title"><?php the_title() ?></h1>
					</header><!-- .page-header -->
	
					<div class="entry">
						<?php the_content() ?>
					</div><!-- .entry -->
				</article>
				
			<?php endwhile; ?>
			
		</main><!-- .primary -->
			
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
