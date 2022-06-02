<?php get_template_part( 'partials/document-open' ); ?>

<header class="py-4 shadow-sm border-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 d-flex justify-content-between align-items-center">
        <span class="logo"><?php bloginfo('title'); ?></span>
        <nav>
          <div class="dropdown">
            <?php
            $languages = pll_the_languages(array('raw' => 1));
            $current = array_filter($languages, create_function('$v', 'return (bool) $v["current_lang"];'));
            $current = reset($current);
            ?>
            <button class="btn btn-outline-secondary dropdown-toggle" style="border: none" type="button" id="dropdownSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="<?php echo $current['flag'] ?>" alt="<?php echo $current['name']; ?>" width="16" height="11" class="mr-1">
              <?php echo $current['locale']; ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownSwitcher">
              <?php
                foreach ($languages as $lang) {
                  if ( $lang['slug'] != $current['slug'] ) {
                    echo '<li>
                      <a href="' . $lang['url'] . '" class="dropdown-item">
                        <img src="' . $lang['flag'] . '" alt="' . $lang['name'] . '" width="16" height="11" class="mr-1"> ' 
                        . $lang['name'] . ' ('. $lang['locale'] . ')' .
                      '</a>
                    </li>';
                  }
                }
              ?>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>