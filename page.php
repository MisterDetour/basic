<?php get_header(); ?>
		
		<main class="primary" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article>	
					<header class="page-header">
						<h1 class="page-title"><?php the_title() ?></h1>
					</header><!-- .page-header -->
			
					<div class="entry">
						<?php the_content() ?>
					</div><!-- .entry -->
			
					<footer>
						<?php edit_post_link( 'Edit this entry.', '<div>', '</div>' ); ?>
					</footer>
				</article>
			
			<?php endwhile; ?>
			
		</main><!-- .primary -->
			
		<?php get_sidebar(); ?>

<?php get_footer(); ?>
