<?php get_header(); ?>

	<div id="main">
		<?php wp_get_archives('type=yearly'); ?>
		<div id="content">
				
			<header>
				<h1 class="page-title">Search Results for: <span><?php echo get_search_query(); ?></span></h1>
			</header>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
					<header>
						<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
					
						<div class="post-date">
							Posted on: <?php the_time('F jS, Y') ?> by <?php the_author() ?>
							<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?>
						</div><!-- .post-date -->
					</header>
					
					<div class="entry">
			
						<?php the_content() ?>

					</div><!-- .entry -->
					
					<footer class="post-meta">
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
						Posted in <?php the_category(', ') ?> | 
						<?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?>
					</footer><!-- .post-meta -->
					
				</article><!-- .post -->
				
			<?php endwhile; ?>
			
			<div class="navigation">
				<div class="next"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="prev"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>
			
			<?php else : ?>

				<div class="post">
					
					<h2>No posts Found</h2>
					
				</div><!-- .post -->
					
			<?php endif; ?>

		</div><!-- #content -->
		
		<?php get_sidebar(); ?>
		
	</div><!-- #main -->

<?php get_footer(); ?>

