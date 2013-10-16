 <!--ici la petite colonne 2 -->
<div class="row">
<div class="col-md-3">

<div class="side">
  <h3>Outils</h3>
  <!-- Bouton RSS -->
  <a href="<?php bloginfo('rss2_url'); ?>">S'abonner au flux RSS</a>
  <!-- Formulaire de recherche -->
  <?php get_search_form(); ?>
  <!-- Archives -->
  <ul class="list">
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
</div>

<!-- Derniers articles -->
<h4 class="section">Derniers articles</h4>
<ul class="list">
  <?php wp_reset_postdata();
  query_posts('posts_per_page=5');
  while (have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; ?>
</ul>

<!-- Les widgets de "base/plugin" à wordpress (diff. de ceux que je pourrais créer) -->
<div class="side">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
    <!-- Partie qui s'affichera uniquement si les Widgets ne sont pas disponibles -->
    <!-- Mais qui affichera les Widgets si ils sont disponibles -->
  <?php endif; ?>
</div>
</div>

</div>
    </div>
  </div>
</div>
</div>