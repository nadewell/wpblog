<?php
/*************
 * 404 Content
 */
$heading = get_option('redux_options')['404-heading']; 
$description = get_option('redux_options')['404-description']; 
$bg_image = get_option('redux_options')['404-background']; 
?>

<section class="error404" data-image="<?php echo $bg_image['url']; ?>" data-attachment="fixed">
    <div class="container">
        <div class="row justify-content-center align-items-center">
                <h2 class="section-title"><?php echo $heading; ?></h2>
                <p class="error404-desc"><?php echo $description; ?></p>
            <a href="<?php echo site_url(); ?>" class="btn btn-primary" rel="bookmark">Go Home</a>
        </div>  
    </div>
</section>