<?php
$url = $_SERVER['REQUEST_URI'];

switch($url):
    case '/':
    case '/index':
        require_once 'app/views/index.view.php';
        break;
    default:
        if (str_starts_with($url,'/katas')) {
            require_once "./app$url.php";
        } else {
            http_response_code('404');
            require_once 'app/views/404.view.php';
        }
        echo "<br><br><a href='/'>Katas search</a>";
        break;
endswitch;
