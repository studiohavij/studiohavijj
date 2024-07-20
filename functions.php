<?php
function theme_setup() {
    // پشتیبانی از عنوان پویا
    add_theme_support('title-tag');
    
    // پشتیبانی از منوی ناوبری
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'THEMENAME'),
    ));
}

add_action('after_setup_theme', 'theme_setup');
?>
