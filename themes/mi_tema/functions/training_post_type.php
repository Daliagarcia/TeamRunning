<?php

// Register Custom Post Type
function training_post_type() {

	$labels = array(
		'name'                  => _x( 'Trainings', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Training', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Trainings', 'text_domain' ),
		'name_admin_bar'        => __( 'Training', 'text_domain' ),
		'archives'              => __( 'Archivos de training', 'text_domain' ),
		'attributes'            => __( 'Atributos de training', 'text_domain' ),
		'parent_item_colon'     => __( 'Training principal', 'text_domain' ),
		'all_items'             => __( 'Todos los training', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo training', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo training', 'text_domain' ),
		'edit_item'             => __( 'Editar training', 'text_domain' ),
		'update_item'           => __( 'Actualizar training', 'text_domain' ),
		'view_item'             => __( 'ver training', 'text_domain' ),
		'view_items'            => __( 'ver trainings', 'text_domain' ),
		'search_items'          => __( 'buscar training', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el training', 'text_domain' ),
		'uploaded_to_this_item' => __( 'subido a este training', 'text_domain' ),
		'items_list'            => __( 'Lista de trainings', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegacion de trainings', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de training', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Training', 'text_domain' ),
		'description'           => __( 'Post dedicado a las imágenes de pagina entrenamiento', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'training', $args );

}
add_action( 'init', 'training_post_type', 0 );

?>
