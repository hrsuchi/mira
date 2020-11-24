<div class="container-fluid" id="apartamentos">
  <div class="row">
    <div class="col-12 text-center">
      <br><br>
      <h1>Tipos de Apartamentos</h1>
    </div>
  </div>
  <!--citar-->
    <div class="citar_popup">
      <div class="close_citar_popup">
        <p>x</p>
      </div>
      <div class="col-12">
        <div class="row">
          <div class="col-12 text-center">
            <img id="image" src="public/images/agendamosunacita.png">
          </div>
          <form action="" id="formcitar" class="col-12">
            <div class="row">
              <input type="text" name="nombre" class="form-control" required placeholder="*Nombre y apellido">
              <input type="email" name="email" class="form-control" required placeholder="*Email">
              <input type="tel" name="tel" class="form-control" required placeholder="*Tel&eacute;fono">
              <select class="form-control" name="forma">
                <option disabled selected>
                  Selecciona tu forma favorita
                </option>
                <option value="sanmartin">
                  Elige tu San Martin M&aacute;s cercano
                </option>
                <option value="showroom">
                  Visita el Showroom
                </option>
                <option value="videollamada">
                  Videollamada
                </option>
              </select>
              <select class="form-control" name="sanmartin">
                <option disabled selected>
                  Elige una zona
                </option>
                <option value="1">Zona 1</option>
                <option value="5">Zona 5</option>
                <option value="9">Zona 9</option>
                <option value="10">Zona 10</option>
                <option value="11">Zona 11</option>
                <option value="12">Zona 12</option>
                <option value="13">Zona 13</option>
                <option value="14">Zona 14</option>
                <option value="15">Zona 15</option>
                <option value="16">Zona 16</option>
              </select>
              <select name="horario" class="form-control">
                <option disabled selected>
                  Selecciona un horario
                </option>
                <?php
                  for ($i=8; $i < 19; $i++){
                    ?>
                      <option value="<?= $i ?>"><?= $i ?> Hrs</option>
                    <?php
                  }
                ?>
              </select>
              <input type="date" value="<?php echo date('Y-m-d'); ?>" name="fecha" placeholder="Selecciona una fecha" class="form-control">
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" id="submitformcitar">ENVIAR</button>
                <img src="public/images/miraalfuturo.png" width="100%">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <!--/citar-->

  <div class="cotizador">
    <div class="row header">
      <div class="col-12  col-md-4 text-center">
        <img src="public/images/miraalfuturo.png">
      </div>
      <div class="col-12 col-md-4 text-center">
        <h1>
          ¡GRACIAS POR ESCRIBIRNOS!
        </h1>
        <p>Nos puedes compartir los siguientes datos:</p>
      </div>
      <div class="col-12 col-md-4 text-right order-first order-md-last">
        <a id="close">x</a>
      </div>
    </div>
    <div class="row">
      <hr>
    </div>
    <form action="" class="row" id="formcotizador">
      <div class="selections">
        <input hidden type="text" id="rango">
        <input hidden type="text" id="habitaciones">
        <input hidden type="text" id="apartamento">
      </div>
      <div class="col-12 col-md-1"></div>
      <div class="col-12 col-md-10">
        <div class="row" id="userdata">
          <div class="col-12 col-md-4">
            <input type="tel" name="tel" class="form-control" required placeholder="*Tel&eacute;fono">
          </div>
          <div class="col-12 col-md-4">
            <input type="email" name="email" class="form-control" required placeholder="*E-mail">
          </div>
          <div class="col-12 col-md-4">
            <input type="text" name="name" class="form-control" required placeholder="*Nombre y apellido">
          </div>
        </div>
      </div>
      <div class="col-12 col-md-1"></div>
      <div class="col-12" id="filter">
        <div class="row">
          <div class="col-1"></div>
          <div class="col-12 col-md-10">
            <div class="row">
                <div class="col-12 col-md-4" id="filter1">
                  <p class="title">
                    1. SELECCIONA UN RANGO DE CUOTA
                  </p>
                  <div class="stepindicator current" id="one"></div>
                  <div class="content col-12">
                    <div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step1" id="step1-1" value="7000-9000">
                      <label class="form-check-label" for="step1-1">Q7,000 - Q9,000</label>
                    </div>
                    <div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step1" id="step1-2" value="9000-10000">
                      <label class="form-check-label" for="step1-2">Q9,000 - Q10,000</label>
                    </div>
                    <div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step1" id="step1-3" value="10000-12500">
                      <label class="form-check-label" for="step1-3">Q10,000 - Q12,500</label>
                    </div>
                    <!--<div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step1" id="step1-4" value="12000">
                      <label class="form-check-label" for="step1-4">Q12,000 - M&Aacute;S</label>
                    </div>-->
                  </div>
                </div>
                <div class="col-12 col-md-4" id="filter2">
                  <p class="title">
                    2. CANTIDAD DE HABITACIONES
                  </p>
                  <div class="stepindicator" id="two"></div>
                  <div class="content col-12">
                    <div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step2" id="step2-1" value="3">
                      <label class="form-check-label" for="step2-1">3 Habitaciones</label>
                    </div>
                    <div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step2" id="step2-2" value="2">
                      <label class="form-check-label" for="step2-2">2 Habitaciones</label>
                    </div>
                    <div class="form-check form-check-inline col-12">
                      <input class="form-check-input" type="radio" name="step2" id="step2-3" value="1">
                      <label class="form-check-label" for="step2-3">1 Habitacion </label>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4" id="filter3">
                  <p class="title">
                    3. SELECCIONA TU APARTAMENTO
                  </p>
                  <div class="stepindicator" id="three"></div>
                  <div class="content col-12">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-1" value="A">
                      <label class="form-check-label" for="step3-1">Apartamento A</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-2" value="B">
                      <label class="form-check-label" for="step3-2">Apartamento B</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-3" value="C2">
                      <label class="form-check-label" for="step3-3">Apartamento C2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-4" value="C3">
                      <label class="form-check-label" for="step3-4">Apartamento C3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-5" value="D">
                      <label class="form-check-label" for="step3-5">Apartamento D</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-6" value="E">
                      <label class="form-check-label" for="step3-6">Apartamento E</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="step3" id="step3-7" value="G">
                      <label class="form-check-label" for="step3-7">Apartamento G</label>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-1"></div>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="send" name="button">
          Enviar
        </button>
      </div>
    </form>
  </div>
  <div class="slider row regular slider-for">
    <div class="apartment_model col-12" id="A"> <!--A-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="flex">
           <div class="inner"></div>
           <span class="text">Flex</span>
         </div>
         <div class="dot mobil" data-info="banodevisitas">
           <div class="inner"></div>
           <span class="text">Ba&ntilde;o de visitas</span>
         </div>
         <div class="dot mobil" data-info="balcon">
           <div class="inner"></div>
           <span class="text">Balc&oacute;n</span>
         </div>
         <div class="dot mobil" data-info="huerto">
           <div class="inner"></div>
           <span class="text">Huerto</span>
         </div>

         <img class="model" src="public/images/apts/models/01.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>
                  - 7 ventanas
                </br>
                  - 4 fachadas
                </br>
                  - Espacios flexibles para adaptarse a diferentes etapas de vida. Tener 2 habitaciones y crecer a 3. O empezar con 3, y abrir el espacio social al reducirse a 2 habitaciones.
                </br>
                  - Cocina con su propia venta y jardinera para tener un amplio huerto
                </br>
                  - Baño de visita
                </br>
                  - Promedio tamaño de ventana 2 x 2 metros
                </br>
                  - Iluminación completa en todo el apartamento
                </br>
                  - Apartamento de esquina
                </br>
                  - Área social integrada al balcón
                </br>
                  - El apartamento tiene tanto la vista de amanecer hacia la reserva natural como del atardecer con los volcanes.
                </br>
                  <?php
                }else{
                  ?>
                    <ul>
                      <li>
                        7 ventanas
                      </li>
                      <li>
                        4 fachadas
                      </li>
                      <li>
                        Espacios flexibles para adaptarse a diferentes etapas de vida. Tener 2 habitaciones y crecer a 3. O empezar con 3, y abrir el espacio social al reducirse a 2 habitaciones.
                      </li>
                      <li>
                        Cocina con su propia venta y jardinera para tener un amplio huerto
                      </li>
                      <li>
                        Baño de visita
                      </li>
                      <li>
                        Promedio tamaño de ventana 2 x 2 metros
                      </li>
                      <li>
                        Iluminación completa en todo el apartamento
                      </li>
                      <li>
                        Apartamento de esquina
                      </li>
                      <li>
                        Área social integrada al balcón
                      </li>
                      <li>
                        El apartamento tiene tanto la vista de amanecer hacia la reserva natural como del atardecer con los volcanes.
                      </li>
                    </ul>
                  <?php
                }
               ?>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/01.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/01.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
               <div class="col-1"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div> <!--/A-->
   <div class="apartment_model col-12" id="B"><!--B-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="jardineras">
           <div class="inner"></div>
           <span class="text">Jardineras</span>
         </div>
         <div class="dot mobil" data-info="flex">
           <div class="inner"></div>
           <span class="text">Flex</span>
         </div>

         <div class="dot mobil" data-info="balcon">
           <div class="inner"></div>
           <span class="text">Balc&oacute;n</span>
         </div>
         <img class="model" src="public/images/apts/models/02.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>

                  <?php
                }else{
                  ?>

                  <?php
                }
               ?>
               <ul>
                 <li>
                   6 VENTANAS
                 </li>
                 <li>
                   3 fachadas
                 </li>
                 <li>
                   Espacios flexibles para adaptarse a diferentes etapas de vida. Tener 2 habitaciones y crecer a 3. O empezar con 3, y abrir el espacio social al reducirse a 2 habitaciones.
                 </li>
                 <li>
                   Cocina con amplia alacena
                 </li>
                 <li>
                   Promedio tamaño de ventana 2 x 2 metros
                 </li>
                 <li>
                   Iluminación completa en todo el apartamento
                 </li>
                 <li>
                   Apartamento de esquina
                 </li>
                 <li>
                   Cuartos con doble ventana y jardineras
                 </li>
                 <li>
                   Área social integrada al balcón
                 </li>
               </ul>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/02.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/02.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
               <div class="col-1"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div><!--/B-->
   <div class="apartment_model col-12" id="C2"><!--C2-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="jardineras">
           <div class="inner"></div>
           <span class="text">Jardineras</span>
         </div>
         <div class="dot mobil" data-info="balcon">
           <div class="inner"></div>
           <span class="text">Balc&oacute;n</span>
         </div>
         <div class="dot mobil" data-info="banodevisitas">
           <div class="inner"></div>
           <span class="text">Ba&ntilde;o de visitas</span>
         </div>

         <img class="model" src="public/images/apts/models/03.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>
                    - 7 VENTANAS
                    <br>
                    - 3 fachadas
                    <br>
                    - Promedio tamaño de ventana 2 x 2 metros
                    <br>
                    - Iluminación completa en todo el apartamento
                    <br>
                    - Apartamento de esquina
                    <br>
                    - Cuartos con doble ventana y jardineras
                    <br>
                    - Área social integrada al balcón
                    <br>
                  <?php
                }else{
                  ?>
                  <ul>
                    <li>
                      7 VENTANAS
                    </li>
                    <li>
                      3 fachadas
                    </li>
                    <li>
                      Promedio tamaño de ventana 2 x 2 metros
                    </li>
                    <li>
                      Iluminación completa en todo el apartamento
                    </li>
                    <li>
                      Apartamento de esquina
                    </li>
                    <li>
                      Cuartos con doble ventana y jardineras
                    </li>
                    <li>
                      Área social integrada al balcón
                    </li>
                  </ul>
                  <?php
                }
               ?>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/03.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/03.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
               <div class="col-1"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div><!--/C2-->
   <div class="apartment_model col-12" id="C3"><!--C3-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="jardineras">
           <div class="inner"></div>
           <span class="text">Jardineras</span>
         </div>
         <div class="dot mobil" data-info="balcon">
           <div class="inner"></div>
           <span class="text">Balc&oacute;n</span>
         </div>
         <div class="dot mobil" data-info="banodevisitas">
           <div class="inner"></div>
           <span class="text">Ba&ntilde;o de visitas</span>
         </div>

         <img class="model" src="public/images/apts/models/04.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>
                    - 8 VENTANAS
                    <br>
                    - 3 fachadas
                    <br>
                    - Promedio tamaño de ventana 2 x 2 metros
                    <br>
                    - Iluminación completa en todo el apartamento
                    <br>
                    - Apartamento de esquina
                    <br>
                    - Cuartos con doble ventana y jardineras
                    <br>
                    - Área social integrada al balcón
                    <br>
                    - Espacios flexibles para adaptarse a diferentes etapas de vida. Empezar con 3 habitaciones y en un futuro dejar 2, teniendo un área social con un ventanal espectacular.
                    <br>
                  <?php
                }else{
                  ?>
                  <ul>
                    <li>
                      8 VENTANAS
                    </li>
                    <li>
                      3 fachadas
                    </li>
                    <li>
                      Promedio tamaño de ventana 2 x 2 metros
                    </li>
                    <li>
                      Iluminación completa en todo el apartamento
                    </li>
                    <li>
                      Apartamento de esquina
                    </li>
                    <li>
                      Cuartos con doble ventana y jardineras
                    </li>
                    <li>
                      Área social integrada al balcón
                    </li>
                    <li>
                      Espacios flexibles para adaptarse a diferentes etapas de vida. Empezar con 3 habitaciones y en un futuro dejar 2, teniendo un área social con un ventanal espectacular.
                    </li>
                  </ul>
                  <?php
                }
               ?>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/04.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/04.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
               <div class="col-1"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div><!--/C3-->
   <div class="apartment_model col-12" id="D"><!--D-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="jardineras">
           <div class="inner"></div>
           <span class="text">Jardineras</span>
         </div>
         <div class="dot mobil" data-info="flex">
           <div class="inner"></div>
           <span class="text">Flex</span>
         </div>
         <div class="dot mobil" data-info="balcon">
           <div class="inner"></div>
           <span class="text">Balc&oacute;n</span>
         </div>

         <img class="model" src="public/images/apts/models/05.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>
                    - 6 VENTANAS
                    <br>
                    - 2 fachadas
                    <br>
                    - Promedio tamaño de ventana 2 x 2 metros
                    <br>
                    - Iluminación completa en todo el apartamento
                    <br>
                    - Apartamento de esquina
                    <br>
                    - Ideal para adaptarse a diferentes etapas de vida. Dos cuartos exactos para roomates, parejas, familias o tener la flexibilidad de convertirlo en un master amplio.
                    <br>
                    - Área social completo de una ventana de piso a techo integrado con un balcón.
                    <br>
                    - Cocina estilo italiana de aprox. 4metros de largo.
                    <br>
                  <?php
                }else{
                  ?>
                  <ul>
                    <li>
                      6 VENTANAS
                    </li>
                    <li>
                      2 fachadas
                    </li>
                    <li>
                      Promedio tamaño de ventana 2 x 2 metros
                    </li>
                    <li>
                      Iluminación completa en todo el apartamento
                    </li>
                    <li>
                      Apartamento de esquina
                    </li>
                    <li>
                      Ideal para adaptarse a diferentes etapas de vida. Dos cuartos exactos para roomates, parejas, familias o tener la flexibilidad de convertirlo en un master amplio.
                    </li>
                    <li>
                      Área social completo de una ventana de piso a techo integrado con un balcón.
                    </li>
                    <li>
                      Cocina estilo italiana de aprox. 4metros de largo.
                    </li>
                  </ul>
                  <?php
                }
               ?>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/05.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/05.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
               <div class="col-1"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div><!--/D-->
   <div class="apartment_model col-12" id="E"><!--E-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="balcon">
           <div class="inner"></div>
           <span class="text">Balc&oacute;n</span>
         </div>
         <div class="dot mobil" data-info="jardineras">
           <div class="inner"></div>
           <span class="text">Jardineras</span>
         </div>
         <div class="dot mobil" data-info="banodevisitas">
           <div class="inner"></div>
           <span class="text">Ba&ntilde;o de visitas</span>
         </div>

         <img class="model" src="public/images/apts/models/06.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>
                    - 6 ventanas
                    <br>
                    - 2 fachadas
                    <br>
                    - Walking Closet con iluminación natural de piso a techo
                    <br>
                    - Baño de visitas
                    <br>
                    - Cocina estilo italiana aprox. 4 metros de largo
                    <br>
                    - Promedio tamaño de ventana 2 x 2 metros
                    <br>
                    - Iluminación completa en todo el apartamento
                    <br>
                    - Apartamento de esquina
                    <br>
                  <?php
                }else{
                  ?>
                  <ul>
                    <li>
                      6 ventanas
                    </li>
                    <li>
                      2 fachadas
                    </li>
                    <li>
                      Walking Closet con iluminación natural de piso a techo
                    </li>
                    <li>
                      Baño de visitas
                    </li>
                    <li>
                      Cocina estilo italiana aprox. 4 metros de largo
                    </li>
                    <li>
                      Promedio tamaño de ventana 2 x 2 metros
                    </li>
                    <li>
                      Iluminación completa en todo el apartamento
                    </li>
                    <li>
                      Apartamento de esquina
                    </li>
                  </ul>
                  <?php
                }
               ?>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/06.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/06.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
               <div class="col-1"></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div><!--E-->
   <div class="apartment_model col-12" id="G"><!--G-->
     <div class="row">
       <div class="col-md-6 col-12">
         <div class="dot mobil" data-info="terraza">
           <div class="inner"></div>
           <span class="text">Terraza con sala</span>
         </div>

         <div class="dot mobil" data-info="banodevisitas">
           <div class="inner"></div>
           <span class="text">Ba&ntilde;o de visitas</span>
         </div>
         <img class="model" src="public/images/apts/models/07.png">
         <div class="col-12 bottominfo">
           <div class="row">
             <div class="col-6">
               <div class="dot" data-info="infogeneral">
                 <div class="inner"></div>
                 <span class="text">INFO GENERAL</span>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-12 am_R">
         <div class="row">
           <div class="info_popup">
             <div class="close_info_popup">
               <p>x</p>
             </div>
             <h1 class="titulo">INFO GENERAL</h1>
             <div class="text">
               <?php
                if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')){
                  ?>
                    - Apartamento urbano, con una terraza amplia para tener una salita exterior. La fachada completa es un ventanal para tener una iluminación natural en todos los espacios.
                    <br>
                    - Walking Closet de 2.50 x 2.5
                    <br>
                    - Baño de visita
                    <br>
                    - Cocina estilo italiana aprox 4 metros de largo
                    <br>
                    - Iluminación completa en todo el apartamento
                    <br>
                  <?php
                }else{
                  ?>
                  <ul>
                    <li>
                      Apartamento urbano, con una terraza amplia para tener una salita exterior. La fachada completa es un ventanal para tener una iluminación natural en todos los espacios.
                    </li>
                    <li>
                      Walking Closet de 2.50 x 2.5
                    </li>
                    <li>
                      Baño de visita
                    </li>
                    <li>
                      Cocina estilo italiana aprox 4 metros de largo
                    </li>
                    <li>
                      Iluminación completa en todo el apartamento
                    </li>
                  </ul>
                  <?php
                }
               ?>
             </div>
           </div>
           <div class="col-12">
             <img src="public/images/apts/metrajes/07.png" class="title">
           </div>
           <div class="col-12 plantas">
             <img src="public/images/apts/plantas/07.png">
           </div>
           <div class="col-12 options">
             <div class="row">
               <div class="col-2"></div>
               <div class="col-9">
                 <button class="btn float-right" id="cotizar">
                   COTIZA TU APARTAMENTO
                 </button>
                 <button class="btn float-right" id="citar">
                   HAZ UNA CITA
                 </button>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div><!--/G-->
  </div>
  <div class="slider slider-nav col-12">
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/01.png">
    </btn>
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/02.png">
    </btn>
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/03.png">
    </btn>
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/04.png">
    </btn>
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/05.png">
    </btn>
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/06.png">
    </btn>
    <btn class="slick-item-container">
      <img src="public/images/apts/btns/07.png">
    </btn>
  </div>
</div>
<div class="nosvemospronto text-center">
  <img src="public/logow.png">
  <h1>
    ¡NOS VEMOS PRONTO!
  </h1>
  <div class="line"></div>
  <p>
    Recibir&aacute;s noticias nuestras con toda la informaci&oacute;n
    <br>
    que necesitas.
  </p>
</div>
