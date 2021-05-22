<?php

switch($_SERVER['REQUEST_URI']):
    case '/':
    case '/index':
        require './views/index.view.php';
        break;
    case '/noodles':
        require './views/noodles.view.php';
        break;
    default:
        http_response_code('404');
        require './views/404.view.php';
        break;
endswitch;
