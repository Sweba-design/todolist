<?php
session_start();
require '../vendor/autoload.php';
require '../functions.php';

$url = $_SERVER['REQUEST_URI'];
$message = null;
if(isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

switch ($url) {
    case '/home':
    case '/':
        $title = 'Ma page d\'accueil';
        renderView('index', 'main', compact('title', 'message'));
        break;
    case '/contact':
        renderView('contact');
        break;
    case '/inscription':
        $title = 'Mon super titre de page d\'inscription';
        renderView('inscription', 'main',compact('title'));
        break;
    case '/inscription_traitement':
        require '../controller/inscription.php';
        break;
    case '/connexion':
        renderView('connexion', 'main', compact( 'message'));
        break;
    case '/deconnexion':
        require '../controller/deconnexion.php';
        break;
    case '/connexion_traitement':
        require '../controller/connexion.php';
        break;
    case '/admin':
        renderView('dashboard', 'admin');
        break;
    case '/admin/users_traitement':
        require '../controller/users.php';
        break;
    default:
        require '../views/error.php';
}


