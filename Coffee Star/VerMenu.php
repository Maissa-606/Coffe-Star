<?php
include("Configuracion.php");
session_start();
if(!isset($_SESSION['id_usuario']))
{
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
    <link rel="stylesheet" href="css/menu.css">

    
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
            <a class="nav-link" href="Nosotros.php">Sobre Nosotros</a>
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

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Menú para Pedidos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item  opcion">
                        <a class="nav-link" href="#">Desayuno</a>
                    </li>
                    <li class="nav-item  opcion">
                        <a class="nav-link" href="#">Almuerzo</a>
                    </li>
                    <li class="nav-item  opcion">
                        <a class="nav-link" href="#">Postres</a>
                    </li>
                    <li class="nav-item  opcion">
                        <a class="nav-link" href="#">Bebidas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>

 
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img id="img-slider" src="img/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Te ofrecemos Postres</h5>
                <p>Disfruta nuestra variedad de postres</p>
            </div>
            </div>
            <div class="carousel-item">
            <img id="img-slider" src="img/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Te ofrecemos Bebidas</h5>
                <p>Para tus tardes de relax, una gran variedad de bebidas frias o calientes</p>
            </div>
            </div>
            <div class="carousel-item">
            <img id="img-slider"  src="img/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Te ofrecemos Almuerzos</h5>
                <p>Comer lo suficiente hará tus dias de trabajo efectivo</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    
    <div class="container-fluid div-destacable">

      <div class="container-fluid">
       
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tienda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="VerCarta.php">Carrito de Compras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Pagos.php">Realizar Pedido</a>
          </li>
      </ul>
      <br><br>
        <h2 class="text-center h2-1">Productos Destacables</h2>

        
        <div class="d-flex flex-wrap justify-content-center">
          <div  id="products" class="row mt-5 aling-items-center justify-content-center"> <!--FILA UNO-->
          <?php
                //get rows query
                $query = $db->query("SELECT * FROM mis_productos ORDER BY id DESC LIMIT 10");
                if ($query->num_rows > 0) 
                {
                    while ($row = $query->fetch_assoc()) 
                {
            ?>
            <div class="col  me-4 mb-3 justify-content-center">
              <div class="card card-prod" style="width: 16rem; height: 27rem;">
                <img src="img/tresleches.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center"><?php echo $row["name"]; ?></h5>
                  <h6 class="card-subtitle mb-2 text-center"><?php echo 'L.' . $row["price"] . ' COP'; ?></h6>
                  <p class="card-text"><?php echo $row["description"]; ?></p>
                 
                  <div class="col">
                    <a class="btn btn-success btn-outline-warning btn-comprar" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                  </div>
                
                </div>
              </div>
            </div>
            <?php }
            } else { ?>
                <p>Aun no se ha agregado productos.....</p>
            <?php } ?>
            
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