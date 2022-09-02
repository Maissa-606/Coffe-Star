<?php
include("Configuracion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
  header("Location: IniciarSesion.php");
}
$iduser = $_SESSION['id_usuario'];
$sql = "SELECT id, name FROM clientes WHERE id = '$iduser' ";
$resultado = $db->query($sql);
$row = $resultado->fetch_assoc();
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CoffeeStar</title>
    <link rel="shortcut icon" href="img/minLogo.png" type="image/x-icon">
    
    <!--Links Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <!--Link Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Titan+One&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">

    <!--Link Css-->
    <link rel="stylesheet" href="css/header.css">
    


</head>
<body>

  <header>
    <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
          <img src="img/minLogo.png" alt="" width="65" height="65" class="d-inline-block align-text-center">
          CoffeeStar
      </a>
     
     
     

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="VerMenu.php">Ver Menú</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
              <!--PHP-->
            <span class="nav-link nombre"><?php echo utf8_encode($row['name']);?></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="salir.php"><span class="txt-1">Cerrar Sesion</span></a>
          </li>
          

        </ul>
      </div>
    </div>
    </nav>
  </header>
  <div class="container-fluid img-div contenedor  aling-text-center">
    <img  id="div-coff"src="img/backg1.jpg" class="img-fluid img" alt="...">
  </div>
  <div class="container-fluid div-menu">
    <h2 class="text-center">Lo que Ofrecemos</h2>
  </div>
    <div class="d-flex flex-wrap ms-2 mb-5 justify-content-center"> <!--Permite las cartas flexionarse-->
      <div class="row mt-5 aling-items-center justify-content-center">
        <div class="col  me-4 mb-3 justify-content-center">
          <div class="card" style="width: 16rem; height: 16rem;">
            <img src="img/postre.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-grid gap-2">
                <button class="btn btn-outline-warning" type="button">Desayunos</button>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col me-4 mb-3 justify-content-center">
          <div class="card justify-content-center" style="width: 16rem; height: 16rem;">
            <img src="img/bebidas.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-grid gap-2">
                <button class="btn btn-outline-warning" type="button">Bebidas</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col me-4 mb-3 align-self-center">
          <div class="card" style="width: 16rem; height: 16rem;">
            <img src="img/postre1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-grid gap-2">
                <button class="btn btn-outline-warning" type="button">Postres</button>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col  me-4 mb-3 align-self-center">
          <div class="card" style="width: 16rem; height: 16rem;">
            <img src="img/almuerzo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-grid gap-2">
                <button class="btn btn-outline-warning" type="button">Almuerzos</button>
              </div>
            
            </div>
          </div>
        </div>
     </div>
    </div>

    <div class="container-fluid div-destacable">
      <div class="container-fluid">
        <h2 class="text-center h2-1">Productos Destacables</h2>
        <div class="d-flex flex-wrap justify-content-center">
          <div class="row mt-5 aling-items-center justify-content-center">
            <div class="col  me-4 mb-3 justify-content-center">
              <div class="card card-prod" style="width: 16rem; height: 27rem;">
                <img src="img/tresleches.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Pastel Tres Leches</h5>
                  <h6 class="card-subtitle mb-2 text-center">L.200.00</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 
                  <div class="d-grid gap-2">
                    <button class="btn btn-outline-warning btn-comprar" type="button">Comprar Ahora</button>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col  me-4 mb-3 justify-content-center">
              <div class="card card-prod" style="width: 16rem; height: 27rem;">
                <img src="img/capuchino.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Capuchino</h5>
                  <h6 class="card-subtitle mb-2 text-center">L.120.00</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 
                  <div class="d-grid gap-2">
                    <button class="btn btn-outline-warning btn-comprar" type="button">Comprar Ahora</button>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col  me-4 mb-3 justify-content-center">
              <div class="card card-prod" style="width: 16rem; height: 27rem;">
                <img src="img/Pancakes.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Panqueques</h5>
                  <h6 class="card-subtitle mb-2 text-center">L.170.00</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 
                  <div class="d-grid gap-2">
                    <button class="btn btn-outline-warning btn-comprar" type="button">Comprar Ahora</button>
                  </div>
                
                </div>
              </div>
            </div>
            <div class="col  me-4 mb-3 justify-content-center">
              <div class="card card-prod" style="width: 16rem; height: 27rem;">
                <img src="img/alitas.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center">Alitas de Pollo</h5>
                  <h6 class="card-subtitle mb-2 text-center">L.120.00</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                 
                  <div class="d-grid gap-2">
                    <button class="btn btn-outline-warning btn-comprar" type="button">Comprar Ahora</button>
                  </div>
                
                </div>
              </div>
            </div>
            
          

           </div>
      </div>
    </div>
    </div>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top ralla">
        <p class="col-md-4 mb-0 link">&copy; 2022 CoffeeStar, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <img id="foot"src="img/minLogo.png" alt="" width="65" height="65" class="d-inline-block align-text-center">
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="index.php" class="nav-link foot px-2 ">Inicio</a></li>
          <li class="nav-item"><a href="VerMenu.php" class="nav-link foot px-2 ">Ver Menu</a></li>
          <li class="nav-item"> <a href="salir.php" class="nav-link foot px-2 "><span>Cerrar Sesion</span></a></li>
        </ul>
      </footer>
    </div>
   

    

    
</body>
</html>