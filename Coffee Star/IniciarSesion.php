<?php

include("Configuracion.php");

session_start();
if(!empty($_POST)){
    $usuario = mysqli_real_escape_string($db,$_POST['user']);
    $password = mysqli_real_escape_string($db,$_POST['pass']);
    $password_encriptada = sha1($password);
    $sql = "SELECT id FROM clientes
            WHERE name = '$usuario' AND contrasena = '$password_encriptada'";
    $resultado = $db->query($sql);
    $rows = $resultado->num_rows;
    if($rows > 0){
        $row = $resultado->fetch_assoc();
        $_SESSION['id_usuario'] = $row ['id'];
        header("Location: index.php");
        
    }else{
        echo  "
        <script>
        alert('El usuario o Password Incorrectas');
        window.location = 'IniciarSesion.php';
        </script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
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
  
  
  <main class="form-signin w-100 m-auto">
    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
      <img class="mb-4"  id="icono" src="img/minLogo.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>

      <div class="form-floating">
        <input type="text" class="form-control" name="user" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Usuario</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Contraseña</label>
      </div>

      <div class="container mb-3">
        <label>¿No tienes cuenta?<br></label><a href="Registrarse.php" class="txt"> Registrate</a>
        
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar Sesión</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022–2022</p>
    </form>
  </main>





  </body>
</html>