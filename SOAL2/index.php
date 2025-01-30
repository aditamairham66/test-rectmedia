<?php
function SOAL2($X) {
    $N = count($X);
    if ($N == 0) return -1; // Jika array kosong, kembalikan -1

    // Hitung kemunculan setiap angka
    $count = array_count_values($X);
    
    // Cari elemen yang muncul lebih dari setengah panjang array
    $threshold = floor($N / 2);
    $dominator = null;

    foreach ($count as $key => $value) {
        if ($value > $threshold) {
            $dominator = $key;
            break;
        }
    }

    if ($dominator === null) {
        return -1; // Tidak ada yang mendominasi
    }

    // Ambil semua index di mana nilai sama dengan dominator
    $indexes = [];
    foreach ($X as $index => $value) {
        if ($value == $dominator) {
            $indexes[] = $index;
        }
    }

    return $indexes;
}

// Contoh Penggunaan
$X = [3, 4, 3, 2, 3, -1, 3, 3];
print_r(SOAL2($X));

echo "</br>";
echo "</br>";
echo "</br>";

$X = [1, 2, 3, 4, 5];
print_r(SOAL2($X));
