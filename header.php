<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- [if lt IE 9] 
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    [endif] -->
    <?php wp_head(); ?>
</head>

<?php 
if ( is_home() || is_archive() || is_attachment() || is_tax() || is_single() ) {
    $item_type = 'Blog';
}
if ( is_search() ) {
    $item_type = 'SearchResultsPage';
}
$schema = 'itemtype="https://schema.org/'.$item_type.'" itemscope';
?>
<body <?php body_class(); ?> <?php echo $schema; ?>>

<?php 

    get_template_part( 'template-parts/header/header' ); 

    if( ( is_page() && !is_front_page() ) || is_single() || is_home()  ){
        get_template_part( 'template-parts/header/banner' );
    }

?>