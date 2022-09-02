<?php
// include database configuration file
include 'Configuracion.php';

// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

// redirect to home if cart is empty
if ($cart->total_items() <= 0) {
    header("Location: VerMenu.php");
}


if(!isset($_SESSION['id_usuario']))
{
  header("Location: IniciarSesion.php");
}
$iduser = $_SESSION['id_usuario'];
$sql = "SELECT id, name FROM clientes WHERE id = '$iduser' ";
$resultado = $db->query($sql);
$row = $resultado->fetch_assoc();

// set customer ID in session
$_SESSION['sessCustomerID'] = $iduser;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM clientes WHERE id = " . $_SESSION['sessCustomerID']);
$custRow = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enviar Orden</title>
    <link rel="shortcut icon" href="img/minLogo.png" type="image/x-icon">
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/header.css">



    <style>
        .container {
            padding: 20px;
        }

        .table {
            width: 65%;
            float: left;
        }

        .shipAddr {
            width: 30%;
            float: left;
            margin-left: 30px;
        }

        .footBtn {
            width: 95%;
            float: left;
        }

        .orderBtn {
            float: right;
        }
    </style>
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
                    <li role="presentation"><a href="VerMenu.php">Tienda</a></li>
                    <li role="presentation"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation" class="active"><a href="Pagos.php">Enviar Orden</a></li>
                    </ul>
            </div>

            <div class="panel-body">
                <h1>Vista previa de la Orden</h1>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["name"]; ?></td>
                                    <td><?php echo '$' . $item["price"] . ' COP'; ?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' COP'; ?></td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="4">
                                    <p>No hay articulos en tu carta......</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' COP'; ?></strong></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>
                <div class="shipAddr">
                    <h4>Detalles de envío</h4>
                    <p><?php echo $custRow['name']; ?></p>
                    <p><?php echo $custRow['email']; ?></p>
                    <p><?php echo $custRow['phone']; ?></p>
                    <p><?php echo $custRow['address']; ?></p>
                </div>
               
                <div class="footBtn">
                <br>
                    <a href="VerMenu.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continuar Comprando</a>
                    <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
                </div>
            </div>
           </div>
        <!--Panek cierra-->
    </div>
</body>

</html>