<?php 
    require __DIR__.'/partials/variables/hotels.php';
    $parcheggio;
    $voto;

    if(isset($_GET)){
        if(isset($_GET['parcheggio'])){
            $parcheggio = filter_var($_GET['parcheggio'], FILTER_VALIDATE_BOOLEAN);
            $tempArray = [];
            foreach($hotels as $hotel){
                if($hotel['parking'] === $parcheggio){
                    $tempArray[] = $hotel;
                };
            };  
            $hotels = $tempArray;
        };
        if(isset($_GET['voto'])){
            $voto = filter_var($_GET['voto'], FILTER_VALIDATE_FLOAT);
            $tempArray = [];
            foreach($hotels as $hotel){
                if($hotel['vote'] >= $voto){
                    $tempArray[] = $hotel;
                };
            };  
            $hotels = $tempArray;
        };
    };
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
    <?php include __DIR__.'/partials/header.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3 mb-5">
                    <form action="index.php" method="GET">
                        <div class="d-flex flex-column">
                            <label>Parcheggio</label>
                            <select name="parcheggio">
                                <option value="" disabled selected>Scegli</option>
                                <option value="true">Sì</option>
                                <option value="false">No</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column">
                            <label>Voto</label>
                            <input name="voto" type="number" min="0" max="5" placeholder="Inserisci un numero da 1 a 5">
                        </div>
                        <button type="submit">Cerca</button>
                        <button type="reset">Cancella</button>
                    </form>
                </div>
                <div class="col-12 col-md-9">
                    <ul class="row g-5 list-unstyled">
                        <?php foreach($hotels as $index => $hotel) { ?>
                            <li class="col-6 col-md-4 col-xl-3">
                                <div class="card">
                                    <div class="card-header"><?php echo $hotel['name']; ?></div>
                                    <div class="card-body">
                                        <div><?php echo $hotel['description']; ?></div>
                                        <div><?php echo $hotel['parking'] ? 'Parcheggio interno presente' : 'Parcheggio non presente'; ?></div>
                                        <div><?php echo 'Voto: '.$hotel['vote']; ?></div>
                                    </div>
                                    <div class="card-footer"><?php echo $hotel['distance_to_center'].'km dal centro'; ?></div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>
</html>