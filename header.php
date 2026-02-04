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
      <?php the_custom_logo(); ?>
    </div>

    <button class="menu-toggle">☰</button>

    <?php
    wp_nav_menu([
        'theme_location' => 'primary-menu',
        'menu_class' => 'nav-menu'
    ]);
    ?>
  </div>
</header>
