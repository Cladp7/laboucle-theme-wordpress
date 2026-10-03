<?php get_header(); ?>

<main class="container">

    <h1 class="page-title">Catégorie : <?php echo esc_html( single_cat_title( '', false ) ); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'card'); ?>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
