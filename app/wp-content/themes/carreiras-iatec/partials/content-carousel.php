<?php 
$rows = get_field('partners');
if( $rows ): 

  $data = array(); $i = 0;
  foreach( $rows as $row ) {
    if( !empty($data[$i]) && count($data[$i]) < 6 ){
      $data[$i][] = $row;
    }else{
      $i++;
      $data[$i][] = $row;
    }
  }
  ?>
  <section class="col-md-12 pb-5 mt-5">
    <p class="carousel-section-title">
      <?php _e("Grandes empresas confiam em nós", 'iatec') ?>
    </p>

    <div
      id="partners-carousel-indicators"
      class="carousel slide carousel-dark mb-5"
      data-bs-ride="true"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#partners-carousel-indicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#partners-carousel-indicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
      </div>
      <div class="carousel-inner">
        <?php $z = 0;
        foreach( $data as $item ): ?>
          <div class="carousel-item <?php if($z == 0) echo "active"; ?>">
            <div class="d-flex flex-wrap gap-3 py-3">
              <?php foreach( $item as $row ): ?>
                <a href="<?php echo $row['link']; ?>" class="carousel-link shadow-sm">
                  <img src="<?php echo $row['logo']; ?>" />
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php $z++;
        endforeach; ?>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#partners-carousel-indicators"
        data-bs-slide="prev"
      >
        <span
          class="carousel-control-prev-icon"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#partners-carousel-indicators"
        data-bs-slide="next"
      >
        <span
          class="carousel-control-next-icon"
          aria-hidden="true"
        ></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </section>

<?php endif; ?>  