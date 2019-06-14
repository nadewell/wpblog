<?php

if( !is_active_sidebar('sidebar') ){
    exit;
}
?>
<div id="secondary" class="sidebar-area col-md-4 col-sm-12" itemtype="https://schema.org/WPSideBar" itemscope>
    <?php dynamic_sidebar('sidebar'); ?>
</div>