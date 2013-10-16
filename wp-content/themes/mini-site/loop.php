<?php if (have_posts()) : ?>

<div class="container">

  <div class="jumbotron title">
    <div class="container">
      <h1>Bienvenue sur le site vitrine d'Illustr'&Vous</h1>
      <h2>réalisé par Cloé Perrotin !</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, doloremque, ratione, accusamus ullam molestiae at eius obcaecati dolor libero eligendi totam consequatur magni distinctio aut sapiente repudiandae ducimus alias necessitatibus.</p>
      <p><a class="btn btn-primary btn-lg">Pour en savoir +</a></p>
    </div>
  </div>

  <!--ici la grande colonne 1 -->
  <div class="row">
  <div class="col-md-9">

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