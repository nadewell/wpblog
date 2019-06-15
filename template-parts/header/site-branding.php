<?php 


$custom_logo = get_theme_mod( 'custom_logo' );
$site_title = get_bloginfo('name');

if($custom_logo != ''){ 
    echo '<a class="navbar-brand" href="'.site_url().'" title="'.$site_title.'"><img src="'.wp_get_attachment_image_src( $custom_logo, 'full' )[0].'" alt="'.$site_title.'"></a>';
}else{
    echo '<a class="navbar-brand" href="'.site_url().'">'.$site_title.'</a>';
}