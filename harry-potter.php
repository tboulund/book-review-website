<?php
/*
Template Name: Harry Potter
*/
?>

<?php get_header() ?>

    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <div style="color: white; background-image: url(<?php echo get_template_directory_uri() ?>/images/magic.jpg); background-size: cover; height: 150px;">
                <h1><?php the_title() ?></h1>
            </div>
            <?php get_template_part("template-parts/books/body") ?>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer() ?>