<?php


    class elementosMenu
    {
        public function mostarTablaUsu()
        {
            include("Configuracion.php");

            $query = mysqli_query($db,"SELECT * FROM orden_articulos")
            or die ('error: '.mysqli_error($db));

            echo 
            "
                <table class='table'>
                    <thead class='table-dark'>
                        <tr class='text-center'>
                            <th scope='col'>ID Orden Articulo</th>
                            <th scope='col'>ID Orden</th>
                            <th scope='col'>ID Producto</th>
                            <th scope='col'>Cantidad</th>

                        </tr>
                    </thead>
                <tbody class='text-center'>
            ";

            while ($data = mysqli_fetch_assoc($query))
            {
                echo 
                "
                    <tr>

                        <form method='GET' name='form2'>
                            <th scope='row'>$data[id]</th>
                            <th scope='row'>$data[order_id]</th>
                            <td>$data[product_id]</td>
                            <td>$data[quantity]</td>
                        </form>
                    </tr>

                ";
            }
            echo
            "
                </tbody>
                </table>

            ";
        }
    }

?>