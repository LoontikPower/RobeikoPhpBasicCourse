<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const BASE_DIR = __DIR__;

if (!session_id()) {
    session_start();
}

require_once BASE_DIR . '/vendor/autoload.php';

$data = [
    'title' => 'What kind of Coffee we serve for you',
    'description' => 'Who are in extremely love with eco friendly system.',
    'images' => [
        'g1.jpg',
        'g2.jpg',
        'g3.jpg',
        'g4.jpg',
        'g5.jpg'


    ]
];

//dd(json_encode($data));

require_once BASE_DIR . '/configs/constants.php';

try {
    require_once BASE_DIR . '/configs/DB.php';

    require_once APP_DIR . 'index.php';

//    $query = "SELECT*FROM content";
//    $query=DB::connect()->prepare($query);
//    $query->execute();
//    dd($query->fetchAll());

    if (!empty($_POST)) {

        require_once APP_DIR . 'forms/controller.php';
    } else {
        $commonBlocks = getContent('name IN ("navigation","footer")');

        require_once BASE_DIR . '/configs/router.php';
    }


} catch (PDOException $exception) {
//    d('PDOException');
    notify( $exception->getMessage(),'danger');
    redirectBack();
} catch (Exception $exception) {
//    echo '<pre>';
//    var_dump($exception);
//    die();
    dd($exception->getCode() . '-' . $exception->getMessage());
}


