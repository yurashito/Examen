<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <table border="1px">
            <th></th>
        <?php foreach($Tableau as $tab) { ?>
           <th><?php echo $tab['Mois'] ?></th>
        <?php } ?>
        <?php foreach($Tableau as $tab) { ?>
            <tr>
                <td><?php echo $tab['NomObjectif'] ?></td>
                <?php foreach($Tableau as $tab) { ?>
                    <td><?php echo $tab['NombreClient'] ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table> -->

    <!DOCTYPE html>
<html>
<head>
    <title>Tableau Croisé</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Objectif / Mois</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
        </tr>
        <?php
        $objectifs = array();
        $mois = array();
        
        // Parcourir les données pour collecter les objectifs et les mois uniques
        foreach ($Tableau as $row) {
            $objectifs[$row['NomObjectif']] = true;
            $mois[$row['Mois']] = true;
        }
        
        // Afficher les lignes du tableau pour chaque objectif
        foreach ($objectifs as $objectif => $value) {
            echo '<tr>';
            echo '<th>' . $objectif . '</th>';
            
            // Afficher les colonnes du tableau pour chaque mois
            foreach ($Tableau as $mois => $value) {
                $nombreClient = 0;
                
                // Calculer le total des clients pour l'objectif et le mois donnés
                foreach ($Tableau as $row) {
                    if ($row['NomObjectif'] == $objectif && $row['Mois'] == $mois) {
                        $nombreClient += $row['NombreClient'];
                    }
                }
                
                echo '<td>' . $nombreClient . '</td>';
            }
            
            echo '</tr>';
        }
        ?>
    </table>
</body>
</html>

</body>
</html>