<?php get_header() ?>
<main class="sectionMainBlog py-5">
	<?php get_template_part('_includes/main', 'section') ?>
	<section class="container my-5 sectionMainBlog__entradas">

		<?php if (have_posts()) { ?>
			<h2 class="text-center mb-5">Buscando: <?php echo esc_html( get_search_query( false ) ); ?></h2>

			<?php while ( have_posts() ) { the_post(); ?>
				<article class="my-5">
					<div class="row">
						<div class="col-md-4 mb-3">
							<?php the_post_thumbnail('blog-square', array('class' => 'img-fluid'));?>
						</div>
						<div class="col-md-8">
							<div class="text-center my-3">
								<p><i class="fas fa-calendar-alt"></i> <time datetime="<?php
								the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
								<h3><?php the_title() ?></h3>
								<h4><?php the_category(' '); ?></h4>
							</div>
							<?php the_excerpt() ?>
							<p><?php the_tags( '<span class="text-warning">#</span>', ' <span
				         class="text-warning">#</span>', '' ); ?></p>
							<p class="text-right"><a href="<?php the_permalink() ?>" class="btn
								btn-outline-warning">Ver entrada</a></p>
							</div>
						</div>
					</article>
				<?php }; ?>

			<?php } else { ?>
				<!-- Content -->
				<h2 class="text-center mb-5">No hay elementos</h2>
			<?php } wp_reset_query(); ?>
		</section>
	</main>
	<?php get_footer() ?>
