<?php
/*
 * Template Name: Home Page
 *
 */
?>

<?php get_header(); ?>

	<div id="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="content">

				<header>
					<h2 class="page-title"><?php the_title() ?></h2>
				</header>
		
				<div class="entry">
		
					<?php the_content() ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div><!-- .entry -->
				
				<footer>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>') ?>
				</footer>
				
			</article><!-- #content -->
			
		<?php endwhile; endif; ?>
		
		<?php get_sidebar(); ?>
		
	</div><!-- #main -->

<?php get_footer(); ?>
