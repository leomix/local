<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=ENTERPRISE?></title>
  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  <script src="./assets/js/jquery.min.js" crossorigin="anonymous"></script>
  <script src="./assets/js/bootstrap.js"></script>
  <style>
    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    footer {
      margin-top: auto;
    }

    hr.verde {
      border: 2px solid green;
    }

    h3 {
      margin: 1em auto 0.5em;
    }
    .bg-dark {
    background-color: #062F87!important;
}
.top-3em{
  margin-top: -3em;
}
div.img{
    background: url('./assets/img/logopng.png') no-repeat center;
    background-size: contain;
    width: 100%;
    height: 100px;
}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><div class="img"></div></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Buscador <span class="sr-only">(current)</span></a>
          </li>

        </ul>
        <form class="form-inline my-2 my-md-0">
          <a class="nav-link" href="./logout.php" style="color:white">Salir</a>
        </form>
      </div>
    </div>
  </nav>
