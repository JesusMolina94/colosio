<div class="btn-msg">
  <a href="https://api.whatsapp.com/send?phone=529933555171&text=&source=&data=&app_absent=" class="btn-circle" target="_blank">
    <img src="public/social-icons/007-whatsapp.png" alt="whatsapp">
  </a>
  <a href="" class="btn-circle" data-toggle="modal" data-target="#modal_email">
    <img src="public/social-icons/056-gmail.png" alt="gmail">
  </a>
</div>


<div class="modal fade" tabindex="-1" role="dialog" id="modal_email">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Mandar correo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
        <div class="modal-body">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, est?</p>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="material-icons">person</i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre Completo" required>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="material-icons">contact_mail</i>
              </span>
            </div>
            <input type="email" class="form-control" placeholder="Correo" required>
          </div>
          <textarea class="form-control" id="" rows="3" placeholder="Descripcion" required></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Mandar</button>
        </div>
      </form>
    </div>
  </div>
</div>