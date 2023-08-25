<div class="info-2 info-2-formulario">
      <p>¿Tienes dudas sobre este producto y deseas tener más información? <br> Solo tienes que completar el siguiente formulario.</p>
      <div class="formulario">
        <img src="public/img/imagen-info.jpg" alt="#">
        <form action="enviarPersonaliza" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col">
              <input name="nom" type="text" class="form-control" id="inputNombre" placeholder="Nombres" aria-label="First name">
            </div>
            <div class="col">
              <input name="ape" type="text" class="form-control" id="inputApellido" placeholder="Apellidos" aria-label="Last name">
            </div>
          </div>
          <div class="mb-6">
            <input name="correo" type="text" class="form-control" id="inputCorreo" placeholder="Correo electrónico">
          </div>
          <div class="mb-6">
            <input name="cel" type="text" class="form-control" id="inputCelular" placeholder="Celular">
          </div>
          <div class="mb-6">
            <textarea name="msg" class="form-control" id="inputMensaje" cols="70" rows="5" placeholder="Mensaje" style="resize: none;"></textarea>
          </div>
          <div class="mb-6">
            <div class="form-file">
              <div class="form-file__action">
                <input name="imagen" type="file" id="image" />
              </div>
              <div class="form-file__result" id="result-image">
                <img id="img-result" alt="" />
              </div>
            </div>
          </div>
          <div class="mb-6">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </form>
      </div>
      <p>*Una vez enviado el formulario nos estaremos comunicando contigo para hacer valida la promoción*</p>
    </div>
    <script src="public/js/productos/main.js"></script>