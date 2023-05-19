<!DOCTYPE html>
<html lang="pt">

<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="css/dashboard.css">
  <script>
    $(document).ready(function () {
      // Carrega a página inicial ao carregar o site
      $('.content').load('home.php');

      // Ao clicar em um item da navbar
      $('.navbar-item').on('click', function (e) {
        e.preventDefault(); // Previne a ação padrão do link
        var page = $(this).data('page'); // Obtém o valor do atributo "data-page"
        $('.content').load(page); // Carrega o conteúdo da página correspondente
      });
    });
  </script>
</head>

<body>

  <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-storage.js"></script>

  <div class="wrapper d-flex align-items-stretch">

    <!-- BARRA LATERAL -->
    <nav id="sidebar"  class="active">
    <div style="position:fixed">
 
    <h1><a href="index.html" class="logo"><img src="images/LOGODEV.png" width="70" height="70" alt=""></a></h1>
      <ul  class=" list-unstyled components mb-5">
        <li class="active">
          <a class="navbar-item" href="#" data-page="home.php"><span class="fa fa-home"></span> Novidades</a>
        </li>
        <li>
          <a class="navbar-item" href="#" data-page="perfil.php"><span class="fa fa-user"></span> Perfil</a>
        </li>
        <li>
          <a class="navbar-item" href="#" data-page="Estudo.php"><span class="fa fa-sticky-note"></span> Curso</a>
        </li>
        <li>
          <a class="navbar-item" href="#" data-page="config.php"><span class="fa fa-cogs"></span> Config</a>
        </li>
        <li>
          <a class="navbar-item" href="#" data-page="ajuda.php"><span class="fa fa-paper-plane"></span> Ajuda</a>
        </li>
      </ul>

      <div class="footer">
        <p>
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is
          made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
            target="_blank">Colorlib.com</a>
        </p>
      </div>
    
    </div> </nav>

    <div id="content" class="p-4 p-md-5">

      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>

          <li class=" d-block d-sm-none nav-item dropdown">
            <a class="navbar-toggler" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="assets/imagem/Profile-Avatar-PNG-Picture.png" alt="Profile" class="rounded-circle"
                width="30" height="30">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
              <li><a class="dropdown-item" href="#">Configurações</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" onclick="sair()">Sair</a></li>
            </ul>
          </li>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/imagem/Profile-Avatar-PNG-Picture.png" alt="Profile" class="rounded-circle"
                    width="30" height="30">
                  <span id="usuario" class="ms-2"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="perfil.php">Perfil</a></li>
                  <li><a class="dropdown-item" href="#">Configurações</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" onclick="sair()">Sair</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- CONTEUDO PHP -->

      <main class="content">
        <!-- Conteúdo do PHP será carregado aqui -->
      </main>

    </div>
  </div>
<script src="js/firebaseconfig.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/dashboard.js"></script>
</body>

</html>