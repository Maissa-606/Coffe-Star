<?php


    class elementosMenu
    {
        public function mostarTablaUsu()
        {
            include("Configuracion.php");

            $query = mysqli_query($db,"SELECT * FROM orden")
            or die ('error: '.mysqli_error($db));

            echo 
            "
                <table class='table'>
                    <thead class='table-dark'>
                        <tr class='text-center'>
                            <th scope='col'>ID Orden</th>
                            <th scope='col'>ID Cliente</th>
                            <th scope='col'>Precio Pedido</th>
                            <th scope='col'>Fecha Creacion</th>

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
                            <th scope='row'>$data[customer_id]</th>
                            <td> L. $data[total_price]</td>
                            <td>$data[created]</td>
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