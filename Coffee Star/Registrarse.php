<?php
include("Configuracion.php");

//Codigo de Registro a Base de datos
if(isset($_POST['registro']))
{
  //Declaracion de Variables
    $nombre = mysqli_real_escape_string($db,$_POST['nombre']); //nombre de los input donde se toma la informacion
    $correo = mysqli_real_escape_string($db,$_POST['correo']);
    $password = mysqli_real_escape_string($db,$_POST['pass']);
    $password_encriptada = sha1($password);
    $telefono = mysqli_real_escape_string($db,$_POST['telefono']);
    $direccion = mysqli_real_escape_string($db,$_POST['direccion']);


    $sqluser = "SELECT id FROM clientes 
						WHERE name = '$nombre'";
    $resultadouser = $db->query($sqluser);
    $filas = $resultadouser->num_rows;
    if($filas > 0)
    {
        echo  "<script>
        alert('El usuario Ya existe');
        window.location = 'Registrarse.php';
        </script>";
    }else
    {
        $sqlusuario = "INSERT INTO clientes (name,email,contrasena,phone,address) VALUES ('$nombre','$correo','$password_encriptada','$telefono','$direccion')";
        $resultadousuario = $db->query($sqlusuario);
        if($resultadousuario > 0){
            echo  "<script>
            alert('Registro Existoso');
            window.location = 'Registrarse.php';
            </script>";
        }else{
            echo  "<script>
            alert('Error al Registrarse');
            window.location = 'Registrarse.php';
            </script>";
        }
    }
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registra tu Cuenta</title>
  <link rel="shortcut icon" href="img/minLogo.png" type="image/x-icon">

    

  
  <!--Links Boostrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    <!--Link Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    <!--Link Css-->
 
  <link rel="stylesheet" href="css/signin.css">
</head>

<body class="text-center">
  
  
  <main class="form-signin w-100 m-auto" style="height:auto;">
    <form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <img class="mb-4"  id="icono" src="img/minLogo.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Registrate</h1>


      <div class="form-floating">
        <input type="text" class="form-control"  name="nombre" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="correo" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Correo Electrónico</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control"  name="pass" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input type="phone" class="form-control"  name="telefono" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Telefono</label>
      </div>
      <div class="form-floating">
        <input type="address" class="form-control"  name="direccion" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Direccion</label>
      </div>
      <div class="container mb-3">
        <label>¿Tienes cuenta?<br></label><a href="IniciarSesion.php" class="txt"> Inicia Sesión</a>
        
      </div>
      <button  name="registro" class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022–2022</p>
    </form>
  </main>
  </body>
</html>