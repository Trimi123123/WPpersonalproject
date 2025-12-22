<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
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

<main class="content">
    <div class="container posts-wrapper">

        <?php if ( have_posts() ) : ?>
            <?php $count = 0; ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php $count++; ?>
                <article class="post post-<?php echo $count; ?>">
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>

    </div>
</main>

<footer>
    <div class="container">
        <p>© <?php echo date('Y'); ?> MeroCode. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
