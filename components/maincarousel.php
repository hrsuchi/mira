<div class="container-fluid">
  <div class="row">

  <div id="main_carousel" class="carousel slide" data-ride="carousel">
    <!-- The slideshow -->
    <div class="carousel-inner">
      <?php
        $dir = opendir("public/sliders/main");
        $active = 1;
        $itemno = 1;
        while ($file = readdir($dir)){
          if (!is_dir($file)){
            if($active == 1){
              ?>
                <div class="carousel-item active">
                  <img class="img-fluid" src="public/sliders/main/<?= $file ?>">
                  <a href="#apartamentos" class="btn actionbtn" style="background:#666;">Ver Apartamentos</a>
                </div>
              <?php
              $active = 0;
            }else{
              ?>
                <div class="carousel-item">
                  <img class="img-fluid" src="public/sliders/main/<?= $file ?>">
                  <?php if($itemno == 2){ ?>
                    <a href="#contacto" class="btn actionbtn">Haz tu cita</a>
                  <?php } ?>
                  <?php if($itemno == 3){ ?>
                    <a href="#edificio" class="btn actionbtn">Mas Informaci&oacute;n</a>
                  <?php } ?>
                  <?php if($itemno == 4){ ?>
                    <a href="#edificio" class="btn actionbtn">Mas Informaci&oacute;n</a>
                  <?php } ?>
                </div>
              <?php
            }
            $itemno++;
          }
        }
      ?>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#main_carousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#main_carousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

  </div>
</div>
</div>
