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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .row {
            margin: 0 auto;
            max-width: 1170px;
            padding-top: 70px;
        }
    </style>
    <title>Hotels</title>
</head>

<body>

    <div class="cotainer">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>

                        <!-- inizio a fare il ciclo di tutti gli 'oggetti' dentro all'array $hotels  -->
                        <?php
                        foreach ($hotels[0] as $chiave => $valore) {
                        ?>
                            <th scope="col">
                                <?php echo $chiave; ?>
                            </th>

                        <?php }; ?>
                    </tr>
                </thead>

                <tbody>
                    <!-- creo due cicli annidati dove il primo deve scorrere tutti gli "oggetti" di $hotel
                         e il secondo deve prendere tutti i valori 
                    -->
                    <?php
                    // primo ciclo per gli ogetti
                    foreach ($hotels as $hotel) {

                    ?>
                        <tr>
                            <?php
                            // secondo ciclo per i valori degli oggetti
                            foreach ($hotel as $chiave => $valore) {
                            ?>
                                <td scope="row">
                                    <?php
                                    if ($chiave == "parking") {
                                        if ($valore) {
                                            echo "yes";
                                        } else {
                                            echo "no";
                                        }
                                    } else {
                                        echo $valore;
                                    }
                                    ?>
                                </td>
                            <?php
                            };
                            ?>
                        </tr>
                    <?php
                    };
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>