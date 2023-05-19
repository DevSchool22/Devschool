  <div class="wrapper d-flex align-items-stretch">

    <!-- BARRA LATERAL -->
<nav id="sidebar"  class="active">
    <div style="position:fixed">
 
    <h1><a href="index.html" class="logo"><img src="images/LOGODEV.png" width="70" height="70" alt=""></a></h1>
      <ul  class=" list-unstyled components mb-5">
        <li class="active">
          <a class="navbar-item" href="home.php" ><span class="fa fa-home"></span> Novidades</a>
        </li>
        <li>
          <a class="navbar-item" href="perfil.php"><span class="fa fa-user"></span> Perfil</a>
        </li>
        <li>
          <a class="navbar-item" href="estudo.php"><span class="fa fa-sticky-note"></span> Curso</a>
        </li>
        <li>
          <a class="navbar-item" href="configuracoes.php"><span class="fa fa-cogs"></span> Config</a>
        </li>
        <li>
          <a class="navbar-item" href="ajuda.php"><span class="fa fa-paper-plane"></span> Ajuda</a>
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
    
    </div> 
</nav>

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
      
            <script src="js/dashboard.js"></script>


<!-- no conteudo fechar duas divs -->