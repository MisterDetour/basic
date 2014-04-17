<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<header>
			<h2 class="comments-title"><?php comments_number('No Responses', 'One Response', '% Responses' ); ?></h2>
		</header>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-above" class="comment-navigation" role="navigation">
				<h1 class="screen-reader-text">Comment navigation</h1>
				<div class="nav-previous"><?php previous_comments_link( '&larr; Older Comments' ); ?></div>
				<div class="nav-next"><?php next_comments_link( 'Newer Comments &rarr;' ); ?></div>
			</nav><!-- #comment-nav-above -->
		<?php endif;  ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<nav id="comment-nav-below" class="comment-navigation" role="navigation">
				<h1 class="screen-reader-text">Comment navigation</h1>
				<div class="nav-previous"><?php previous_comments_link( '&larr; Older Comments' ); ?></div>
				<div class="nav-next"><?php next_comments_link( 'Newer Comments &rarr;' ); ?></div>
			</nav><!-- #comment-nav-below -->
		<?php endif; ?>

	<?php endif; ?>

	<?php if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments">Comments are closed.</p>
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->