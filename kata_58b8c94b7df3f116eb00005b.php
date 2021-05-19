<?php

function reverseLetter(string $str): string {
    return strrev(preg_replace('/[^a-zA-Z]/', '', $str));
}

echo reverseLetter('krishan*0_)');