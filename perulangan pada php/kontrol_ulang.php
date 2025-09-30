<?php
echo "Hasil Klasifikasi Nilai dengan Perulangan <br><br>";

for ($nilai = 0; $nilai <= 100; $nilai++) {
    if ($nilai >= 0 && $nilai <= 40) {
        echo $nilai . " = Folder E <br>";
    } elseif ($nilai >= 41 && $nilai <= 50) {
        echo $nilai . " = Folder D <br>";
    } elseif ($nilai >= 51 && $nilai <= 60) {
        echo $nilai . " = Folder C <br>";
    } elseif ($nilai >= 61 && $nilai <= 79) {
        echo $nilai . " = Folder B <br>";
    } elseif ($nilai >= 80 && $nilai <= 100) {
        echo $nilai . " = Folder A <br>";
    }
}
?>