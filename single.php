<?php get_header(); ?>
		
		<article id="content" role="main">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<header class="post-header">
						<h1 class="post-title"><?php the_title() ?></h1>
					
						<div class="post-date">
							<p>Posted on: <?php the_time('F jS, Y') ?> by <?php the_author() ?></p>
						</div><!-- .post-date -->
					</header><!-- .post-header -->
					
					<div class="entry">
			
						<?php the_content() ?>

						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
						
					</div><!-- .entry -->
					
					<?php edit_post_link('Edit this entry.', '<p>', '</p>') ?>
					
					<footer class="post-meta">
						<p><?php the_tags('Tags: ', ', ', '<br />'); ?>
						Posted in: <?php the_category(', ') ?></p>
					</footer><!-- .post-meta -->
					
				</div><!-- .post -->
				
				<?php comments_template(); ?>
				
			<?php endwhile; ?>
			
			<?php else : ?>

				<div class="post">
					
					<h2>Not Found</h2>
					
				</div><!-- .post -->
					
			<?php endif; ?>

		</article><!-- #content -->
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>

