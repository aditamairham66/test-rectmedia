```markdown
# Dokumentasi Penggunaan

Repositori ini berisi dua solusi untuk permasalahan pemrograman dalam PHP.

## Struktur Folder
```
/SOAL1/index.php   -> Rotasi Array X Sebanyak Y Kali
/SOAL2/index.php   -> Menemukan Indeks Dominator di Array
```

---

## SOAL 1: Rotasi Array X Sebanyak Y Kali
### Deskripsi:
Fungsi `solution($X, $Y)` menerima array `X` yang terdiri dari bilangan bulat dan menggeser elemen array ke kanan sebanyak `Y` kali.

### Lokasi Kode:
```plaintext
/SOAL1/index.php
```

### Contoh Penggunaan:
```php
require 'SOAL1/index.php';

$X = [7, 2, 4, 1, 6, 8, 9];
$Y = 3;
print_r(solution($X, $Y));

// Output:
// Array ( [0] => 6 [1] => 8 [2] => 9 [3] => 7 [4] => 2 [5] => 4 [6] => 1 )
```

---

## SOAL 2: Menemukan Indeks Dominator di Array
### Deskripsi:
Fungsi `solution($X)` mencari elemen yang muncul lebih dari setengah panjang array dan mengembalikan indeks di mana elemen tersebut muncul. Jika tidak ada elemen yang mendominasi, fungsi mengembalikan `-1`.

### Lokasi Kode:
```plaintext
/SOAL2/index.php
```

### Contoh Penggunaan:
```php
require 'SOAL2/index.php';

$X = [3, 4, 3, 2, 3, -1, 3, 3];
print_r(solution($X));

// Output:
// Array ( [0] => 0 [1] => 2 [2] => 4 [3] => 6 [4] => 7 )
```

Jika tidak ada nilai yang mendominasi:
```php
$X = [1, 2, 3, 4, 5];
print_r(solution($X));

// Output: -1
```


## Persyaratan
- PHP 7.4 atau lebih baru
- File `index.php` di setiap folder harus dieksekusi dalam server PHP atau terminal

## Cara Menjalankan
1. Pastikan PHP terinstal.
2. Jalankan perintah berikut untuk menjalankan kode di masing-masing folder:

   **SOAL 1:**
   ```sh
   php SOAL1/index.php
   ```

   **SOAL 2:**
   ```sh
   php SOAL2/index.php
   ```