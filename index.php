<?php 
  /**
   * imagenes del carrucel principal
   */
  $imgs_carrucel_principal_array = array(
    'public/flayer-1.png',
    'https://image.freepik.com/vector-gratis/landing-page-vuelta-al-cole_23-2148198500.jpg',
    'https://image.freepik.com/vector-gratis/banner-oferta-especial-regreso-escuela_95169-1231.jpg',
    'https://image.freepik.com/vector-gratis/plantilla-pagina-aterrizaje-regreso-escuela_52683-41744.jpg',
  );
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- imports link scripts -->
  <?php include_once('components/imports.php') ?>
  <title>Colegio Colosio</title>
</head>
<body>
  
  <!-- header navbar -->
  <?php include_once('components/header.php') ?>
  <!-- slider -->
  <?php include_once('components/slider.php') ?>
  

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-sm-4">
        <div>
          <!-- slider noticias -->
          <?php include_once('components/sliderNews.php') ?>
        </div>
        <div>
          <!-- slider noticias -->
          <?php include_once('components/facebookPage.php') ?>
        </div>
      </div>
      <div class="col-sm-8">
        <!-- presentacion principal -->
        <?php include_once('components/presentation.php') ?>

        <div class="row">
          <div class="col-sm-12">
            <!-- colaboradores -->
            <?php include_once('components/collaborators.php') ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- botones flotantes de whatssap -->
  <?php include_once('components/buttonFloat.php') ?>

  <!-- footer -->
  <?php include_once('components/footer.php') ?>
  
</body>
</html>