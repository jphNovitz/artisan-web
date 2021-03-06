<?php
/**
 * The header for the theme
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/bc8956f3e3.js" crossorigin="anonymous"></script>

    <?php  wp_head();
//    $custom_descrition = get_query_var('custom_description');
//    if ('' != $custom_descrition)
//        echo '<meta name="description" content="' . $custom_descrition . ' - Liège Web" />' . "\n";
//    else
//        echo '<meta name="description" content="Réalisation de sites web  à Liège." />' . "\n";
    ?>

</head>

<body class="bg-slate-50 dark:bg-black text-black dark:text-slate-50 min-h-screen" <?php body_class(); ?>>

<a class="screen-reader-text" href="#content">Skip to content</a>
<?php
if (is_front_page()) {
    get_template_part( 'template-parts/header/home_page', get_post_type() );
} else {
    get_template_part( 'template-parts/header/normal_page', get_post_type() );
}
?>
<div id="content" class="site-content min-h-screen">
	
