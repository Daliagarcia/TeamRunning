<?php
// Register Custom Post Type
function direction_post_type() {

	$labels = array(
		'name'                  => _x( 'Directions', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Direction', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Directions', 'text_domain' ),
		'name_admin_bar'        => __( 'Direction', 'text_domain' ),
		'archives'              => __( 'Archivos de direction', 'text_domain' ),
		'attributes'            => __( 'Atributos de direction', 'text_domain' ),
		'parent_item_colon'     => __( 'Direction principal', 'text_domain' ),
		'all_items'             => __( 'Todos los directions', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo direction', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo direction', 'text_domain' ),
		'edit_item'             => __( 'Editar direction', 'text_domain' ),
		'update_item'           => __( 'Actualizar direction', 'text_domain' ),
		'view_item'             => __( 'Ver direction', 'text_domain' ),
		'view_items'            => __( 'Ver directions', 'text_domain' ),
		'search_items'          => __( 'Buscar direction', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el direction', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este direction', 'text_domain' ),
		'items_list'            => __( 'Lista de direction', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegacion de direction', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de directions', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Direction', 'text_domain' ),
		'description'           => __( 'Post dedicado a las direcciones en donde se realizan entrenamientos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'direction', $args );

}
add_action( 'init', 'direction_post_type', 0 );




 ?>
