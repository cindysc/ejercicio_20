<?php get_header() ?>

  <?php the_post() ?>

  <div class="container">
  	<h2><?php the_title() ?></h2>
  	<p><?php the_content() ?></p>
  	<a href="#" class="btn btn-primary btn-large">Ver todos los proyectos</a>
  </div>

<?php get_footer() ?>
