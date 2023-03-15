<?php
function hitung($angka1, $angka2, $angka3) {
    $hasil = array();
    $hasil['penjumlahan'] = $angka1 + $angka2 + $angka3;
    $hasil['pengurangan'] = $angka1 - $angka2 - $angka3;
    $hasil['pembagian'] = $angka1 / $angka2 / $angka3;
    $hasil['modulus'] = $angka1 % $angka2 % $angka3;
    return $hasil;
    }

    $hasil = hitung(5, 10, 15);
    echo "Hasil penjumlahan: " . $hasil['penjumlahan'] . "<br>";
    echo "Hasil pengurangan: " . $hasil['pengurangan'] . "<br>";
    echo "Hasil pembagian: " . $hasil['pembagian'] . "<br>";
    echo "Hasil modulus: " . $hasil['modulus'] . "<br>";

?>