<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLETA</title>
    <link href="caso2.css" rel="stylesheet">
</head>
<body>
    <?php
    $regalo = $_POST['cantidad']*2;
    $unidad = ($_POST['cantidad']*7.5);
    $importe = $unidad-($unidad*0.05);
    $descuento = $importe*0.07;
    $total = $importe - $descuento;
    ?> 

    <div class="generar-boleta">
        <h1>Gaseosa SAC</h1>
        <h2>Boleta</h2>
        <div class="tabla">
            <table>
                <thead>
                    <tr>
                        <th width="200px">NOMBRE</th>
                        <th width="200px">APELLIDO</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $_POST['nombre'] ?></td>
                        <td><?php echo $_POST['apellido'] ?></td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th width="150px">ASPECTO</th>
                        <th width="50px">TIPO</th>
                        <th width="100px">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Costo C/U: </td>
                        <td>S/.</td>
                        <td>7.50</td>
                    </tr>
                    <tr>
                        <td>Costo cantidad: </td>
                        <td>S/.</td>
                        <td><?php echo $unidad ?></td>
                    </tr>
                    <tr>
                        <td>Importe (-5%): </td>
                        <td>S/.</td>
                        <td><?php echo $importe ?></td>
                    </tr>
                    <tr>
                        <td>Descuento (7%): </td>
                        <td>S/.</td>
                        <td><?php echo $descuento ?></td>
                    </tr>
                    <tr>
                        <td>TOTAL: </td>
                        <td>S/.</td>
                        <td><?php echo $total ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>REGALOS: </th>
                        <th colspan="2"><?php echo $regalo . " UNIDADES"?></th>
                    </tr>
                </tfoot>
            </table> 
        </div>
            
    </div>
            
</body>
</html>