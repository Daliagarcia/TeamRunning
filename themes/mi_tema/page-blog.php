<?php get_header() ?>
<?php the_post() ?>

<main class="sectionMainBlog py-5">
	<?php get_template_part('_includes/main', 'section') ?>
	<section class="container my-5 sectionMainBlog__entradas">
		<h2 class="text-center mb-5">Últimas Entradas</h2>
		<?php $arg = array(
			'post_type'		 => 'post',
			'category_name'	 => '',
			'posts_per_page' => 3,
			'paged'			 => $paged
		);

		$get_arg = new WP_Query( $arg );

		while ( $get_arg->have_posts() ) {
			$get_arg->the_post();
			?>

			<article class="my-5">
				<div class="text-center my-3">
					<p><i class="fas fa-calendar-alt"></i> <time datetime="<?php
					the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
					<h3><?php the_title() ?></h3>
					<h4><?php the_category(' '); ?></h4>
				</div>
				<div class="row">
					<div class="col-md-4 mb-3">
						<?php the_post_thumbnail('blog-square', array('class' => 'img-fluid'));
						?>
					</div>
					<div class="col-md-8">
						<?php the_excerpt() ?>
						<p><?php the_tags( '<span class="text-warning">#</span>', ' <span
			         class="text-warning">#</span>', '' ); ?></p>
						<p class="text-right"><a href="<?php the_permalink() ?>" class="btn
							btn-outline-warning">Ver entrada</a></p>
						</div>
					</div>
				</article>

			<?php } wp_reset_postdata(); ?>

			<?php the_pagination( $get_arg ); ?>
		</section>

	</main>

	<?php get_footer() ?>
