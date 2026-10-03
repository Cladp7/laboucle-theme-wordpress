<?php get_header(); ?>

<main class="container">

    <h1 class="page-title"><?php the_archive_title(); ?></h1>

    <div class="archive-desc"><?php the_archive_description(); ?></div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'card'); ?>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
