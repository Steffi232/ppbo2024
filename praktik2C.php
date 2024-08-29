<?php

function luasLingkaran($jari) : float {
    $luas = 3.14*$jari*$jari;
    return $luas;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah}";