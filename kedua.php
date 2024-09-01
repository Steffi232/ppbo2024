<?php

function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}
function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}
function volumeBola($jari) : float {
    $volume_bola = (4/3) * 3.14 * $jari ** 3;
    return $volume_bola;
}
function volumeTabung($jari,$tinggi) : float {
    $volume_tabung = 3.14 * $jari * $jari * $tinggi;
    return $volume_tabung;
}
function volumeKerucut($jari,$tinggi) : float {
    $volume_kerucut = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume_kerucut;
}

$luas_tanah = luasLingkaran(45);
echo "Luas tanah budi adalah {$luas_tanah} m^2\n";

$keliling_tanah = kelilingLingkaran(54.5);
echo "Keliling tanah budi adalah {$keliling_tanah} m\n";

$volume_globe = volumeBola(56);
echo "Volume bola globe dunia budi adalah {$volume_globe} cm^3\n";

$volume_tumblr = volumeTabung(18,23);
echo "Volume tumblr milik budi adalah {$volume_tumblr} ml\n";

$volume_traffic_cone = volumeKerucut(15,24.5);
echo "Volume traffic cone tersebut adalah {$volume_traffic_cone} cm^3";

?>