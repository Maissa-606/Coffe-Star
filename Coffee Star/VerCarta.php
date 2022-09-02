<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Carrito de Compras</title>
    <link rel="shortcut icon" href="img/minLogo.png" type="image/x-icon">
    <meta charset="utf-8">
     <!--Links Boostrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/header.css">
    <style>
        h2{
         font-family: 'Lobster', cursive;
         color:#401014;
        }
        
        .container {
            padding: 20px;
        }

        input[type="number"] {
            width: 20%;
        }

    </style>
    <script>
        function updateCartItem(obj, id) {
            $.get("cartAction.php", {
                action: "updateCartItem",
                id: id,
                qty: obj.value
            }, function(data) {
                if (data == 'ok') {
                    location.reload();
                } else {
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>
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
                    <li role="presentation"><a href="VerMenu.php">Tienda</a></li>
                    <li role="presentation" class="active btn-panel"><a href="VerCarta.php">Carrito de Compras</a></li>
                    <li role="presentation"><a href="Pagos.php">Registrar Orden</a></li>
                </ul>
            </div>

            <div class="panel-body">


                <h2 class="text-center">Carrito de compras</h2>
                <br>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th>&nbsp;</th>
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
                                    <td><?php echo 'L.' . $item["price"] . ' COP'; ?></td>
                                    <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
                                    <td><?php echo 'L.' . $item["subtotal"] . ' COP'; ?></td>
                                    <td>
                                        <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">
                                    <p>No has solicitado ningún producto.....</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td> <br><a href="VerMenu.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Volver a la tienda</a></td>
                            <td colspan="2"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo 'L.' . $cart->total() . ' COP'; ?></strong></td>
                                <td><br><a href="Pagos.php" class="btn btn-success btn-block">Realizar Orden<i class="glyphicon glyphicon-menu-right"></i></a></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>

            </div>
            <div class="panel-footer">Desarollo por Maissa Sarmiento</div>
        </div>
        <!--Panek cierra-->

    </div>
</body>

</html>