<?php

$_SESSION['user'] = null;
$_SESSION['message'] = 'Vous êtes bien déconnecté !';
header('Location: /');
