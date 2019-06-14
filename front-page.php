<?php

get_header();
?>

<div id="page" class="site-content">
    <div class="container">
        <div class="row">
            <div id="primary" class="content-area col-md-12 col-sm-12">
            <?php
            if( have_posts() ):
                while( have_posts() ): the_post();
                    get_template_part( 'template-parts/page/content' );
                endwhile;
            endif;
            ?>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();