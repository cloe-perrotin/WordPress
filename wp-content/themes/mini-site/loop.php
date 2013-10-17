<?php if (have_posts()) : ?>

<div class="container">
  <div class="jumbotron title">
    <div class="container">
      <h1>Bienvenue sur le site vitrine d'Illustr'&Vous</h1>
      <h2>réalisé par Cloé Perrotin !</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, doloremque, ratione, accusamus ullam molestiae at eius obcaecati dolor libero eligendi totam consequatur magni distinctio aut sapiente repudiandae ducimus alias necessitatibus.</p>
      <p><a class="btn btn-default btn-lg">Pour en savoir +</a></p>
    </div>
  </div>


  <!--ici la grande colonne 1 -->
  <div class="row">
  <div class="col-md-9">

  <ul class="media-list">
  <li class="media">

  <?php while (have_posts()) : the_post(); ?>
    <div <?php post_class(); ?>>
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
      <p class="post-info">
        Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
      </p>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>

  </li>
  </ul>


  <!-- liste articles avec miniatures -->
  <div class="row">
  <div class="col-md-9"
  <div class="entry"> <!-- Conteneur --> 
    <?php query_posts('cat=0&showposts=4'); while (have_posts()) : the_post(); // début de la boucle ?>
    <div class="articles"><!-- Articles -->
    <div class="thumbs"><?php echo get_the_post_thumbnail($post->ID, 'homepage-thumb'); // affichage de la miniature ?></div>
    <h2 class="title"><?php the_title(); // affichage du titre?></h2>
    <?php the_excerpt(); // affichage de l'extrait ?>
    </div> <!-- Articles fin -->
    <div class="separateur"></div><!-- Séparateur -->
    <?php endwhile; // fin de la boucle ?>
  </div><!-- Conteneur fin -->
  </div>
  </div>

  <!-- petite mise en avant miniatures réalisations -->
  <div class="row">
  <div class="col-md-9">
    <div class="thumbnail col-md-3">
      <img data-src="holder.js/300x200" alt="...">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
        </div>
    </div>
    <div class="thumbnail col-md-3">
      <img data-src="holder.js/300x200" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
      </div>
    </div>
    <div class="thumbnail col-md-3">
      <img data-src="holder.js/300x200" alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary">Button</a> <a href="#" class="btn btn-default">Button</a></p>
      </div>
    </div>
  </div>
</div>
</div>