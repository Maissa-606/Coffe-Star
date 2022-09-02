<?php
if (!isset($_REQUEST['id'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Orden Completada</title>
  <link rel="shortcut icon" href="img/minLogo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/header.css">
  <meta charset="utf-8">
  <style>
    .container {
      padding: 20px;
    }

    p {
      color: #34a853;
      font-size: 18px;
    }
  </style>
</head>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="img/minLogo.png" alt="" width="35" height="35" class="d-inline-block align-text-center">
            CoffeeStar
        </a>
        </div>
    </nav>
  </header>
  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">

        <ul class="nav nav-pills">
          <li role="presentation" class="active"><a href="index.php">Volver</a></li>
         </ul>
      </div>

      <div class="panel-body">

        <h1>Estado de tu Orden</h1>
        <p>La Orden se ha enviado exitósamente. El ID de tu pedido es <?php echo $_GET['id']; ?></p>
      </div>
      <div class="panel-footer">Diseñado por Maissa Sarmiento</div>
    </div>
    <!--Panek cierra-->
  </div>
</body>

</html>