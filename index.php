<?php get_header(); ?>

		<main id="content" role="main">
		
			<?php if (have_posts()) : ?>
				
				<?php while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
						<header class="post-header">
							<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					
							<div class="post-date">
								<p>Posted on: <?php the_time('F jS, Y') ?> by <?php the_author() ?>
								<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></p>
							</div><!-- .post-date -->
						</header><!-- .post-header -->
					
						<div class="entry">
							<?php the_excerpt() ?>
						</div><!-- .entry -->
					
						<footer class="post-meta">
							<p><?php the_tags('Tags: ', ', ', '<br />'); ?>
							Posted in: <?php the_category(', ') ?> | 
							<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></p>
						</footer><!-- .post-meta -->
					
					</article><!-- .post -->
				
				<?php endwhile; ?>
			
				<div class="navigation">
					<div class="next"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="prev"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</div>
			
			<?php else : ?>

				<div class="post">
					
					<h2>Not Found</h2>
					
				</div><!-- .post -->
					
			<?php endif; ?>

		</main><!-- #content -->
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>