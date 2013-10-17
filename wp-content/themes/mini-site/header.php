<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <meta name="keywords" content="Illustrations, Dessins, Cadeaux, Conception de sites, Sites, Créations graphiques, Graphismes" />
    <meta name="generator" content="Wordpress, smartgithg, Github, Photoshop, Illustrator">
    <link href="wp-content/themes/mini-site/style.css" rel="stylesheet" media="screen">
    <!-- Bootstrap -->
    <link href="wp-content/themes/mini-site/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <?php wp_head(); ?>
  </head>
  <body id="#" <?php body_class(); ?>>

  <div class="wrap">
      <header>
        <nav class="navbar navbar-default" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mini-site vitrine d'Illustr'&Vous</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Présentation</a></li>
              <li><a href="#">Quelques réalisations</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos Services<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><a href="#">Intégration WEB</a></li>
              <li><a href="#">Webdesign</a></li>
              <li><a href="#">Print</a></li>
              <li><a href="#">Illustrations</a></li>
              </ul>
              </li>
            </ul>
            <p class="navbar-text pull-right"><a href="#" class="navbar-link">CV de Cloé Perrotin</a></p>

          </div><!-- /.navbar-collapse -->
        </nav>
      </header>
  </div>