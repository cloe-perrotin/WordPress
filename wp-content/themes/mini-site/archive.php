<?php get_header(); ?>
<h1>archive tous les anciens posts</h1>
<div class="main">
  <?php query_posts('posts_per_page=20'); ?>
  <?php get_template_part('loop'); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>