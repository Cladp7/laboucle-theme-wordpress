<?php get_header(); ?>

<main class="container single-article">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
