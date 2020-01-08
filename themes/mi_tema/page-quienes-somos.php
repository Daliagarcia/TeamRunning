<?php get_header() ?>
	<?php the_post() ?>

  <main class="sectionAboutUs mt-5 py-5">
        <div class="container">
          <div class="sectionAboutUs__sneaker text-center mt-5">
          <?php get_template_part('_includes/main', 'section') ?>
          </div>
          <div class="sectionAboutUs__content">
            <h2 class="sectionAboutUs__title text-center mt-5 mb-5">Quienes Somos?</h2>
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/fondo.jpg" alt="pizza" class="img-fluid">
            <p>Somos un team de Running ubicado en Santiago de Chile y tenemos como objetivo motivar y preparar a personas para dar sus inicios en el deporte del running y correr desde 10 KM hasta una Maratón.</p>
            <p>Somos un equipo de corredores de Santiago enfocado en distancias de Maratón, Media Maratón y 10K, liderado por Raul Mora, profesor de Educación Física y deportista de alto rendimiento con experiencia en el deporte.</p>
            <p>Nuestra misión es motivar y enseñar a los corredores la importancia del entrenamiento guiado, mediante un plan especial y no dejando nada al azar, cambiando la mentalidad del atleta y trabajando activamente para alcanzar los objetivos.</p>
            <p>Team Mora nace gracia a su líder Raul Mora y con el auspicio de Under Armour en el año 2016 y a la fecha ha preparado a muchas personas en distintos objetivos del running.
            Nuestro Team, participan activamente en competencias de running, trail, Climbing y trekking, y en prácticamente todo el calendario de actividades realizadas en Santiago, así como en aquellas de mayor relevancia a nivel nacional destacando entre ellas: Maratón de Santiago, Maratón Costa Pacifico, Maratón de Viña del Mar y Media Maratón TPS, a nivel internacional se cuentan el Maratón de Buenos Aires, Lima y de Río de Janeiro.</p>
          </div>
        </div>

      </main>

  <?php get_footer() ?>
