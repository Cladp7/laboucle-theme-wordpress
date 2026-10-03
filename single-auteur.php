<?php get_header(); ?>

<main class="container single-article">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_post_thumbnail('large'); ?>

        <h1><?php the_title(); ?></h1>

        <p class="domaines"><?php the_terms( get_the_ID(), 'domaine', 'Domaine : ', ', ' ); ?></p>

        <div class="content">
            <?php the_content(); ?>
        </div>

        <nav class="post-navigation">
            <?php previous_post_link( '%link', '← Auteur précédent' ); ?>
            <?php next_post_link( '%link', 'Auteur suivant →' ); ?>
        </nav>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
