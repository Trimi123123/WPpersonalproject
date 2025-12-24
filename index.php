<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php get_header(); ?>

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

<?php get_footer(); ?>

