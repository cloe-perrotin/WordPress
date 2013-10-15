<?php
	add_theme_support( 'post-thumbnails' );

	add_action('init', 'my_custom_init');
		function my_custom_init()
		{
		/* notre code PHP pour rajouter les custom post type */
	}
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

?>