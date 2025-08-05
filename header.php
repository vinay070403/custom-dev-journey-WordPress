<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">Blogs</a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
                <li><a href="<?php echo site_url('/blogs'); ?>">Blogs</a></li>
                <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
                <li><a href="<?php echo site_url('/adding-new'); ?>">Add New</a></li>
            </ul>
        </nav>
    </div>
</header>
