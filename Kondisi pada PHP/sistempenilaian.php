<?php
$nilai_mahasiswa = 88;

if ($nilai_mahasiswa >= 85) {
    $grade = "A";
} elseif ($nilai_mahasiswa >= 75) {
    $grade = "B";
} elseif ($nilai_mahasiswa >= 60) {
    $grade = "C";
} else {
    $grade = "D";
}
echo "Nilai Anda adalah $nilai_mahasiswa, sehingga Anda mendapatkan grade: $grade";
?>