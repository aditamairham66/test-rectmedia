<?php
function SOAL1($X, $Y) {
    $N = count($X);
    
    if ($N == 0 || $Y % $N == 0) {
        return $X;
    }
    
    $Y = $Y % $N; // Optimisasi jika Y lebih besar dari N
    
    return array_merge(array_slice($X, -$Y), array_slice($X, 0, $N - $Y));
}

// Contoh Penggunaan
$X = [7, 2, 4, 1, 6, 8, 9];
$Y = 3;
print_r(SOAL1($X, $Y));

echo "</br>";
echo "</br>";
echo "</br>";

$X = [1, 2, 3];
$Y = 3;
print_r(SOAL1($X, $Y));
