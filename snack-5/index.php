<?php
require_once __DIR__ . '/function.php';
$word = $_GET['word'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is palindrome?</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="row">
            <div class="col-12">
                <h1>
                    IS PALINDROME?
                </h1>
            </div>
            <div class="col-12">
                <form action="index.php" method="GET">
                    <label for="word">
                        Inserisci una parola:
                    </label>
                    <input type="text" placeholder="Inserisci una parola" name="word" id="word">
                    <button type="submit" class="btn btn-primary">Controlla</button>
                </form>
            </div>
            <div class="col-12">
                <p>
                    <?php
                    // se c'è
                    if (isset($word)) {
                        // se è palindroma
                        if (isPalindrome($word)) {
                            echo 'La parola ' . $word . ' è palindroma';
                            // altrimenti
                        } else {
                            echo 'La parola ' . $word . ' non è palindroma';
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </section>
</body>

</html>