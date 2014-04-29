<?php get_header(); ?>

		<main id="content" role="main">
		
			<header class="page-header">
				<?php if (is_category()) : ?>
					<h1 class="page-title">Archive for &ldquo;<?php single_cat_title(); ?>&rdquo; Category</h1>
				<?php elseif( is_tag() ) : ?>
					<h1 class="page-title">Archive for &ldquo;<?php single_tag_title(); ?>&rdquo; Tag</h1>
				<?php elseif ( is_author() ) : the_post(); ?>
					<h1 class="page-title">Archive for <?php echo get_the_author(); ?></h1>
				<?php elseif( is_day() ) : ?>
					<h1 class="page-title">Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php elseif ( is_month() ) : ?>
					<h1 class="page-title">Archive for <?php the_time('F, Y'); ?></h1>
				<?php elseif ( is_year() ) : ?>
					<h1 class="page-title">Archive for <?php the_time('Y'); ?></h1>
				<?php else : ?>
					<h1 class="page-title">Blog Archives</h1>
				<?php endif; ?>
			</header><!-- .page-header -->
			
			<?php if (have_posts()) : ?>
				
				<?php while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
				
						<header class="post-header">
							<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				
							<div class="post-date">
								<p>Posted on: <?php the_time('F jS, Y') ?> by <?php the_author() ?>
								<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments-link', ''); ?></p>
							</div><!-- .post-date -->
						</header><!-- .post-header -->
				
						<div class="entry">
							<?php the_content() ?>
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
				
				<h2>No posts Found</h2>
				
			</div><!-- .post -->
				
		<?php endif; ?>

	</main><!-- #content -->
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>