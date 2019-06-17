<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'wpblog' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'wpblog'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h2>

		<ul class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ul',
						'short_ping'  => true,
						'reply_text'  => '<i class="fa fa-reply" aria-hidden="true"></i>'. __( ' Reply', 'wpblog' ),
						'walker'	  => new Schema_Walker_Comment(),
						'format'	  => 'schema'
					)
				);
			?>
		</ul>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>' . '<span class="screen-reader-text">' . __( 'Previous', 'wpblog' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'wpblog' ) . '</span>' . '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
			)
		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'wpblog' ); ?></p>
		<?php
	endif;

	$comments_args = array(
		'class_submit'      => 'submit btn btn-primary',
        // change the title of send button 
        'label_submit'=>'Post Comment',
        // change the title of the reply section
        'title_reply'=>'Leave a Reply or Comment',
        // remove "Text or HTML to be displayed after the set of comment fields"
        'comment_notes_after' => '',
        // redefine your own textarea (the comment body)
        'comment_field' => '<p class="comment-form-comment form-group"><textarea class="form-control" id="comment" name="comment" aria-required="true"></textarea></p>',
	);

	comment_form($comments_args);
	?>

</div><!-- #comments -->
