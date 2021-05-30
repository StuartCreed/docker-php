<?php

function getKatas() {
    $katasDirectory = scandir('./app/katas');
    $katas = array_filter($katasDirectory, function($val) {
        return str_starts_with($val, 'kata');
    });
    foreach ($katas as $kata) {
        $kata = trim($kata, '.php');
        echo "<a href='./katas/{$kata}'>${kata}</a><br>";
    }
}
