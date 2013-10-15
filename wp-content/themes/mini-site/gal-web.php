<?php get_header(); ?>
<h1>coucou</h1>
<div class="main">
  <h1>Catégorie : <?php single_cat_title(); ?></h1>
  <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
