<?php

use App\Tools\DevTools;
use App\Tools\LibsLoader;
use App\Tools\DatabaseTools;


$loader = require '../vendor/autoload.php';
// var_dump($loader);

//instancier et appeller les librairies externes
$libsLoader = new LibsLoader();
$libsLoader->loadLibraries();

//instancier un devTool
$tools = new DevTools();

//instancier un tool pour pouvoir utiliser la BDD
$dbTools = new DatabaseTools("mysql", "vtc", "root", "root");

// ================== ÉTAT D'AVANCEMENT ==========================

// 1: Création de la bdd --> OK
// 2: Création des 3 affichages: conducteur, association_vehicule_conducteur et vehicule

// ===============================================================

$request = $_SERVER['REQUEST_URI'];
$uri = parse_url($request, PHP_URL_PATH);

require('./components/header.php');
require('./components/navbar.php');


switch ($uri) {
    case '/':
        require __DIR__ . '/pages/conducteur.php';
        break;
    case '/conducteur':
        require __DIR__ . '/pages/conducteur.php';
        break;
    case '/association_vehicule_conducteur':
        require __DIR__ . '/pages/association_vehicule_conducteur.php';
        break;
    case '/vehicule':
        require __DIR__ . '/pages/vehicule.php';
        break;
    default:
        require __DIR__ . '/pages/conducteur.php';
        break;
}




?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    

</body>

</html>