<article <?php post_class(); ?> itemtype="https://schema.org/CreativeWork" itemscope>
    <?php if (has_post_thumbnail() ): ?>
    <div class="post-thumbnail" itemprop="image">
    <?php the_post_thumbnail('full', array('class'=>'featured-image') ); ?>
    </div>
    <?php endif; ?>
    <div class="post-content">
        <h2 class="post-title" itemprop="headline"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="post-meta">
            <span class="post-date" itemprop="datePublished"><?php the_date('d M,Y', 'Posted on ', '', true); ?></span>
            <span class="post-category" itemprop="genre"><?php the_category(','); ?></span>
        </div>
        <div class="post-desc" itemprop="text"><?php the_excerpt(); ?></div>
    </div>
</article>