<?php

get_header();
?>

<div id="page" class="site-content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-8 col-sm-12">
                <main id="main" class="site-main" role="main">
                    <?php
                    if( have_posts() ):
                        while( have_posts() ): the_post();
                            // Post Content Template 
                            get_template_part( 'template-parts/post/content','single' );
                            // Post Navigation template
                            get_template_part('template-parts/post/navigation', 'single' );
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        endwhile;
                    endif;
                    ?>
                </main>
                
            </div>
            <!-- Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<section class="newsletter-optin">
    <div class="container">
        <div class="row align-items-center">
            <div class="optin-desc col-md-8 col-sm-12"> <h3>Stay tuned to our stockmarket blog.</h3> <p>Subscribe to our newsletter.</p></div>
            <div class="optin-btn col-md-4 col-sm-12"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#optinModal">Subscribe</button></div>
        </div>
    </div>
</section>
<?php

get_footer();