<?php get_header(); ?>
	<div class="main">
  		<?php if (have_posts()) : ?>
    	<?php while (have_posts()) : the_post(); ?>
      		<div class="project">
        	<h3 class="project-name"><?php the_title(); ?></h3>
        	<p class="project-description"><?php the_excerpt(); ?></p>
        	<?php the_post_thumbnail('thumbnail'); ?>
      		</div>
    	<?php endwhile; ?>
  		<?php endif; ?>
	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>