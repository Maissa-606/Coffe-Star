<?php


    class elementosMenu
    {
        public function mostarTablaUsu()
        {
            include("Configuracion.php");

            $query = mysqli_query($db,"SELECT * FROM mis_productos")
            or die ('error: '.mysqli_error($db));

            echo 
            "
                <table class='table'>
                    <thead class='table-dark'>
                        <tr class='text-center'>
                            <th scope='col'>ID</th>
                            <th scope='col'>Producto</th>
                            <th scope='col'>Precio Unitario</th>
                            <th scope='col'>Descripcion</th>

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
                            <td>$data[name]</td>
                            <td> L. $data[price]</td>
                            <td>$data[description]</td>
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