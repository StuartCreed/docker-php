<?php

$url = URI();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (str_starts_with($url,'/search')) {
        require './search.php';
    } else {
        http_response_code('404');
        require_once 'app/views/404.view.php';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    switch($url):
        case '/':
        case '/index':
        case '/search':
            require_once 'app/views/index.view.php';
            break;
            //TODO Make a route for any kata
        default:
            if (str_starts_with($url,'/katas')) {
                require_once "./app$url.php";
            } else {
                http_response_code('404');
                require_once 'app/views/404.view.php';
            }
            break;
    endswitch;
}
