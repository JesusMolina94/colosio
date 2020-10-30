<?php 

  switch ($_GET['n']) {
    case 'Preescolar':
      $programas = array(
        array(
          'img' => '',
          'titulo' => '<center>Objetivo Preescolar Colosio</center>',
          'descripcion' => '<p align=justify> 
          Desarrollar y guiar a nuestros pequeños en el conocimiento de sus habilidades, destrezas, capacidades, a través de la experiencia y el juego, es decir; siendo felices, logrando aprender con mayor naturalidad en un ambiente lúdico de la mano con el idioma inglés, potencializando así el dominio de sus conocimientos para la vida. ',
        ),
        array(
          'img' => 'https://www.amconews.es/wp-content/uploads/2018/03/Interfaz-Aluzo.png',
          'titulo' => 'Programa Enlace',
          'descripcion' => 'El Modelo de Aprendizaje a Distancia de Amco funciona ante cualquier escenario de ciclo escolar: virtual, híbrido o presencial.
          Sus hijos obtendrán un código de acceso que les permitirá ingresar a nuestra plataforma de aprendizaje a distancia, en la que contarán con nuevas funcionalidades que les permitirán avanzar fortalecidos para un nuevo y desafiante ciclo escolar.
          El regreso a clases de sus hijos no volverá a ser el mismo y las herramientas que desarrollamos para acompañarlos tampoco lo son.',
        ),
        array(
          'img' => '',
          'titulo' => '¡Nadie se queda atrás!',
          'descripcion' => '<b>Recursos Digitales para Aprendizajes Claves</b><br> 
          Dentro de la nueva plataforma sus hijos contarán con recursos digitales para nivelar y reforzar los aprendizajes claves disponibles durante todo el ciclo escolar.',
        ),
        array(
          'img' => '',
          'titulo' => '¡Avanzando desde el punto de partida!',
          'descripcion' => '<b>Evaluación Diagnóstica</b><br>
          Al inicio del ciclo, sus hijos podrán realizar una evaluación diagnóstica para
          conocer los aprendizajes que deben repasar o en los que se necesitan nivelar. Además, todas las evaluaciones del ciclo se podrán realizar en la misma plataforma, facilitando el proceso para todos.',
        ),
        array(
          'img' => '',
          'titulo' => '¡Más cerca que nunca!',
          'descripcion' => '<b>Comunicación Instantánea</b> <br>
          La comunicación entre sus hijos y docentes dentro de la plataforma incluye: <br>
          <ol>
            <li>Chat para mensajes instantáneos</li>
            <li>Calendarios con actividades por curso y clase</li>
            <li>Foros para trabajo en equipo</li>
          </ol>',
        ),
        array(
          'img' => 'https://pbs.twimg.com/profile_images/580799404086562816/IQgFD-sh.jpg',
          'titulo' => 'Happy to learn',
          'descripcion' => 'Cuando un niño está jugando, es feliz. En Amco creemos que cuando juegas, aprendes,
          y cuando aprendes jugando eres más feliz. Esa es nuestra razón de ser. <br><br>
          AMCO desarrolla recursos y metodologías que se adaptan natural y eficientemente a los requerimientos de las nuevas generaciones para que encuentren en el colegio una buena experiencia de felicidad, amistad, aprendizaje, confianza, cariño y respeto.',
        ),
        array(
          'img' => 'https://image.freepik.com/vector-gratis/concepto-pensar-flat_23-2148163823.jpg',
          'titulo' => 'Visible Thinking',
          'descripcion' => '<b>Es la interiorización del conocimiento a través de prácticas que permiten
          profundizar en el contenido que se aprende y en los Procesos del Pensamiento.</b><br><br>
          Amco potencia estrategias que favorecen la inclusión de la Cultura del Pensamiento y del Pensamiento Visible, lo cual, favorece y mejora la competencia global de nuestros niños',
        ),
        array(
          'img' => 'https://image.freepik.com/vector-gratis/coleccion-docentes_23-2148535015.jpg',
          'titulo' => 'Docentes Brillantes y Capacitados (Aulas Invertidas)',
          'descripcion' => 'Los docentes dejan de ser consumidores y se convierten en creadores de contenidos, de los cuales destacan breves videoconferencias que son vistas por los alumnos en casa, mientras que el tiempo de clase se invierte en la realización de ejercicios, proyectos o discusiones. Las videoconferencias y conferencias pre-grabadas en audio son consideradas elementos esenciales en el enfoque del Aula Invertida, dichos materiales son creados por docentes y pueden ser publicados o almacenados dentro de repositorios en línea para facilitar su acceso.',
        ),
      );

      $imgs_carrucel_principal_array = array(
        'public/flayer-2.jpg',
      );
    break;
    case 'Primaria':
           $programas = array(
        array(
        'img' => '',
            'titulo' => '<center><b>Plan SEP</b></center>',
            'descripcion' => '<p align=justify>El objetivo principal es el desarrollo integral,  intelectual e incluyente de los alumnos, para enfrentar retos del mundo actual. Fortaleciendo los aprendizajes de la expresión y comprensión oral, la lectura, la escritura, el cálculo, la adquisición de nociones básicas de la cultura, y el hábito de convivencia, así como  el sentido artístico, físico y la creatividad.',
        ),
        array(
          'img' => '',
          'titulo' => '<center><b>Objetivo Primaria Colosio</b></center>',
          'descripcion' => '<p align=justify> 
          Formar ciudadanos del mundo que desarrollen habilidades para poner en práctica el conocimiento en la resolución de problemas de la vida cotidiana. Logrando ser un individuo competente capaz de realizar actividades de la mejor manera posible, capaz de resolver conflictos; promoviendo que el alumno se convierta en un ciudadano útil para la sociedad y el mundo a través de nuestro sistema bilingüe (primaria baja) e inglés intensivo (primaria alta).',
        ),
        array(
          'img' => '',
          'titulo' => 'Mis metas son:',
          'descripcion' => '
          <ol><b>
            <li>Descubro mi potencial</li>
            <li>Exploro el mundo natural y social</li>
            <li>Reconozco mis habilidades</li></b>
          </ol>',
        ),
        array(
          'img' => '',
          'titulo' => '',
          'descripcion' => '
          
          <a class="open-img zoom-in">
          <img src="public/obj_primaria.png" width=690 height=600>
          </a>
          ',
        ),
      );
              
      $imgs_carrucel_principal_array = array(
        'public/flayer-3.jpg',
      );
    break;
    case 'Secundaria':
             $programas = array(
        array(
          'img' => '',
          'titulo' => '<center><b>Objetivo Secundaria Colosio</b></center>',
          'descripcion' => '<p align=justify> 
          Reforzar y potencializar en los alumnos sus habilidades, destrezas, capacidades y conocimientos a través de la expresión artística, musical y desarrollo de una segunda lengua (ingles)  así como el auto conocimiento de las emociones, preparándolos para la vida.',
        ),
        array(
          'img' => '',
          'titulo' => '<center>Aprendizajes esperados son:<br>',
          'descripcion' => '
          <ol><b>
            <li>Yo soy mis metas</li>
            <li>Yo soy incluyente</li>
            <li>Yo soy mi sociedad</li>
            <li>Yo soy mi futuro</li></b>
          </ol>',
        ),
         array(
          'img' => '',
          'titulo' => '',
          'descripcion' => '
          
          <a class="open-img zoom-in">
          <img src="public/secundaria.png" width=690 height=600>
          </a>
          ',
        ),        
      );
      $imgs_carrucel_principal_array = array(
        'public/flayer-4.jpg',
          
      );
    break;
    case 'Bachillerato':
          $programas = array(
        array(
          'img' => '',
          'titulo' => '<center>Bachillerato</center>',
          'descripcion' => '<p align=justify> 
          Impulsar y dotar al alumno de herramientas diversas para para la construcción y elección de su vida profesional por medio de la disciplina y el amor, esa es la gran apuesta para el nivel medio superior del Instituto de Educación Tecnológica LDCM, complementando así el plan curricular propuesto por el Colegio de Bachilleres del Estado de Tabasco, con Instituciones de Nivel Superior de prestigio nacional e internacional.',
        ),
      );
      $imgs_carrucel_principal_array = array(
        'public/flayer-5.jpg',
      );
    break;
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- imports link scripts -->
  <?php include_once('components/imports.php') ?>
  <title>Colegio Colosio | Nivel | <?php echo $_GET['n'] ?></title>
</head>
<body>
  <!-- header navbar -->
  <?php include_once('components/header.php') ?>

  <!-- slider -->
  <?php include_once('components/slider.php') ?>

  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-sm-8">
        <div class="row">
          <div class="col-sm-12">
            <h1 class="bg-accent-color box-accent text-white text-center">Nivel <?php echo $_GET['n'] ?></h1>
            <p class="mt-3" align=justify>              
                El sistema educativo Colosio, goza con un prestigio de más de 27 años llenos de logros. Está diseñado para potenciar el crecimiento colosal del alumno desde el nivel inicial, hasta su llegada al medio superior, cumpliendo con los requerimientos oficiales de la Secretaría de Educación, aportando con programas propios, originales e innovadores como: educación para vida y salud socioemocional. A toda nuestra oferta educativa la enriquecemos con aliados internacionales; AMCO (happy to learn) y Cambridge (Institución internacional certificadora del idioma inglés). Siendo el engranaje principal el manejo de valores, logrando un desarrollo integral en la vida del alumno. 
            </p>
          </div>
          <div class="col-sm-12 mt-3 mb-5">
            <div class="card">
              <img src="public/sistema-amco.png" alt="amco" class="card-img-top">
              <div class="card-body bg-primary-color text-white">
                <blockquote class="blockquote mb-0">
                  <p>
                  Amco desarrolla recursos y metodologías que se adaptan natural y eficientemente
                  a los requerimientos de las nuevas generaciones para que encuentren en el colegio
                  una buena experiencia de felicidad, amistad, aprendizaje, confianza, cariño y respeto.
                  </p>
                  <footer class="blockquote-footer">Aprende más sobre <cite title="Source Title"><a href="https://www.amco.me/padre-de-familia" target="_blank" class="text-white">Amco</a></cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-sm-12">

            <?php foreach ($programas as $key => $value) { ?>
              <div class="card mb-3">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <?php if($value['img'] !== ''){ ?>
                      <img src="<?php echo $value['img'] ?>" alt="" class="card-img ob-fit-h">
                    <?php } ?>
                  </div>
                  <div class="<?php echo ($value['img'] !== ''? 'col-sm-8' : 'col-sm-12') ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $value['titulo'] ?></h5>
                      <p class="card-text"><?php echo $value['descripcion'] ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            
          </div>

          <div class="col-sm-12">
            <p>
              -
            </p>
            <div class="card-group">                
              <div class="card">
                <a class="open-img zoom-in">
                  <img src="public/amco-diagrama.png" class="card-img-top">
                </a>
              </div>
              <div class="card">
                <a class="open-img zoom-in">
                  <img src="public/cambridge.png" class="card-img-top">
                </a>
              </div>
              <div class="card">
                <a class="open-img zoom-in">
                  <img src="public/amco-cambridge.png" class="card-img-top">
                </a>
              </div>
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