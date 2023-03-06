<?php

function renderView(string $viewName, string $layout = 'main', array $data = []) {
    ob_start();
    extract($data);
    require __DIR__.'./views/'. $viewName .'.php';
    $contenu = ob_get_clean();
    require __DIR__.'./views/layout/'.$layout.'.php';
}