<?php get_header() ?>
<?php the_post() ?>
<div class="py-5">
		<div class="container text-center">
			<?php get_template_part('_includes/main', 'section') ?>
			<h3 class="text-center">Error 404:</h3>
			<h4 class="text-center">Página no encontrada</h4>
			<p class="text-center my-5"><a href="<?php echo get_the_permalink( $post = 8, $leavename = false );?>" class="btn btn-warning btn-lg">Volver a la página de Inicio</a></p>
		</div>
	</div>

<?php get_footer() ?>
