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
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img id="logotipo" src="img/logo.png" alt="Logotipo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div id="itens-menu">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item active mr-sm-3">
       <a class="nav-link" href="#">Ínicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown mr-sm-3">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Regiões
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Centro-Oeste</a>
        <a class="dropdown-item" href="#">Nordeste</a>
        <a class="dropdown-item" href="#">Norte</a>
        <a class="dropdown-item" href="#">Sul</a>
        <a class="dropdown-item" href="#">Sudeste</a>
      </li>
      <li class="nav-item dropdown mr-sm-3">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Receitas
       </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Centro-Oeste</a>
        <a class="dropdown-item" href="#">Nordeste</a>
        <a class="dropdown-item" href="#">Norte</a>
        <a class="dropdown-item" href="#">Sul</a>
        <a class="dropdown-item" href="#">Sudeste</a>
      </li>
      <li class="nav-item mr-sm-3">
       <a class="nav-link" href="#">#Experimente</a>
      </li>
      <li class="nav-item mr-sm-3">
       <a class="nav-link" href="#">Galeria</a>
      </li>
     </ul>
    </div>   
   </nav>
  </header>
  
  <!-- Slide -->
  <div id="geral">
   <div id="cabecalho"></div>
   <div id="principal">
    <div id="conteudo-1"</div>
    <div id="conteudo-2">
     <div id="conteudo-2-1">
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

     </div>
     <div id="conteudo-2-2"></div>
    </div>
   </div>
   <div id="rodape"></div>
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
