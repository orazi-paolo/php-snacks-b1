<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, e mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack-1</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- creo il form -->
    <form action="index.php" method="GET" class="container mt-3">
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm" name="name">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            <input type="email" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm" name="email">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Age</span>
            <input type="number" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-sm" name="age">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>

    <!-- se i caratteri del nome sono meno di 3 stampa accesso negato -->
    <!-- se l'email non contiene la chiocciola e il punto stampa accesso negato -->
    <!-- se age non è un numero stampa accesso negato -->
    <!-- altrimenti Accesso riuscito -->
    <p>
        <?php
        if (isset($_GET['name'], $_GET['email'], $_GET['age'])) {
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];

            if (strlen($name) < 3 || !str_contains($email, '@') || !str_contains($email, '.') || !is_numeric($age)) {
                echo 'Accesso negato';
            } else {
                echo 'Accesso riuscito';
            }
        } else {
            echo 'Accesso negato: Tutti i campi devono essere riempiti.';
        }
        ?>
    </p>
</body>

</html>