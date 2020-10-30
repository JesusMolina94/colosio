<?php 
  $programas = array(
    array(
      'img' => '',
      'titulo' => 'titulo',
      'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ducimus ab aliquam iusto quia non expedita consectetur labore, nihil ipsam error quos ea tempore saepe itaque, quidem, placeat cupiditate eaque.',
    ),
    array(
      'img' => '',
      'titulo' => 'titulo',
      'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ducimus ab aliquam iusto quia non expedita consectetur labore, nihil ipsam error quos ea tempore saepe itaque, quidem, placeat cupiditate eaque.',
    ),
  );
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- imports link scripts -->
  <?php include_once('components/imports.php') ?>
  <title>Colegio Colosio | Servicios | <?php echo $_GET['t'] ?></title>
</head>
<body>
  <!-- header navbar -->
  <?php include_once('components/header.php') ?>

  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="bg-accent-color box-accent text-white text-center">Servicio <?php echo $_GET['t'] ?></h1>
            <p class="mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur labore accusantium perferendis culpa maxime quasi soluta adipisci ut quae error illum, a recusandae numquam, eius sit velit enim similique tempore.
            </p>
          </div>
          <div class="col-sm-12">

            <?php foreach ($programas as $key => $value) { ?>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="40%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $value['titulo'] ?></h5>
                      <p class="card-text"><?php echo $value['descripcion'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

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