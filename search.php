<?php get_header(); ?>

<main class="container">

    <h1 class="page-title">Résultats pour : <?php echo esc_html( get_search_query() ); ?></h1>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content', 'card'); ?>

    <?php endwhile; else : ?>

        <p>Aucun résultat trouvé.</p>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
