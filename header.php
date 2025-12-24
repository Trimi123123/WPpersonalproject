<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <?php wp_head(); ?>
  <style>
    /* Basic navbar styling for visibility */
    .main-nav .menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }
    .main-nav .menu li {
      display: inline;
    }
    .main-nav .menu li a {
      text-decoration: none;
      color: #333;
      padding: 10px;
      display: block;
    }
    .main-nav .menu li a:hover {
      background-color: #f0f0f081;
    }
    /* Optional: Make header look better */
    header {
      background-color:linear-gradient(135deg, #3b82f6, #8ed1fc);
      padding: 20px 0;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }
  </style>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <nav class="main-nav">
      <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => 'menu',
      ]);
      ?>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container">
    <h2>Welcome to MeroCode</h2>
    <p>Building clean, fast, and modern WordPress themes.</p>
  </div>
</section>