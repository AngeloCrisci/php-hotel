<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP HOTEL</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

<body>
<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

$has_parking = isset($_GET["parking"]);

?>

<h1 class="text-center m-4">
    HOTELS
</h1>



<div class="container">
    <form action="" method="GET">
        <div class="input-group mb-3">
        <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" id="parking" name="parking"
            <?php if ($has_parking) echo 'checked'; ?>
            >
            <label for="parking" class="from-check-label ms-3 fw-bold">
                Cerca solo gli Hotel che hanno il parcheggio
            </label>
        </div>
        <button type="submit" class="btn btn-primary">CERCA!</button>
        </div>
    </form>
</div>



<div class="container">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Nome:</th>
        <th scope="col">Descrizione:</th>
        <th scope="col">Parcheggio</th>
        <th scope="col">Voto</th>
        <th scope="col">Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php  
        foreach($hotels as $hotel) { 
            if(!$has_parking || $hotel["parking"]) {
            ?>
        <td><?= $hotel["name"]; ?></td>
        <td><?= $hotel["description"]; ?></td>
        <td><?= $hotel["parking"] ? "si" : "no"; ?></td>
        <td><?= $hotel["vote"]; ?></td>
        <td><?= $hotel["distance_to_center"]; ?></td>
        </tr>
        <?php } }?>
    </tbody>
    </table>
</div>
</body>
</html>