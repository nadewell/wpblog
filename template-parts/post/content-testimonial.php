<article <?php post_class('col-md-6 col-sm-12'); ?> itemtype="https://schema.org/Review" itemscope>
    <?php if (has_post_thumbnail() ): ?>
    <div class="post-thumbnail" itemprop="image">
    <?php the_post_thumbnail('full', array('class'=>'featured-image') ); ?>
    </div>
    <?php endif; ?>
    <h2 class="post-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="bookmart" itemprop="author"><?php the_title(); ?></a></h2>
    <div class="post-meta">
        <span class="post-date" itemprop="datePublished"><?php the_date('d M,Y', 'Posted on ', '', true); ?></span>
        <span class="post-category" itemprop="itemReviewed"><?php the_category(','); ?></span>
    </div>
    <div class="post-desc" itemprop="reviewBody"><?php the_excerpt(); ?></div>
</article>