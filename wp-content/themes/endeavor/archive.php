<?php get_header(); ?>

<main class="container">

  <div class="row">
    <div class="col-md-8">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

         <?php get_template_part('content'); ?>

        <?php endwhile; ?>
        <?php else : ?>
          <p> <?php __('No hay posts en el blog'); ?> </p>
        <?php endif; ?>

      <!-- /.blog-post -->

    </div>


  </div><!-- /.row -->

<?php get_footer(); ?>

