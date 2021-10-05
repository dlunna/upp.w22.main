<?php $titulo = "Universidad Politécnica de Pachuca" ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    include('./dotk/00head/analitycs.html');
    include('../lib20/core/10cabecera.html');
    include('../lib20/core/20estilos.html');
    include('../lib20/hgo/zoram_style_header.html');
  ?>
</head>

<body>
  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php
    //include ('../lib18/seph/hf/header.html');
        include('../lib20/hgo/header.html');
    ?>
    <!-- Slider principal -->
    <?php include('./dotk/01header/01carousel-principal/carousel.html'); ?>
  </header>

  <?php include('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>

    <div class="container marketing">

      <br>
      <a href="http://www.upp.edu.mx/resultados/">
        <!--<img src="https://www.upp.edu.mx/rfront/wp-content/uploads/2020/06/banner-CSWA-FEA-1024x534.png" class="img-fluid rounded" alt="Responsive image" alt="upp">-->
        <p style="font-size:50px;">LISTAS DE ASPIRANTES ACEPTADOS/AS PARA INGRESAR EN EL PERIODO ESCOLAR SEPTIEMBRE - DICIEMBRE 2021</p>
      </a>
      <br>
      <br>

      <a id="marketing"></a>
      <hr>
      <?php include('./dotk/05main/01iconos/marketing.html'); ?>
      <br>

      <a id="aspirantes"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/03comunidad/aspirantes.html'); ?>

      <a id="comunidad"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/03comunidad/comunidadupp.html'); ?>
      <?php include('./dotk/05main/03comunidad/egresados.html'); ?>

      <a id="calendario"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/04gool/gcalendar.html'); ?>

      <a id="noticias"></a>
      <hr class="featurette-divider">
      <?php include('./dotk/05main/05entradas/nuevo.php'); ?>

      <hr class="featurette-divider">
      <?php include('./dotk/05main/07ligasdint/iconosfooter.html'); ?>

    </div>

    <?php //include ('./dotk/05main/contenido.html');?>

    <div class="container marketing">
      <a id="mapadesitio"></a>
      <br />
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include('../lib20/core/60menufooter.php'); ?>
    </div>
  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php //include ('../lib20/seph/hf/footer.html');?>
    <?php include('../lib20/hgo/footer.html'); ?>
  </footer>

  <?php
    include('../lib20/core/80js.html');
    include('../lib20/hgo/zoram_js_footer.html');
  ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib20/core/31script.js"></script>-->


</body>

</html>
