<nav class="navbar navbar-expand-md navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="./admin/images/logo1.png" alt="logo"/>
      <img src="./admin/images/car.png" alt="logo"/>&nbsp;
      <span class="navbar-toggler-icon"></span>&nbsp;
      <a href="index.php?page=login.php" class="black font-weight-bold">
           <i class="fas fa-key"></i> <!-- ou autre icône -->
     </a>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent ">
      <a href="" class="navbar-brand collapse navbar-collapse">
          <img src="./admin/images/logo1.png" style="height: 90px" alt="logo">
      </a>
      <div >
    <ul class="navbar-nav mr-auto">
      <li   class="alert alert-primary" role="alert">
          <a class="nav-link" href="./index.php?page=accueil.php" class="alert-link"class="aligner txtGras"><h3 class='para'>Accueil</h3> </a>
      </li>
      <li class="alert alert-secondary" role="alert">
          <a class="nav-link" href="./index.php?page=Rendez_vous.php"  class="alert-link"><h3 class='para'> rendez-vous</h3></a>
      </li>
      <li class="alert alert-secondary" role="alert">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <h3 class='para'>Options</h3>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./index.php?page=List_piece.php"class="aligner txtGras">PIECES A VENDRE</a><!--pour faire appel a une page exixtant dans nos pages-->
          <a class="dropdown-item" href="./index.php?page=jquery1.php">jquery</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="alert alert-primary" role="alert">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="alert alert-secondary" role="alert">
        <a class="nav-link" href="./index.php?page=login.php ">Connect <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    </div>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<!--<i class="far fa-edit"></i>-->