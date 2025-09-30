<?php get_header(); ?>
		
		<main class="primary" role="main">
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<article>	
					
					<div class="entry is-layout-constrained">
						<header class="page-header">
							<h1 class="page-title"><?php the_title() ?></h1>
						</header><!-- .page-header -->
						<?php the_content() ?>
					</div><!-- .entry -->
				</article>
			
			<?php endwhile; ?>
			
		</main><!-- .primary -->

<?php get_footer(); ?>
