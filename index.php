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

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

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
        } else {
            echo "<h2>Attento ai dati che stai inserndo</h2>";
        }
        ?>
    </div>

    <div>
        <h2>Posts</h2>
        <div>
            <?php
            foreach ($posts as $data => $postData) {
                echo "<h3>{$data}</h3>";
                echo "<ul>";
                foreach ($postData as $post) {
                    echo "
                        <li>
                        <h3>{$post['title']}</h3>
                        <p>{$post['author']}</p>
                        <p>{$post['text']}</p>
                        </li>";
                }
                echo "</ul>";
            }
            ?>
        </div>
    </div>


</body>

</html>