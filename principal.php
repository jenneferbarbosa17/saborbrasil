<!DOCTYPE html>
<!--
    Criado em : 29/11/2019
    Autora    : Jennefer Barbosa
-->

<html>
 <head>
  <meta charset="UTF-8">
  <title>Sabores do Brasil</title>
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
 </head>
 <body>
  <!-- Menu -->
  <header>
   <div class="container">
        <img id="logotipo" src="img/logo.png" alt="Logotipo">
    </div>
   
   s
   
    <!-- Menu -->
    <div class="container">

        <div class="row">
   <nav id="menu" style="margin:24px 0;" class="pull-right">
  <a class="navbar-brand" href="javascript:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Logotipo</font></font></a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navb">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ligação</font></font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ligação</font></font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="javascript:void(0)"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desativado</font></font></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success my-2 my-sm-0" type="button"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Procurar</font></font></button>
    </form>
  </div>
</nav>
 </div>
 </div>
       
    <!--
 <nav>
     <div class="nav-wrapper">
         <a href="#" class="brand-logo">Logo</a>         
         <ul class="right hide-on-med-and-down">
            <li><a href="#">Angular</a></li>
             <li><a href="#">Ionic</a></li>
             <li><a href="#">TypeScript</a></li>
          <li><a href="#">Cordova</a></li>
       </ul>
   </div>
 </nav>
   
   
   <div class="container">

    <div class="container example2">
     <nav class="navbar navbar-default">
      <div class="container-fluid">
       <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Sabores do Brasil">
        </a>
       </div>
       <div id="navbar2" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
         <li class="active"><a href="#">Regiões</a></li>
         <li><a href="#">Receitas</a></li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
           <li><a href="#">Action</a></li>
           <li><a href="#">Another action</a></li>
           <li><a href="#">Something else here</a></li>
           <li class="divider"></li>
           <li class="dropdown-header">Nav header</li>
           <li><a href="#">Separated link</a></li>
           <li><a href="#">One more separated link</a></li>
           
          </ul>
         </li>
         <li>
        <input type="search" placeholder="buscar...">
       </li>
        </ul>
       </div>
       <!--/.nav-collapse 
      </div>
      <!--/.container-fluid 
     </nav>
    </div>
   </div>
--> 
  </header>

  <!-- Slide -->
  <div id="slide">
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
     <!-- Centro-Oeste -->
     <div class="carousel-item active">
      <img class="d-block w-100" src="img/centro-oeste/mojica.jpg?auto=yes&bg=777&fg=555&text=Primeiro Slide" width="300" height="600" alt="Primeiro Slide">
      <div class="carousel-caption d-none d-md-block">
       <h5>...</h5>
       <p>...</p>
      </div>
     </div>
     <!-- Nordeste -->
     <div class="carousel-item">
      <img class="d-block w-100" src="img/nordeste/baiao-de-dois.jpg?auto=yes&bg=666&fg=444&text=Segundo Slide" width="300" height="600" alt="Segundo Slide">
      <div class="carousel-caption d-none d-md-block">
       <h5>...</h5>
       <p>...</p>
      </div>
     </div>
     <!-- Norte -->
     <div class="carousel-item">
      <img class="d-block w-100" src="img/norte/caruruparaense.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" width="300" height="600" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
       <h5>...</h5>
       <p>...</p>
      </div>
     </div>
     <!-- Sudeste -->
     <div class="carousel-item">
      <img class="d-block w-100" src="img/sudeste/viradopaulista.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" width="300" height="600" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
       <h5>...</h5>
       <p>...</p>
      </div>
     </div>
     <!-- Sul -->
     <div class="carousel-item">
      <img class="d-block w-100" src="img/sul/pacoca-de-pinhao.jpg?auto=yes&bg=555&fg=333&text=Terceiro Slide" width="300" height=600" alt="Terceiro Slide">
      <div class="carousel-caption d-none d-md-block">
       <h5>...</h5>
       <p>...</p>
      </div>
     </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Próximo</span>
    </a>
   </div>

  </div>

  <!-- História -->
  <div id="historia"></div>

  <!-- Regiõess -->
  <div id="regioes"></div>

  <!-- Receitas -->
  <div id="receita"></div>

  <!-- Rodapé -->
  <div id="rodape"></div>


  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
 </body>
</html>
