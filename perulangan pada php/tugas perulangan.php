<?php
echo "=== PENILAIAN 100 MAHASISWA === <br><br>";

for ($i = 1; $i <= 100; $i++) {
    // Nama mahasiswa dibuat otomatis: Mahasiswa 1, Mahasiswa 2, dst
    $nama = "Mahasiswa " . $i;

    // Nilai random antara 0 sampai 100
    $nilai = rand(0, 100);

    // Tentukan grade
    if ($nilai >= 80 && $nilai <= 100) {
        $grade = "A";
    } elseif ($nilai >= 61 && $nilai <= 79) {
        $grade = "B";
    } elseif ($nilai >= 51 && $nilai <= 60) {
        $grade = "C";
    } elseif ($nilai >= 41 && $nilai <= 50) {
        $grade = "D";
    } elseif ($nilai >= 0 && $nilai <= 40) {
        $grade = "E";
    } else {
        $grade = "Nilai tidak valid";
    }

    // Tampilkan hasil
    echo $nama . " | Nilai: " . $nilai . " | Grade: " . $grade . "<br>";
}
?>
