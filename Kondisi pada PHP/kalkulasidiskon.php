<?php
$total_belanja = 60000;
if ($total_belanja > 50000) {
    $diskon = $total_belanja * 0.10; // Diskon 10%
    $total_bayar = $total_belanja - $diskon;
    echo "Selamat! Anda mendapat diskon Rp " . number_format($diskon) . ".<br>";
    echo "Total yang harus dibayar: Rp " . number_format($total_bayar);
} else {
    echo "Total belanja Anda: Rp " . number_format($total_belanja) . ".<br>";
    echo "Belanja lebih dari Rp 50.000 untuk mendapatkan diskon.";
}
?>