<?php
$calendario = [
    [
        'squadraCasa' => 'Reyer Venezia Mestre',
        'punteggioCasa' => 60,
        'squadraOspiti' => 'Olimpia Milano',
        'punteggioOspiti' => 40
    ],
    [
        'squadraCasa' => 'Polisportiva Dinamo',
        'punteggioCasa' => 50,
        'squadraOspiti' => 'New Basket Brindisi',
        'punteggioOspiti' => 66
    ],
    [
        'squadraCasa' => 'Reggiana',
        'punteggioCasa' => 50,
        'squadraOspiti' => 'Varese',
        'punteggioOspiti' => 66
    ],
    [
        'squadraCasa' => 'Brescia',
        'punteggioCasa' => 50,
        'squadraOspiti' => 'VL Pesaro',
        'punteggioOspiti' => 66
    ],
    [
        'squadraCasa' => 'Brindisi',
        'punteggioCasa' => 50,
        'squadraOspiti' => 'Napoli',
        'punteggioOspiti' => 66
    ]
];

$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>

<body>

    <div>
        <h2>Primo snack</h2>
        <ul>
            <?php
            for ($i = 0; $i < count($calendario); $i++) {
                echo "
                    <li>
                        {$calendario[$i]['squadraCasa']} - {$calendario[$i]['squadraOspiti']} | {$calendario[$i]['punteggioCasa']} - {$calendario[$i]['punteggioOspiti']} 
                    </li>";
            }
            ?>
        </ul>
    </div>
    <div>
        <h2>Secondo Snack</h2>
        <?php
        if (isset($name) && isset($mail) && isset($age)) {
            if (strlen($name) >= 3 && strstr($mail, '@') && strstr($mail, '.')  &&  is_numeric($age)) {
                echo "<p>Accesso riuscito</p>";
            } else {
                echo "<p>Accesso negato</p>";
            }
        }
        ?>
    </div>


</body>

</html>