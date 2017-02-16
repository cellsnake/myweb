<?php
/**
 * Created by PhpStorm.
 * User: juanks
 * Date: 10/02/17
 * Time: 19:14
 */

include "mydb.php";

$user_email = $_GET['email'];

$sql = "
SELECT
  mw_user.name,
  mw_subject.sname,
  mw_subject.mark
FROM mw_subject
  INNER JOIN mw_user ON mw_subject.id_user = mw_user.id 
WHERE mw_user.email = '" . $user_email . "' ;";

$res = get_result_subject($sql);



?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultados 2º Trimestre</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="css/base.css"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script type="text/javascript">

    </script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <a class="navbar-brand" href="login.php">
                <img style="float: left;" alt="Brand" src="img/cell_logo.png" width="25px"><span>Home</span>
            </a>
        </div>
    </nav>
    <h4 class="text-center">Resultados 2º Trimestre para <?php echo $res[0]['name'] ?></h4>
    <?php
    if (!empty($res)) {
        ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Asignatura</th>
                <th class="text-center">Calificación</th>
                <th class="text-center">Aprobado</th>
            </tr>

            </thead>
            <tbody>
            <?php

            foreach ($res as $key => $value) {
                echo "<tr>";
                if ($value['mark'] >= 5) {
                    echo "<td>" . $value['sname'] . "</td>";
                    echo "<td class='text-center'>" . $value['mark'] . "</td>";
                    echo "<td class='text-center'> Apto </td>";

                }
                if ($value['mark'] < 5) {
                    echo "<td style='color:tomato;'>" . $value['sname'] . "</td>";
                    echo "<td style='color:tomato;' class='text-center'>" . $value['mark'] . "</td>";
                    echo "<td style='color:tomato;' class='text-center'> No Apto </td>";
                }

                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    <?php } ?>
    <footer class="text-center">
        <span><i>Copyright 2016 cellsnaketutoriales.blogspot.com</i></span>
    </footer>
</div>

</body>
</html>
