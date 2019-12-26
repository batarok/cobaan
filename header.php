<?php
/* ini header */
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(' - ').' '.bloginfo('name'); ?> </title>
        <?php wp_head(); ?>
    </head>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <body>

<div class="wrapper">
    <div class="header">
        <div class="slider">
            <p>Konten slider / header</p>
        </div>
        <div class="navigation">
            <?php wp_nav_menu( array( 'themes_location' => 'menu-utama' ) ) ?>
        </div>
    </div>