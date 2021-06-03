<?php

function URI() {
    return $_SERVER['REQUEST_URI'];
}

function showKatas() {
    $katasDirectory = scandir('./app/katas');
    $katas = array_filter($katasDirectory, function($val) {
        return str_starts_with($val, 'kata');
    });
    foreach ($katas as $kata) {
        $kata = trim($kata, '.php');
        echo $kata . " ";
    }
}
