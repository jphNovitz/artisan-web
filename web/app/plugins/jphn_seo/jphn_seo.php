<?php
/*
 * Plugin Name: Jphn Seo
 * PLungin URI:
 * Description: Help to manage some seo parameters
 * Author: Novitz Jean-Philippe <novitz@gmail.com>
 * Version: 1.0
 * Author URI: https://jphnovitz.be
 */


add_action('wp_head', 'add_title_from_h1');
add_action('wp_head', 'add_description_from_tagline');
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'block-templates' );

function add_title_from_h1(){
//    var_dump(get_the_content()); die;
    if (!$title = get_the_title()) $title = get_bloginfo('name');

    echo '<title>' .$title.' </title>';
}

function add_description_from_tagline()
{
    if (!$description = get_the_excerpt()) $description = get_bloginfo('description');
    if (strlen($description) < 1)  $description = substr(get_the_content(), 0, 200);
        echo '<meta name="description" content="' . $description . ' - Liège Web" />' . "\n";

}

