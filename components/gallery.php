<div class="container" id="gallery">
  <div class="row">
    <div class="col-12 text-center">
      <h1>
        GALER&Iacute;A
      </h1>
      <p>Conoce las cosas que s&iacute; importan en Mira.</p>
    </div>
  </div>
  <div class="row">
    <ul id="filter-list" class="clearfix controls">
      <button class="filter waves-effect waves-light" data-filter="all">Todo</button>
      <span>/</span>
      <button class="filter waves-effect waves-light" data-filter=".c_apartamento">Apartamentos</button>
      <span>/</span>
      <button class="filter waves-effect waves-light" data-filter=".c_edificio">Edificio</button>
      <span>/</span>
      <button class="filter waves-effect waves-light" data-filter=".c_espacio">Espacios que importan</button>
    </ul>
  </div>
  <div class="row items">
    <?php
      $dir = opendir("public/images/gallery");
      $itemno = -1;
      while ($file = readdir($dir)){
        if (!is_dir($file)){
          if (strpos($file, '.apartamento.') !== false) {
            ?>
              <div class="col-6 col-md-4 text-center mix c_apartamento" data-order="<?= $itemno ?>">
                <img class="openpopup" src="public/images/gallery/<?= $file ?>" data-item="<?= $itemno ?>">
              </div>
            <?php
          }
          if (strpos($file, '.edificio.') !== false) {
            ?>
              <div class="col-6 col-md-4 text-center mix c_edificio" data-order="<?= $itemno ?>">
                <img class="openpopup" src="public/images/gallery/<?= $file ?>" data-item="<?= $itemno ?>">
              </div>
            <?php
          }
          if (strpos($file, '.espacio.') !== false) {
            ?>
              <div class="col-6 col-md-4 text-center mix c_espacio" data-order="<?= $itemno ?>">
                <img class="openpopup" src="public/images/gallery/<?= $file ?>" data-item="<?= $itemno ?>">
              </div>
            <?php
          }
        }
        $itemno++;
      }
    ?>
  </div>
</div>
<div class="gallpopup">
  <button class='gallclose'>
    X
  </button>
  <button class='gallprev'>
    <
  </button>
  <img src=''>
  <input type="number" hidden value="" id="currentopengall">
  <button class='gallnext'>
    >
  </button>
</div>
