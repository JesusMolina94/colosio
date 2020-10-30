<?php 
  $data = array(
    'https://colegiocolosio.com/imagenes/instalaciones/1_2.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//2_2.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//3.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//20150717_134415.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//4.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//20150717_134454.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//5.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//20150717_134512.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//6.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//7.jpg',
    'https://colegiocolosio.com/imagenes/instalaciones//38.jpg',
  );
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- imports link scripts -->
  <?php include_once('components/imports.php') ?>
  <title>Colegio Colosio | Instalaciones</title>
</head>
<body>
  <!-- header navbar -->
  <?php include_once('components/header.php') ?>

  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-sm-8">
      <div class="text-center">
        <h1 class="bg-accent-color box-accent text-white text-center">Nuestras instalaciones</h1>
        <p class="mt-3">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni tempora quisquam, optio, eveniet maxime iusto dolor repudiandae architecto ratione ad commodi itaque iste ducimus quia vel assumenda quos, dicta maiores.
        </p>
      </div>
      <div class="card-columns">
        <?php foreach($data as $item){ ?>
          <div class="card">
            <a class="open-img zoom-in">
              <img src="<?php echo $item ?>" class="card-img-top">
            </a>
          </div>
        <?php } ?>
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