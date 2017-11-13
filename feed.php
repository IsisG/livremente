<!DOCTYPE html>
<html lang="pt">

<head>

  <title>Bare - Start Bootstrap Template</title>

</head>

<body>
  <!-- NAVBAR -->
  <?php include('layout/menu.php'); ?>
  <!-- SIDEBAR -->
  <?php include('layout/sidebar.php'); ?>

  <!-- POSTS -->
  <div id="posts-container" class="container-fluid container-posts">

    <!-- NEW POST -->
    <div class="card-post">
      <div class="row">
        <div class="col-sm-2">
          <a href="profile.php" title="André Silveira">
            <img src="https://goo.gl/g7xohU" alt="André Silveira" class="postcard-avatar">
          </a>
        </div>

        <div class="newpost col-sm-10">
          <ul class="newpost-buttonslist">
            <li class="newpost-buttonitem">
              <a href="newPost.php?tipo=lendo" class="profilecard-link">
                <i class="fa fa-plus fa-lg lendo"></i>
                <i class="fa fa-book fa-2x lendo" aria-hidden="true"></i>
                <h6>Lendo</h6>
              </a>
            </li>

            <li class="newpost-buttonitem">
              <a href="newPost.php?tipo=lido" class="profilecard-link">
                <i class="fa fa-plus fa-lg lido"></i>
                <i class="fa fa-book fa-2x lido" aria-hidden="true"></i>
                <h6>Lido</h6>
              </a>
            </li>

            <li class="newpost-buttonitem">
              <a href="newPost.php?tipo=queroler" class="profilecard-link">
                <i class="fa fa-plus fa-lg queroler"></i>
                <i class="fa fa-book fa-2x queroler" aria-hidden="true"></i>
                <h6>Quero ler</h6>
              </a>
            </li>

            <li class="newpost-buttonitem">
              <a href="newPost.php?tipo=abandonei" class="profilecard-link">
                <i class="fa fa-plus fa-lg abandonei"></i>
                <i class="fa fa-book fa-2x abandonei" aria-hidden="true"></i>
                <h6>Abandonei</h6>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END OF NEW POST -->


    <div class="card-post">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <a href="profile.php" title="Isis Gomes">
            <img src="https://goo.gl/1sf6gA" alt="Isis Gomes" class="postcard-avatar">
          </a>
        </div>
        <div class="col-xs-9 col-sm-8 info-user">
          <h6>
            <a href="profile.php" title="Isis Gomes">Isis Gomes</a>
            <small>
              <i>· 2h</i>
            </small>
          </h6>
          <p>
            <i class="fa fa-bookmark lendo"></i>
            Estou lendo
            <b>A Rainha Vermelha</b>
          </p>
        </div>
        <div class="col-xs-3 col-sm-2">
            <img src="https://goo.gl/tuKhg5" alt="A Rainha Vermelha" class="postcard-book">
        </div>
      </div>
      <div class="row">
        <div class="data-post col-sm-12">
          Fazia algum tempo que não curtia tanto um livro de distopia com fantasia quanto estou curtindo este <3.
          <div class="reaction">
            <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 120
          </div>
          <div class="comments">
            <div class="more-comments">Ver mais comentários</div>
            <ul>
              <li>
                <b>Fulano</b> Amo esse livro!</li>
              <li>
                <b>Ciclano</b> Terminei esse em um dia. Muito bom!
              </li>
            </ul>
            <form>
              <input type="text" class="form-control" placeholder="Adicione um comentário">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="card-post">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <a href="profile.php" title="Isis Gomes">
            <img src="https://goo.gl/1sf6gA" alt="Isis Gomes" class="postcard-avatar">
          </a>
        </div>
        <div class="col-xs-9 col-sm-8 info-user">
          <h6>
            <a href="profile.php" title="Isis Gomes">Isis Gomes</a>
            <small>
              <i>· 2h</i>
            </small>
          </h6>
          <p>
            <i class="fa fa-bookmark abandonei"></i>
            Abandonei
            <b>Piano Vermelho</b>
          </p>
        </div>
        <div class="col-xs-3 col-sm-2">
            <img src="https://goo.gl/33xNGr" alt="Piano Vermelho" class="postcard-book">
        </div>
      </div>
      <div class="row">
        <div class="data-post col-sm-12">
          A narrativa é arrastada, e os personagens são péssimos. Quem sabe na próxima vida?
          <div class="reaction">
            <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 36
          </div>
          <div class="comments">
            <div class="more-comments">Ver mais comentários</div>
            <ul>
              <li>
                <b>Fulano</b> Como assim você não gostou?</li>
              <li>
                <b>Ciclano</b> :O
              </li>
            </ul>
            <form>
              <input type="text" class="form-control" placeholder="Adicione um comentário">
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>





</body>

</html>