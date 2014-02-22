<?php
/*
 * Template Name: Home Page
 *
 */

get_header(); ?>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div id="content" role="main">

				<header class="page-header">
					<h2 class="page-title"><?php the_title() ?></h2>
				</header><!-- .page-header -->
		
				<div class="entry">
		
					<?php the_content() ?>

				</div><!-- .entry -->
				
				<footer>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>') ?>
				</footer>
				
			</div><!-- #content -->
			
		<?php endwhile; endif; ?>
		
		<?php get_sidebar(); ?>

<?php get_footer(); ?>