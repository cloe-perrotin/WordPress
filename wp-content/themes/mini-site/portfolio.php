<?php
/*
Template Name: Galerie Graphisme
*/
?>
<?php get_header(); ?>
<div class="main projects">
  <?php wp_reset_postdata(); ?>
  <?php query_posts('posts_per_page=-1&post_type=projet'); ?>
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="project">
        <h3 class="project-name"><?php the_title(); ?></h3>
        <p class="project-description"><?php the_excerpt(); ?></p>
        <?php the_post_thumbnail(); ?>
        <?php echo get_the_term_list( $post->ID, 'type', '<p>Type de projet : ', ', ', '</p>' ) ?>
        <?php echo get_the_term_list( $post->ID, 'couleur', '<p>Couleurs : ', ', ', '</p>' ) ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>