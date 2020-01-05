<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
<main class="SectionMainPlantilla py-5">
	<article class="mb-5 container py-5 my-5">
		<div class="text-center my-3">
			<p><i class="fas fa-calendar-alt"></i> <time
					datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?>
				</time></p>
				<h2><?php the_title() ?></h2>
				<?php the_post_thumbnail('detail', array('class'
				=> 'w-100 h-auto my-4')); ?>
				<h4><?php the_category(' '); ?></h4>
</div>

<div class="SectionMainPlantilla__content">
   <?php the_content() ?>
	</div>

	<div class="text-center mb-5">
        <a href="blog.html" class="btn btn-warning btn-lg mt-5">Volver al Blog</a>
      </div>
</article>
</main>
	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_footer() ?>
