<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    <main class="container-fluid">
      <div class="row">
        <section class="col-lg-6 py-5 d-flex flex-column align-items-end">
          <h1><?php _e('Te ajudamos a encontrar a oportunidade perfeita pra você', 'iatec') ?></h1>
          <p class="lead">
            <?php _e('Em breve você poderá se candidatar a vagas de emprego e participar de processos seletivos humanizados, sem essa de ficar sem feedback no final ta ?', 'iatec') ?>
          </p>

          <div class="mt-5">
            <h3><?php _e('Quer ser o primeiro a ficar sabendo quando o portal estiver no ar ?', 'iatec') ?></h3>
            <?php acfe_form(get_field('form-name')); ?>
            <p>
              <?php _e('Ao se inscrever você concorda com os', 'iatec'); ?>
              <a href="#" data-bs-toggle="modal" data-bs-target="#terms-of-use">
                <?php _e('termos de uso', 'iatec'); ?></a>.
            </p>
          </div>

        </section>
        <aside class="col-lg-6 d-flex justify-content-center align-items-center">
          <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/graphic.svg' ?>" class="graphic" alt="Graphic" />
        </aside>

        <?php // get_template_part( 'partials/content-carousel' ); ?>

      </div>
    </main>

    <?php get_template_part( 'partials/content-modal' ); ?>

  <?php endwhile; ?>

<?php get_footer(); ?>