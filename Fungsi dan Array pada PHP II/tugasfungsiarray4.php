<?php
echo "<h3>Soal 4</h3>";

// Membuat array 3x3 berisi angka acak
$matriks = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriks[$i][$j] = rand(1, 9);
    }
}

// Cetak array dalam bentuk tabel
echo "<table border='1' cellpadding='5' cellspacing='0'>";
$total = 0;
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matriks[$i][$j] . "</td>";
        $total += $matriks[$i][$j];
    }
    echo "</tr>";
}
echo "</table>";

// Tampilkan jumlah total semua elemen
echo "<br>Total semua elemen: " . $total;
?>
