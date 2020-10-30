<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- imports link scripts -->
  <?php include_once('components/imports.php') ?>
  <title>Colegio Colosio | Admisiones</title>
</head>
<body>
  <!-- header navbar -->
  <?php include_once('components/header.php') ?>

  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="bg-accent-color box-accent text-white text-center">Admisiones</h1>
            <p class="mt-3">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur voluptatum animi quas ducimus, rem consequuntur obcaecati veritatis nostrum repudiandae sequi doloremque natus repellat exercitationem vitae vero dignissimos totam qui impedit.
            </p>
          </div>
          <div class="col-sm-12">
            <div class="card mb-3">
              <img src="public/presentacion-inscripcion.png" class="card-img-top">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <footer class="blockquote-footer">Proceso de Inscripción</footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae enim sit, quaerat eligendi cum officiis doloribus rerum quo sed voluptates suscipit ex delectus pariatur dolor non quasi, provident fugit possimus.
            </p>
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="public/requisitos-inscripcion-preescolar.pdf" target="_blank" class="text-dark">Preescolar</a></li>
                <li class="list-group-item"><a href="public/requisitos-inscripcion-primaria.pdf" target="_blank" class="text-dark">Primaria</a></li>
                <li class="list-group-item"><a href="public/requisitos-inscripcion-secundaria.pdf" target="_blank" class="text-dark">Secundaria</a></li>
              </ul>
            </div>
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