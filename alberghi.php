<?php
$vote = $_GET["vote"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My hotel</title>
</head>

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

<body>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Hotels</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>

                </tr>
            </thead>
        <tbody>
            <?php
            
            foreach($hotels as $hotel){
                if($vote == $hotel["vote"]){
                    echo "<tr>
                    
                    <td>".$hotel["name"] ."</td>
                    <td>".$hotel["description"]."</td>
                    <td>".$hotel["parking"]."</td>
                    <td>".$hotel["vote"]."</td>
                    <td>".$hotel["distance_to_center"]."</td>
                    </tr>";
                }

            }

            ?>
        </tbody>
    </table>
    <a href="ricerca.php">Back to page</a>
</body>

</html>