<div
  class="modal fade modal-fullscreen-lg-down"
  id="terms-of-use"
  tabindex="-1"
  aria-labelledby="modal-label"
  aria-hidden="true"
>
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-label"><?php _e('Termos de Uso', 'iatec' ); ?></h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Fechar"
        ></button>
      </div>
      <div class="modal-body">
        <?php the_field('terms') ?>
      </div>
    </div>
  </div>
</div>