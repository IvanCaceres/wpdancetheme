<?php
/**
 * Custom functions
 */
if ( function_exists('register_sidebar') )
    register_sidebar( array(
        'name' => __( 'Homepage Post'),
        'id' => 'mycustomwidgetarea',
        'description' => __( 'An optional widget area for your site footer', 'twentyeleven' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => "</aside>",
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
?>
<?php
register_nav_menus( array(
'pluginbuddy_mobile' => 'PluginBuddy Mobile Navigation Menu',
'footer_menu' => 'My Custom Footer Menu'
) );?>