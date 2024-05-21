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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>
    <!-- table's hotels -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NOME</th>
                <th scope="col">DESCRIZIONE</th>
                <th scope="col">PARCHEGGIO</th>
                <th scope="col">VOTO</th>
                <th scope="col">DISTANZA DAL CENTRO</th>
            </tr>
        </thead>
        <?php foreach ($hotels as $cur_hotel) { ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $cur_hotel["name"] ?></th>
                    <td><?php echo $cur_hotel["description"] ?></td>
                    <td><?php echo $cur_hotel["parking"] ?></td>
                    <td><?php echo $cur_hotel["vote"] ?></td>
                    <td><?php echo $cur_hotel["distance_to_center"]?> KM</td>
                </tr>
            </tbody>
        <?php } ?>
    </table>
    <!-- /table's hotels -->
</body>

</html>