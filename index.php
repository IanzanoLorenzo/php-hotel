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
    <title>Hotels</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
    <?php include __DIR__.'/components/header.php'; ?>
    <main>
        <div class="container">
            <div class="row g-5">
            <?php foreach($hotels as $index => $hotel) { ?>
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-header"><?php echo $hotel['name']; ?></div>
                        <div><?php echo $hotel['description']; ?></div>
                        <div><?php echo $hotel['parking'] ? 'Parcheggio interno' : 'Parcheggio non presente'; ?></div>
                        <div><?php echo 'Voto: '.$hotel['vote']; ?></div>
                        <div><?php echo $hotel['distance_to_center'].'km'; ?></div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>