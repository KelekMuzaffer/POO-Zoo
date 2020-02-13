<?php

require __DIR__ . '/vendor/autoload.php';

//$poisson = new \App\Animals\Fish('Oscar');
//echo $poisson->noise();
//$Zebra = new \App\Animals\Zebra('Zebre');
//echo $Zebra->noise();

$animal = [

    ['type' => \App\Animals\Fish::class,
    'nbr' => 5,
    ],
    [
        'type' => \App\Animals\BubbleFish::class,
        'nbr' => 3
    ],
    [
        'type' => \App\Animals\CatFish::class,
        'nbr' => 2
    ],
    [
    'type' => \App\Animals\ClownFish::class,
    'nbr' => 1
    ],
    [
    'type' => \App\Animals\Elephant::class,
    'nbr' => 2
    ],
    [
        'type' => \App\Animals\Zebra::class,
        'nbr' => 1
    ],
    [
        'type' => \App\Animals\Parrot::class,
        'nbr' => 10
    ],
    [
        'type' => \App\Animals\Dove::class,
        'nbr' => 2
    ]

    ];

foreach ($animal as $class) {
    for ($i=0;$i<$class['nbr'];$i++){
        $temp = new $class['type']($class['type'] . ($i+1));
        echo $temp->noise() . '<br />';
    }
}
//Utilisation de la reflexion
//foreach ($animal as $class) {
//    for ($i=0;$i<$class['nbr'];$i++){
//        $temp = new $class['type']((new \ReflectionClass($class['type']))->getShortName() . ' ' . ($i+1));
//        echo $temp->noise() . '<br />';
//    }
//}