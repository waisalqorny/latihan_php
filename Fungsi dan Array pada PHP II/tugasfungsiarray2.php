<?php
$buah = [
    ["Anggur", 15000, 10],
    ["lemon", 12000, 8],
    ["nanas", 20000, 5]
];

echo "<h3>Soal 2</h3>";

// 1. Cetak nama buah pertama
echo "Nama buah pertama: " . $buah[0][0] . "<br>";

// 2. Hitung total nilai stok * harga
$total = 0;
for ($i = 0; $i < count($buah); $i++) {
    $total += $buah[$i][1] * $buah[$i][2];
}

echo "Total nilai seluruh stok: Rp " . number_format($total, 0, ',', '.') . "<br>";
?>
