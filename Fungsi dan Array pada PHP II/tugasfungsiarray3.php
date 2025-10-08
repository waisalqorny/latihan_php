<?php
$produk = [
    ["nama" => "kamera", "kategori" => "Elektronik", "harga" => 30000000, "rating" => 4.7],
    ["nama" => "lighting", "kategori" => "Elektronik", "harga" => 6500000, "rating" => 4.6],
    ["nama" => "pc", "kategori" => "Aksesoris", "harga" => 20000000, "rating" => 4.5]
];

echo "<h3>Soal 3</h3>";

// Cari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $p) {
    if ($p["harga"] > $tertinggi["harga"]) {
        $tertinggi = $p;
    }
}

echo "Produk dengan harga tertinggi:<br>";
echo "Nama: " . $tertinggi["nama"] . "<br>";
echo "Kategori: " . $tertinggi["kategori"] . "<br>";
echo "Harga: Rp " . number_format($tertinggi["harga"], 0, ',', '.') . "<br>";
echo "Rating: " . $tertinggi["rating"] . "<br>";
?>
