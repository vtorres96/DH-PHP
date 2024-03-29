<?php
  include "inc/head.php";
  include "inc/header.php";

  if ($_FILES) {
    if($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK) {
      $nomeImg = $_FILES["foto"]["name"];
      $nomeTemp = $_FILES["foto"]["tmp_name"];
      $pastaRaiz = dirname(__FILE__);
      $nomePasta = "/assets/img/uploads/";
      $caminhoCompleto = $pastaRaiz . $nomePasta . "usuario.jpg";
      move_uploaded_file($nomeTemp, $caminhoCompleto);
    }
  }
?>
  <div class="page-center">
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <img src="assets/img/uploads/usuario.jpg" alt="...">
        <div class="caption">
          <h3><?= $usuarios["nome"]; ?></h3>
          <p><?= $usuarios["email"]; ?></p>
          <form action="usuario.php" method="post" enctype="multipart/form-data">
            <label for="inputFoto">Escolha uma foto para seu perfil</label>
            <input type="file" name="foto" class="form-control" id="inputFoto">
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
  include "inc/footer.php";
?>
