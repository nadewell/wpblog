<article <?php post_class(); ?> itemtype="https://schema.org/CreativeWork" itemscope>
    <?php /*  ?>
    <div class="post-thumbnail">
    <?php 
    if (has_post_thumbnail() ){ 
        the_post_thumbnail('full', array('class'=>'featured-image') ); 
    }
    ?>
    </div>
    <div class="post-title"><?php the_title(); ?></div>
    <?php */ ?>
    <div class="post-content">
        <div class="post-meta">
            <span class="post-date" itemprop="datePublished"><?php the_date('d M,Y', 'Posted on ', '', true); ?></span>
            <span class="post-category" itemprop="genre">Category: <?php the_category(','); ?></span>
        </div>
        <div class="post-desc" itemprop="text"><?php the_content(); ?></div>
        <div class="post-tags"><?php the_tags(); ?></div>
    </div>
</article>