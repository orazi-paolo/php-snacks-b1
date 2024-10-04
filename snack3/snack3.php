<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>

<body>
    <h2>Teachears</h2>
    <ul class="gray">
        <!-- giro nella lista degli insegnanti e stampo in pagina il nome e cognome di ogni teacher -->
        <?php foreach ($db['teachers'] as $teacher) { ?>
        <li> <?php echo $teacher['name'] . ' ' . $teacher['lastname'] ?></li>
        <?php } ?>
    </ul>
    <h2>
        PM
    </h2>
    <!-- giro nella lista dei pm e stampo in pagina il nome e cognome di ogni pm -->
    <ul class="green">
        <?php foreach ($db['pm'] as $pm) { ?>
        <li>
            <?php echo $pm['name'] . ' ' . $pm['lastname'] ?>
        </li>
        <?php } ?>
    </ul>

</body>

</html>
<style>
.gray {
    background-color: gray;
}

.green {
    background-color: green;
}
</style>