<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

require_once BASE_DIR . '/vendor/autoload.php';

$data = [
  'title'=>'What kind of Coffee we serve for you',
    'description'=>'Who are in extremely love with eco friendly system.',
    'images'=>[
        'g1.jpg',
        'g2.jpg',
        'g3.jpg',
        'g4.jpg',
        'g5.jpg'


    ]
];

//dd(json_encode($data));

require_once BASE_DIR . '/configs/constants.php';

try{

    require_once APP_DIR . 'index.php';

    require_once BASE_DIR . '/configs/router.php';

}
catch (Exception $exception)
{
//    echo '<pre>';
//    var_dump($exception);
//    die();
    dd($exception->getCode().'-'.$exception->getMessage());
}


