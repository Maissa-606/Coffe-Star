<?php


    class elementosMenu
    {
        public function mostarTablaUsu()
        {
            include("Configuracion.php");

            $query = mysqli_query($db,"SELECT * FROM clientes")
            or die ('error: '.mysqli_error($db));

            echo 
            "
                <table class='table'>
                    <thead class='table-dark'>
                        <tr class='text-center'>
                            <th scope='col'>ID</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Correo</th>
                            <th scope='col'>Telefono</th>
                            <th scope='col'>Dirección</th>

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
                            <td>$data[email]</td>
                            <td>$data[phone]</td>
                            <td>$data[address]</td>
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