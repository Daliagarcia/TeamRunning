<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
'about' => __( 'Para las imágenes de informacion desplegada en la pagina de inicio' ),
'carousel-images' => __( 'Para las imágenes del carousel superior y las imagenes de entrenamiento' ),
'blog-square' => __( 'Para las imágenes de las entradas desplegadas en la página blog' ),
'detail' => __( 'Para las imágenes de las entradas en su página de detalle' ),
'blog-inicio' => __( 'Para las imágenes de las entradas del blog desplegadas en la pagina inicio' )
 );

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'about', 599, 531, true );
	add_image_size( 'carousel-images', 965, 728, true );
	add_image_size( 'blog-square', 400, 400, true );
	add_image_size( 'detail', 900, 260, true );
	add_image_size( 'blog-inicio', 711, 876, true );		

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
