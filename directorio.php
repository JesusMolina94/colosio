<?php 

  $data = array(
    array(
      'grupo' => '',
      'nombre' => 'Lic. Silvia Narvaez Gonzalez',
      'avatar' => '',
      'puesto' => 'Rectora',
      'telefono' => '',
      'email' => 'silvia.narvaez.gonzalez@hotmail.com',
    ),
    array(
      'grupo' => '',
      'nombre' => 'Psi. Guadalupe García Córdoba',
      'avatar' => '',
      'puesto' => 'Directora de Preescolar y Primaria',
      'telefono' => '',
      'email' => 'gpe.g.c@hotmail.com',
    ),
    array(
      'grupo' => '',
      'nombre' => 'Profra. Leticia Santiago Enríquez',
      'avatar' => '',
      'puesto' => 'Directora de Secundaria',
      'telefono' => '',
      'email' => 'leti_santiago@hotmail.com',
    ),
    array(
      'grupo' => '',
      'nombre' => 'Cynthia Raquel Gil Narváez',
      'avatar' => '',
      'puesto' => 'Directora Administrativa',
      'telefono' => '',
      'email' => 'logil_21@hotmail.com',
    ),
    array(
      'grupo' => '',
      'nombre' => 'Cynthia Raquel Gil Narváez',
      'avatar' => '',
      'puesto' => 'Directora Administrativa',
      'telefono' => '',
      'email' => 'logil_21@hotmail.com',
    ),
  )
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- imports link scripts -->
  <?php include_once('components/imports.php') ?>
  <title>Colegio Colosio | Directorio</title>
</head>
<body>
  <!-- header navbar -->
  <?php include_once('components/header.php') ?>

  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <h1 class="bg-accent-color box-accent text-white text-center">Directorio</h1>
        <div class="row mt-5">
          <div class="col-sm-12">
            
            <?php foreach($data as $item){ ?>

              <?php if($item['grupo'] !== ''){ ?>
                <h1 class="text-center"><?php echo $item['grupo'] ?></h1>
              <?php } ?>

              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-3">
                  <?php if($item['avatar'] !== ''){ ?>
                    <img src="<?php echo $item['avatar'] ?>" class="card-img">
                  <?php }else{ ?>
                    <img src="public/perfil.png" class="card-img">
                  <?php } ?>
                  </div>
                  <div class="col-md-9">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $item['nombre'] ?></h5>
                      <p class="card-text"><?php echo $item['puesto'] ?></p>
                      <p class="card-text">
                        <small class="text-muted">
                          <?php echo $item['email'] ?>
                        </small>
                      </p>
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