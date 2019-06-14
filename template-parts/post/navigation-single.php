<?php
$author_id = get_the_author_ID();
$author_name = get_the_author();
?>
<div class="post-extras">
    <div class="author-box">
        <div class="author-gravtar"><img src="<?php echo get_avatar_url( $author_id ); ?>" alt="<?php echo $author_name; ?>"></div>
        <div class="author-name"><h4 itemprop="author" itemtype="https://schema.org/Person"><?php  echo $author_name; ?></h4></div>
    </div>
    <?php
    $post_nav_args  = array(
        'prev_text'                  => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>'.__( ' %title' ),
        'next_text'                  => __( '%title ' ).'<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
        'in_same_term'               => false,
        'taxonomy'                   => __( 'post_tag' ),
        'screen_reader_text' => __( 'Continue Reading' ),
    );
    the_post_navigation($post_nav_args);
    ?>
</div>