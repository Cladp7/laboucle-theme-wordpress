<h1><?php the_title(); ?></h1>
<p class="meta">Publié le <?php echo esc_html( get_the_date() ); ?></p>
<?php the_category(); ?>
<?php the_post_thumbnail('large'); ?>
<div class="content">
    <?php the_content(); ?>
</div>

<?php
$note = get_post_meta( get_the_ID(), 'note', true );
$avis = get_post_meta( get_the_ID(), 'avis', true );
?>
<p class="note">Note : <?php echo esc_html( $note ); ?>/10</p>
<p class="avis">Avis : <?php echo esc_html( $avis ); ?></p>
