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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Snack 4C:
filtriamo in base ad esso solo gli studenti che abbiano una media esclusivamente inferiore al voto inserito. -->
    <header>
        <form action="snack4.php" method="get">
            <div class="mb-3">
                <label class="input-group-number" id="vote">Maximum average rating</label>
                <input type="number" name="vote" aria-label="vote" aria-describedby="vote" placeholder="from 0 to 10"
                    min="0" max="10" style="width: 300px;">
            </div>
            <button type="submit">Send</button>
        </form>

    </header>
    <main>
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
                    // if ($description['voto_medio'] > 6) {
                ?>
            <li>
                <?php
                        echo $description['nome'] . ' ' . $description['cognome'] . ', ' . $description['anni'] . ' anni, ' . 'voto medio: ' . $description['voto_medio'] . ', linguaggio preferito: ' . $description['linguaggio_preferito'];
                        ?>
                <img src="<?php echo $description['immagine']; ?>"
                    alt="<?php echo $description['nome'] . ' ' . $description['cognome']; ?>">
            </li>
            <?php
                    // }
                }
                ?>
        </ul>
        <?php } ?>

    </main>
</body>

</html>