<!DOCTYPE html>
<html class="loading" lang="es">

  <!-- BEGIN: Head -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Intranet de la Municipalidad Provincial de Chincha">
    <meta name="keywords" content="Municipalidad Provincial de Chincha">
    <meta name="author" content="Municipalidad Provincial de Chincha">
    <title>Intranet - Municipalidad Provincial de Chincha</title>
    <link rel="shortcut icon" type="image/x-icon" href="./paginas/assets/images/favicon/favicon.png">

    <!-- BEGIN: Icon -->
    <link href="./paginas/assets/fonts.googleapis.com/icone91f.css?family=Material+Icons" rel="stylesheet">
    <!-- END: Icon -->

    <!-- BEGIN: VENDOR CSS -->
    <link rel="stylesheet" type="text/css" href="./paginas/assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS -->

    <!-- BEGIN: Page Level CSS -->
    <link rel="stylesheet" type="text/css" href="./paginas/assets/css/themes/horizontal-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="./paginas/assets/css/themes/horizontal-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="./paginas/assets/css/layouts/style-horizontal.min.css">
    <!-- END: Page Level CSS -->
    
  </head>
  <!-- END: Head -->

  <!-- BEGIN: Body -->
  <body class="horizontal-layout page-header-light horizontal-menu preload-transitions 2-columns" data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header -->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">

        <!-- BEGIN: Superior nav start -->
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">

            <!-- BEGIN: Logo lado izquierdo -->
            <ul class="left">
              <li>
                <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="./"><img src="./paginas/assets/images/logo/logo.png" alt="materialize logo"><span class="logo-text hide-on-med-and-down">Intranet Municipal</span></a></h1>
              </li>
            </ul>
            <!-- END: Logo lado izquierdo -->

            <!-- BEGIN: Opciones de menu lado derecho -->
            <ul class="navbar-list right">
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="./paginas/assets/images/avatar/avatar.png" alt="avatar"><i></i></span></a></li>
            </ul>
            <!-- END: Opciones de menu lado derecho -->

            <!-- BEGIN: Profile-dropdown -->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i>Salir</a></li>
            </ul>
            <!-- END: Profile-dropdown -->

          </div>
        </nav>
        <!-- END: Superior nav start -->

        <!-- BEGIN: Horizontal nav start -->
        <nav class="white hide-on-med-and-down" id="horizontal-nav">
          <div class="nav-wrapper">
            <ul class="left hide-on-med-and-down" id="ul-horizontal-nav" data-menu="menu-navigation">
              <li><a class="" href="./" data-target=""><i class="material-icons">dashboard</i><span><span class="dropdown-title" data-i18n="Dashboard">Inicio</span></span></a>
              </li>
              <li><a class="" href="./paginas/mesaPartes.php" data-target=""><i class="material-icons">dvr</i><span><span class="dropdown-title" data-i18n="Templates">Mesa de partes</span></span></a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- END: Horizontal nav start -->

      </div>
    </header>
    <!-- END: Header-->

    <!-- BEGIN: Vertical nav start -->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-fixed hide-on-large-only">
      <div class="brand-sidebar sidenav-light"></div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed hide-on-large-only menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="bold"><a class="waves-effect waves-cyan " href="./"><i class="material-icons">dashboard</i><span class="menu-title" data-i18n="Mail">Inicio</span></a>
        </li>

        <!-- BEGIN: Sección módulos -->
        <li class="navigation-header"><a class="navigation-header-text">Módulos</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="./paginas/mesaPartes.php"><i class="material-icons">dvr</i><span class="menu-title" data-i18n="Mail">Mesa de partes</span></a>
        </li>
        <!-- END: Sección módulos -->

      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: Vertical nav start -->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section">

              <!-- BEGIN: Servicios municipales -->
              <div id="ecommerce-offer">
                <div class="row">
                  <a href="./paginas/mesaPartes.php">
                  <div class="col s12 m6 l3">
                    <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3 animate fadeUp">
                      <div class="card-content center">
                        <img src="./paginas/assets/images/icon/registro.png" class="width-40 border-round z-depth-5 responsive-img" alt="image" />
                        <h5 class="white-text lighten-4 mb-0">Mesa de partes</h5>
                        <h5 class="white-text lighten-4 mt-0">virtual</h5>
                      </div>
                    </div>
                  </div>
                  </a>
                  <div class="col s12 m6 l3">
                  </div>
                  <div class="col s12 m6 l3">
                  </div>
                  <div class="col s12 m6 l3">
                  </div>
                </div>
              </div>
              <!-- END: Servicios municipales -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- BEGIN: Footer-->
    <footer class="page-footer footer footer-static footer-dark gradient-45deg-light-blue-cyan gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container">
          <span>&copy; 2021 Municipalidad Provincial de Chincha. Todos los derechos reservados.</span>
        </div>
      </div>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN VENDOR JS-->
    <script src="./paginas/assets/js/vendors.min.js"></script>

    <!-- BEGIN THEME  JS-->
    <script src="./paginas/assets/js/plugins.min.js"></script>
    <!-- END THEME  JS-->

  </body>
  <!-- END: Body -->

</html>