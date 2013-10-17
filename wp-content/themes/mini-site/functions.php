<?php
	// Déclaration de la prise en charge des miniatures dans le thème
	add_theme_support( 'post-thumbnails' );

	// déclaration de la function pour redimentioner les miniatures 
	if ( function_exists( 'add_image_size' ) ) {
		add_image_size( 'homepage-thumb', 220, 120, true ); //(Image recadrée)
	}
	// Cette fonction change la longueur de l'extrait de l'article
	function custom_excerpt_length( $length ) {
		return 120; // Modifier 15 pour changer la longueur de l'extrait
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	// Cette fonction personalise le lien permanent vers l'article 
	function new_excerpt_more($more) {
		global $post;
		return '<a class="read-more" href="'. get_permalink($post->ID) . '">Lire la suite...</a>'; // Ligne a modifier
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	// pour afficher une image à la une dans les posts, les pages et le portfolio
	add_action('after_theme_setup','gkp_add_post_thumbnail');
		function gkp_add_post_thumbnail() {
		add_theme_support( 'post-thumbnails', array( 'post', 'page', 'portfolio' ) );
	}


	// partie php pour custom perso mini-site
	add_action('init', 'my_custom_init');
		function my_custom_init()
		{
		/* notre code PHP pour rajouter les custom post type */
		register_post_type('projet', array(
	  'label' => __('Projets'),
	  'singular_label' => __('Projet'),
	  'public' => true,
	  'show_ui' => true,
	  'capability_type' => 'post',
	  'hierarchical' => false,
	  'supports' => array('title', 'excerpt', 'thumbnail')
	));

	register_taxonomy( 'type', 'projet', array( 'hierarchical' => true, 'label' => 'Type', 'query_var' => true, 'rewrite' => true ) );  
	register_taxonomy( 'couleur', 'projet', array( 'hierarchical' => false, 'label' => 'Couleur', 'query_var' => true, 'rewrite' => true ) );
	}
	if ( function_exists('register_sidebar') )
		echo $s;
    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="section">',
        'after_title' => '</h4>',
    ));

	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
		$format = get_post_format();
		get_template_part( 'format', $format );

?>