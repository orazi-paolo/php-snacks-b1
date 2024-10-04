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
    <header>
        <!-- form per inserire il voto medio massimo -->
        <form action="snack4.php" method="get">
            <div class="mb-3">
                <!-- input per il voto medio massimo -->
                <label class="input-group-text" id="vote">Maximum average rating</label>
                <input type="number" name="vote" aria-label="vote" aria-describedby="vote" placeholder="from 0 to 10"
                    min="0" max="10" style="width: 300px;">
                <!-- input per il linguaggio di programmazione -->
                <label class="input-group-text" id="programming_language">Programming language</label>
                <input type="text" name="programming_language" aria-label="programming_language"
                    aria-describedby="programming_language" placeholder="Insert a programming language"
                    style="width: 300px;">
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
                    // se non c'è il voto medio massimo, lo setto a 10
                    if (empty($_GET['vote'])) {
                        $_GET['vote'] = 10;
                    }
                    // se non c'è il linguaggio di programmazione, lo setto a vuoto
                    isset($_GET['programming_language']) ? strtolower(trim($_GET['programming_language'])) : $_GET['programming_language'] = '';
                    // filtro tra gli studenti con voto medio minore del voto inserito
                    if ($description['voto_medio'] < $_GET['vote']) {
                        // filtro tra gli studenti con linguaggio di programmazione preferito uguale a quello inserito oppure se non è stato inserito nessun linguaggio
                        if (empty($_GET['programming_language']) || strtolower($description['linguaggio_preferito']) == $_GET['programming_language']) {
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
                        }
                        // }
                    }
                }
                ?>
        </ul>
        <?php } ?>

    </main>
</body>

</html>