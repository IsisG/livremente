<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="bare/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="css/grape.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <style>
    body {
      padding-top: 54px;
    }

    @media (min-width: 992px) {
      body {
        padding-top: 56px;
      }
    }
  </style>

</head>

<body>

  <!-- MENU -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="sidebar">
    <div class="profilecard">
      <div class="profilecard-bg" style="background-image: url(https://bootstrap-themes.github.io/application/assets/img/iceland.jpg);"></div>
      <div class="profilecard-content text-center">
        <a href="profile/index.html">
          <img class="profilecard-avatar" src="https://goo.gl/g7xohU">
        </a>

        <h6>
          <a class="profilecard-link" href="profile/index.html">André Silveira</a>
        </h6>

        <p>Tem gente que diz que uma casa sem cortinas é uma casa nua. Eu penso o mesmo de uma casa sem livros. (Martha Medeiros)</p>

        <ul class="profilecard-statslist">
          <li class="profilecard-statsitem">
            <a href="#userModal" class="profilecard-link" data-toggle="modal">
              Pg
              <h6>3255</h6>
            </a>
          </li>

          <li class="profilecard-statsitem">
            <a href="#userModal" class="profilecard-link" data-toggle="modal">
              Seguindo
              <h6>12M</h6>
            </a>
          </li>

          <li class="profilecard-statsitem">
            <a href="#userModal" class="profilecard-link" data-toggle="modal">
              Seguidores
              <h6>1</h6>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="profilecard">
      <div class="profilecard-content">
        <h6>Stats
          <small>·
            <a href="#">Edit</a>
          </small>
        </h6>
        <ul>
          <li>
            Went to
            <a href="#">Oh, Canada</a>
          </li>
          <li>
            Became friends with
            <a href="#">Obama</a>
          </li>
          <li>
            Worked at
            <a href="#">Github</a>
          </li>
          <li>
            Lives in
            <a href="#">San Francisco, CA</a>
          </li>
          <li>
            From
            <a href="#">Seattle, WA</a>
          </li>
        </ul>
      </div>
    </div>
  </div>



  <!-- POSTS -->
  <div id="posts-container" class="container-fluid container-posts">

    <div class="card-post">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <a href="personal-profile.html" title="Profile">
            <img src="img/user.jpg" alt="User name" class="img-circle img-user">
          </a>
        </div>
        <div class="col-xs-9 col-sm-10 info-user">
          <h3>
            <a href="personal-profile.html" title="Profile">My User</a>
          </h3>
          <p>
            <i>2h</i>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 data-post">
          <p>Lorem Ipsum Dolor si amet</p>
          <div class="reaction">
            <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 156
            <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
          </div>
          <div class="comments">
            <div class="more-comments">View more comments</div>
            <ul>
              <li>
                <b>User1</b> Lorem Ipsum Dolor si amet</li>
              <li>
                <b>User2</b> Lorem Ipsum Dolor si amet
                <img draggable="false" class="emoji" alt="😂" src="https://twemoji.maxcdn.com/16x16/1f602.png">
              </li>
            </ul>
            <form>
              <input type="text" class="form-control" placeholder="Add a comment">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="card-post">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <a href="user-profile.html" title="User Profile">
            <img src="img/user2.jpg" alt="User name" class="img-circle img-user">
          </a>
        </div>
        <div class="col-xs-9 col-sm-10 info-user">
          <h3>
            <a href="user-profile.html" title="User Profile">User Name</a>
          </h3>
          <p>
            <i>2h</i>
          </p>
        </div>
      </div>
      <div class="row">
        <div class=" col-sm-8 col-sm-offset-2 data-post">
          <p>Lorem Ipsum Dolor si amet</p>
          <img src="img/post.jpg" alt="image post" class="img-post">
          <div class="reaction">
            <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 1234
            <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
          </div>
          <div class="comments">
            <div class="more-comments">View more comments</div>
            <ul>
              <li>
                <b>User1</b> Lorem Ipsum Dolor si amet</li>
              <li>
                <b>User2</b> Lorem Ipsum Dolor si amet
                <img draggable="false" class="emoji" alt="😂" src="https://twemoji.maxcdn.com/16x16/1f602.png">
              </li>
            </ul>
            <form>
              <input type="text" class="form-control" placeholder="Add a comment">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="card-post">
      <div class="row">
        <div class="col-xs-3 col-sm-2">
          <a href="personal-profile.html" title="User Profile">
            <img src="img/user.jpg" alt="User name" class="img-circle img-user">
          </a>
        </div>
        <div class="col-xs-9 col-sm-10 info-user">
          <h3>
            <a href="personal-profile.html" title="User Profile">My User</a>
          </h3>
          <p>
            <i>2h</i>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2 data-post">
          <p>Lorem Ipsum Dolor si amet</p>
          Video here
          <video controls="">
            <source src="img/post-video.mp4" type="video/mp4"> Your browser does not support the video tag.
          </video>
          <div class="reaction">
            <img draggable="false" class="emoji" alt="❤" src="https://twemoji.maxcdn.com/16x16/2764.png"> 1234
            <img draggable="false" class="emoji" alt="😃" src="https://twemoji.maxcdn.com/16x16/1f603.png"> 54
          </div>
          <div class="comments">
            <div class="more-comments">View more comments</div>
            <ul>
              <li>
                <b>User1</b> Lorem Ipsum Dolor si amet</li>
              <li>
                <b>User2</b> Lorem Ipsum Dolor si amet
                <img draggable="false" class="emoji" alt="😂" src="https://twemoji.maxcdn.com/16x16/1f602.png">
              </li>
            </ul>
            <form>
              <input type="text" class="form-control" placeholder="Add a comment">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="bare/vendor/jquery/jquery.min.js"></script>
  <script src="bare/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>