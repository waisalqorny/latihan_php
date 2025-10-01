<?php

// Fungsi untuk menentukan bilangan terbesar dari 2 bilangan
function bilanganTerbesar($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

// Contoh penggunaan
$angka1 = 200;
$angka2 = 150;
echo "Bilangan terbesar dari $angka1 dan $angka2 adalah: " . bilanganTerbesar($angka1, $angka2) . "<br><br>";

// Menggunakan fungsi getdate()
$today = getdate();
echo "Tanggal sekarang : " . $today['mday'] . "-" . $today['mon'] . "-" . $today['year'] . "<br><br>";


// Menggunakan fungsi date()
echo "Tanggal sekarang: " . date('d-F-Y') . "<br>";
?>
