<!-- Snack 4A:
Stampare in pagina, senza particolare stilizzazione il nome di ogni classe e sotto ognuna, i dati di ogni studente/studentessa presente nella relativa classe. -->
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
    <?php foreach ($classi as $classe => $studente) { ?>
    <ul>
        <li>
            <?php echo $classe; ?>
        </li>
        <?php
            foreach ($studente as $description) {
            ?>
        <li>
            <?php
                    echo $description['nome'] . ' ' . $description['cognome'] . ', ' . $description['anni'] . ' anni, ' . 'voto medio: ' . $description['voto_medio'] . ', linguaggio preferito: ' . $description['linguaggio_preferito'];
                    ?>
        </li>
        <li>
            <img src="<?php echo $description['immagine']; ?>"
                alt="<?php echo $description['nome'] . ' ' . $description['cognome']; ?>">
        </li>
        <?php
            }
            ?>
    </ul>
    <?php } ?>
</body>

</html>