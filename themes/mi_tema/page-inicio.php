<?php get_header() ?>

<header class="HeaderSection pt-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info.png" alt="pizza" class="img-fluid HeaderSection__image">
      </div>
      <div class="col-md-6">
         <h1 class="pb-5 mt-5 text-center HeaderSection__title">QUIENES SOMOS?</h1>
         <p class="HeaderSection__text">Somos un team de Running ubicado en Santiago de Chile y tenemos como objetivo motivar y preparar a personas
           para dar sus inicios en el deporte del running y correr desde 10 KM hasta una Maratón.
           Somos un equipo de corredores de Santiago enfocado en distancias de Maratón, Media Maratón y
            10K, liderado por Raul Mora, profesor de Educación Física y deportista de alto rendimiento con
            experiencia en el deporte.</p>

         <a href="about-us.html" class="btn rounded-0 HeaderSection__buttons mr-3 mt-5">Ver detalle</a>
      </div>
    </div>
  </div>
</header>

<section class="section-carousel d-none d-sm-block py-5">
  <div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators mb-n5">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider11.jpg" class="d-block w-100" alt="slider1">
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider12.jpg" class="d-block w-100" alt="slider2">
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider13.jpg" class="d-block w-100" alt="slider3">
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider14.jpg" class="d-block w-100" alt="slider4">
          </div>
        </div>

      </div>

      <div class="carousel-item">
        <div class="row">
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider15.jpg" class="d-block w-100" alt="slider5">
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider16.jpg" class="d-block w-100" alt="slider6">
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider17.jpg" class="d-block w-100" alt="slider7">
          </div>
          <div class="col-md-3">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/slider18.jpg" class="d-block w-100" alt="slider8">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="SectionBlog py-5">
      <div class="container">
        <h2 class="text-center mb-3 SectionBlog__title">Blog</h2>
        <div class="card-deck">

          <?php $arg = array(
       'post_type' => 'post',
       'posts_per_page' => 3
       );
       $get_arg = new WP_Query( $arg );
      while ( $get_arg->have_posts() ) {
      $get_arg->the_post();
       ?>

          <div class="card border-0 rounded-0">
            <?php the_post_thumbnail('blog-square', array('class' => 'w-100 hauto'));?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title() ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn rounded-0 btn-outline-warning">Ver entrada</a>
            </div>
          </div>
       <?php } wp_reset_postdata(); ?>
        </div>

        <div class="SectionBlog__link text-center">
          <a href="<?php echo get_the_permalink( $post = 6, $leavename = false );?>" class="btn rounded-0 btn-warning btn-lg mt-5">Visita el blog</a>
        </div>
      </div>
    </section>

<section class="sectionEntrenamiento py-5">
  <article class="container mb-5">
    <div class="row">
      <div class="col-12 col-md-6 pt-5">
<svg class="sectionEntrenamiento__sneaker" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512.1 512.1" width="300" height="300"><path d="M334.2 421.6c30.5-36.5 75.6-44.7 116.5-64.2 8.7-4.2 2.3-17.7-6.4-13.5 -43.1 20.5-89.4 29.6-121.6 68.1 -31.5 37.7-80.8 67.7-125.4 76.3 -43.3 8.3-103.4 14.4-146.2-3.3 87.7 14.3 180.3-17.5 243.8-78.6 30.7-29.6 65.2-51.8 102.8-71.2 28.4-14.6 50.1-34.3 62.7-56.9 8.2-14.7 12-29.7 11.5-44.4 7.4 4.9 15.6 11.9 19.7 20 9.5 19 9.1 48.1-20.3 73 -7.4 6.3 2.4 17.7 9.7 11.4 29.7-25.2 39.1-60.9 24-91.2 -8.6-17.3-28.5-28.5-36.3-32.4 -0.8-2.6-1.7-5.2-2.8-7.8 -11.1-26.2-59.6-62.6-98.4-88.5 -11-7.4-24.5-8.8-36.3-4.8L256.7 3.3c-5.4-8-17.8 0.4-12.4 8.4l73.6 109.4c-14.1 11.6-23.6 28.7-36.5 41.7 -11.7 11.8-25.5 20.5-42.1 23.7 -1.2-17.4-6.8-42.1-28.3-43.1L115.7 3.3c-5.4-8-17.8 0.5-12.4 8.4l93.3 136.9c-7.1 6.5-11.9 19-15.7 39.7 -1.7 9.5 13.1 12.2 14.8 2.6 1.3-7.4 4.4-35.3 17.2-32.3 8.5 2 12 22.8 11.7 36.2 0 0 0 0.1 0 0.1 0 0 0 0.1 0 0.1 0.2 35.5-4.7 86.5-29 128 -14.4 24.5-29 34.3-29.3 34.5 -0.9 0.6-1.7 1.4-2.3 2.3 -22 13.7-41 16.1-53.9 15.3 0.1 0 0.2-0.1 0.3-0.1 11.1-5.4 21.4-13.5 30.7-24.1l11.3 5.2c8.8 4 15.1-9.6 6.3-13.6l-8.1-3.7c6.2-8.8 11.4-18.3 15.9-28l16.2 5.7c9.1 3.2 14.1-11 4.9-14.2l-15.2-5.3c3.9-9.8 7.3-20.3 10.3-31.4l16.7 4.5c9.2 2.5 13.3-12 3.9-14.5l-17.1-4.6c2-8.9 3.7-18.1 5-27.5 1.4-9.6-13.4-11.7-14.8-2.2 -5.4 37.4-15.8 76.4-37.6 107.9 -22.5 32.5-60.7 43.4-93.6 62.7C18.5 407.6-5.4 426.1 1.1 454.1c4.9 21.3 20.4 34 40.6 43.2 48.6 21.9 107.7 15.5 158.4 5.7C247.9 493.8 300.6 461.9 334.2 421.6zM452 212.8c7.8 18.5 6.2 38.6-4.8 58.2 -10.6 19-29.7 36.5-53.9 49.5 -22.5-64.4-15.3-146.7-12-174.1C420.5 174.3 445.8 198 452 212.8zM312.2 150.2c3.9-4.7 7.9-9.6 12.1-14.5 8.7-10.1 23.7-12.1 34.8-4.7 1.7 1.1 3.4 2.3 5.1 3.4 1 4.6 3.6 21.3-8.3 38.7 -17.2 25.1-57.6 40.9-116.9 45.8 0.4-6 0.6-11.8 0.6-17.3C274.8 195.8 293 173.6 312.2 150.2zM237.7 234c0 0 0.1 0 0.1 0 60.9-4.7 103-20.1 125.1-45.7 -1.6 39 0.3 92.6 16.9 138.7 0.1 0.2 0.1 0.3 0.2 0.4 -8.4 4.5-16.3 8.8-23.8 13.3 -17.1-11.5-46.5-22.1-94.7-15.8 -19.9 2.6-40.4 8-58.9 15.1 1.8-2.6 3.6-5.4 5.4-8.4C226.3 300.9 234.5 265.4 237.7 234zM52.8 404.8c10.2-6 22.4-12.4 35.4-18.9 4 1.5 13.4 4.3 26.5 4.3 15.7 0 36.8-4.1 60.3-19.6 40.2-26.5 121-45.5 166.8-21 -19.3 12.5-37.1 26.5-57.3 46 -43.6 42-99.8 68.8-158.2 75.3 -57 6.4-106.6-2.6-110.6-20.1C12.2 435.5 22.6 422.6 52.8 404.8z"/><path d="M318.5 35.5h142c9.7 0 9.7-15 0-15h-142C308.8 20.5 308.8 35.5 318.5 35.5z"/><path d="M420 96c0 4.1 3.4 7.5 7.5 7.5h77c9.7 0 9.7-15 0-15h-77C423.4 88.5 420 91.8 420 96z"/><path d="M504.5 413.5h-77c-9.7 0-9.7 15 0 15h77C514.2 428.5 514.2 413.5 504.5 413.5z"/><path d="M349.5 476.3c0 0 0 0 0 0l-41.5 0.2c-9.5 0-9.5 15 0.1 15l41.5-0.2C359.2 491.3 359.2 476.3 349.5 476.3z"/><path d="M478.8 476.2c0 0 0 0 0 0l-90.7 0.3c-9.5 0-9.5 15 0 15l90.7-0.3C488.5 491.2 488.5 476.2 478.8 476.2z"/></svg>

  </div>
  <div class="sectionEntrenamiento__description col-12 col-md-6 pt-5 text-left my-5">
  <a href="entrenamiento.html" class="btn rounded-0 sectionEntrenamiento__btn mr-3 mt-5">Ven a entrenar</a>
  </div>
  </div>
  </article>
</section>


<?php get_footer() ?>
