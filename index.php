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
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
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

</body>

</html>