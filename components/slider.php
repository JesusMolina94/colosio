<?php 
  /**
   * debe de inicializar $imgs_carrucel_principal_array como array
   * que contenga las imagenes, en el sitio donde utilices este componente
   */
?>
<div id="carouselHeader" class="carousel carousel-header slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">

    <?php if(isset($imgs_carrucel_principal_array)){ ?>
      <?php foreach($imgs_carrucel_principal_array as $key=>$item){ ?>
        <div class="carousel-item <?php echo ($key==0?'active':'') ?>">
          <img src="<?php echo $item ?>" class="d-block">
        </div>  
      <?php } ?>
    <?php }else{ ?>
      <div class="carousel-item active">
        <img src="https://image.freepik.com/psd-gratis/admision-educacion-escolar-publicacion-redes-sociales-banner-web_124868-95.jpg" class="d-block">
      </div>
    <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselHeader" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselHeader" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>