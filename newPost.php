<?php 
  $tipo = $_GET["tipo"];
  if(empty($tipo)){
    // echo "<script>location.href='feed.php';</script>";
  }
?>

<!DOCTYPE html>
<html lang="pt">

<head>

  <title>Nova postagem | Livremente </title>

</head>

<body>
  <?php include('layout/menu.php'); ?>
  <?php include('layout/sidebar.php'); ?>

  <!-- POSTS -->
  <div id="posts-container" class="container-fluid container-posts">
    <div class="card-post">
      <div class="row">
        <div class="col-sm-2">
          <a href="profile.php" title="André Silveira">
            <img src="https://goo.gl/g7xohU" alt="André Silveira" class="postcard-avatar">
          </a>
        </div>

        <div class="newpost col-sm-10">

          <form>
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" disabled placeholder="Buscar ou adicionar livro" name="q">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-default button-textsearch">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                  <button type="button" class="btn btn-default button-textadd" data-toggle="modal" data-target="#adicionarLivroModal">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="form-group">
              <textarea name="descricao" rows="5" class="col-sm-12" placeholder="Adicione um comentário sobre esse livro"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Publicar</button>
          </form>
        </div>
      </div>
    </div>


  </div>



  <!-- Adicionar Livro Modal -->
  <div class="modal fade" id="adicionarLivroModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Adicionar Livro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form method="post" id="adicionarLivroForm">
            <div class="form-group">
              <label class="col-form-label">Título:</label>
              <input type="text" class="form-control" name="titulo" required>
            </div>

            <div class="form-group">
              <label class="col-form-label">Autor:</label>
              <input type="text" class="form-control" name="autor" required>
            </div>

            <div class="form-group">
              <label class="col-form-label">Ano:</label>
              <input type="number" class="form-control" name="ano" min="0" max="2100">
            </div>

            <div class="form-group">
              <label class="col-form-label">Quantidade de páginas:</label>
              <input type="number" class="form-control" name="qtdPaginas" min="0" max="99999">
            </div>

            <div class="form-group">
              <label class="col-form-label">Capa</label>
              <input type="file" class="form-control-file" name="foto">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" onclick="adicionarLivro();" class="btn btn-success">Salvar</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>

</body>

</html>

<script>
  function adicionarLivro(){

    $("#adicionarLivroForm").submit();

      $.ajax({
        type: 'post',
        url: 'livro/salvar.php',
        data: $('form').serialize()
      });

  }

  $(function () {

    $('adicionarLivroForm').on('submit', function (e) {

      alert("submit");

      

    });

  });
</script>