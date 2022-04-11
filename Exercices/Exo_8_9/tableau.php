<?php
    require "connect.php";

    $obj = new Db;
    $result = $obj->insertDb();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice 9</title>

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    </head>

    <body>
        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Id du chien</th>
                    <th>Nom du chien</th>
                    <th>Age du chien</th>
                    <th>Race du chien</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($result as $value) { ?>
                    <tr>
                        <td><?php echo $value['id_chien'] ?></td>
                        <td><?php echo $value['nom_chien'] ?></td>
                        <td><?php echo $value['age_chien'] ?></td>
                        <td><?php echo $value['race_chien'] ?></td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
        <a href="index.php">Retour</a>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
        <script src="tab.js"></script>
    </body>
</html>