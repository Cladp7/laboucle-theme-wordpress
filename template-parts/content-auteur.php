<article class="article-card">

    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('card-thumbnail'); ?></a>

    <div class="card-body">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_terms( get_the_ID(), 'domaine', '', ', ' ); ?>
        <?php the_excerpt(); ?>
        <a class="btn" href="<?php the_permalink(); ?>">Voir la fiche</a>
    </div>

</article>
