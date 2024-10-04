<!-- Snack 4B:
Filtrare il nostro array e mostrare, sempre suddivisi per classe, esclusivamente gli studenti e le studentesse con voto medio sufficiente. -->
<?php
// vado a prendere la lista delle classi
require_once __DIR__ . '/list_classes.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-4</title>
</head>

<body>
    <!-- ciclo sulle classi per prendere l array dello studente -->
    <?php foreach ($classi as $classe => $studente) { ?>
    <ul>
        <li>
            <?php echo $classe; ?>
        </li>
        <?php
            // ciclo sull array dello studente per prendere i suoi valori come nome ecc...
            foreach ($studente as $description) {
                // filtro tra gli studenti con voto medio maggiore di 6
                if ($description['voto_medio'] > 6) {
            ?>
        <li>
            <?php
                        echo $description['nome'] . ' ' . $description['cognome'] . ', ' . $description['anni'] . ' anni, ' . 'voto medio: ' . $description['voto_medio'] . ', linguaggio preferito: ' . $description['linguaggio_preferito'];
                        ?>
            <img src="<?php echo $description['immagine']; ?>"
                alt="<?php echo $description['nome'] . ' ' . $description['cognome']; ?>">
        </li>
        <?php
                }
            }
            ?>
    </ul>
    <?php } ?>
</body>

</html>